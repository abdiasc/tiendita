@extends('layouts.master')
@section('titulo', 'Admin | Crear Etiqueta')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s9">
            <h5>Crear Etiqueta</h5>
            {!! Form::open(['route'=>'admin.tags.store']) !!}
            @include('admin.tags.components.form')
            {!! Form::submit('Crear Etiqueta', ['class'=>'btn']) !!}
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