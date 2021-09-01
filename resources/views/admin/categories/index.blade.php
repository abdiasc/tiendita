@extends('layouts.master')
@section('titulo', 'Admin | Categorias')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s5">
            <h5>Categorias</h5>
            <a class="btn" href="{{route('admin.categories.create')}}"> Crear Nueva Categoría</a>
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
                  @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><div style="background: {{$category->color}};width:22px; height: 22px;" class="color"></div></td>
                        <td><a href="{{route('admin.categories.edit', $category)}}">Editar</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection