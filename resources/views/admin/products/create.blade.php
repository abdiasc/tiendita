@extends('layouts.master')
@section('titulo', 'Admin | Crear Producto')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s9">
            <h5>Crear Producto</h5>
            {!! Form::open(['route'=>'admin.products.store', 'autocomplete'=>'off', 'files'=>true]) !!}
                @include('admin.products.components.form')
                {!! Form::submit('Crear Post', ['class'=>'btn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery.stringToSlug.min.js') }}" defer></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });
        ClassicEditor
            .create( document.querySelector( '#stract' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );

        // Cambiar Imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);
        function cambiarImagen(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event)=>{
                document.getElementById("picture").setAttribute('src',event.target.result);
            };
            reader.readAsDataURL(file);

        }
    </script>


@endsection