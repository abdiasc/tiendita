@extends('layouts.master')
@section('titulo', 'Admin | Editas Categoría')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s9">
            <h5>Editar Categoria</h5>
            {!! Form::model($category, ['route'=>['admin.categories.update', $category], 'method'=>'put']) !!}
            @include('admin.categories.components.form')
            
            {!! Form::submit('Crear Categoría', ['class'=>'btn']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery.stringToSlug.min.js') }}" defer></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });
    </script>
@endsection