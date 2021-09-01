@extends('layouts.master')
@section('titulo', 'Admin | Etiquetas')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s9">
            <h5>Etiquetas</h5>
            <a class="btn" href="{{route('admin.tags.create')}}"> Crear Nueva Etiqueta</a>
            <table>
                <thead>
                  <tr>
                      <th>id</th>
                      <th>Nombre</th>
                      <th>Color</th>
                      <th>Acciones</th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td><div style="background: {{$tag->color}};width:22px; height: 22px;" class="color"></div></td>
                        <td><a href="{{route('admin.tags.edit', $tag)}}">Editar</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection