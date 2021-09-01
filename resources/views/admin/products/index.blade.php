@extends('layouts.master')
@section('titulo', 'Admin | Productos')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s9">
            <h5>Productos</h5>
            <a class="btn" href="{{route('admin.products.create')}}"> Crear Nuevo Producto</a>
            <table>
                <thead>
                  <tr>
                      <th>Titulo</th>
                      <th>Precio</th>
                      <th>Categoria</th>
                      <th>Acciones</th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($products as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category->name}} <div style="background: {{$product->category->color}};width:22px; height: 22px;" class="color"></div></td>
                        <td><a href="{{route('admin.products.edit', $product)}}">Editar</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
    </div>
@endsection