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
            <a class="btn" href="{{route('admin.plans.create')}}"> Crear Nueva Etiqueta</a>
            <table>
                <thead>
                  <tr>
                      <th>id</th>
                      <th>Nombre</th>
                    
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($plans as $plan)
                    <tr>
                        <td>{{$plan->id}}</td>
                        <td>{{$plan->name}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection