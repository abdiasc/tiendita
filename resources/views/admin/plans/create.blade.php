@extends('layouts.master')
@section('titulo', 'Admin | Nuevo plan')

@section('content')
    <div class="row content-mar-pad">
        <div class="col s3">
            <div class="row content-mar-pad">
                @include('admin.components.sidebar')
            </div>
        </div>
        <div class="col s9">
            <h5>Crear nuevo plan</h5>
            
        </div>
    </div>
@endsection