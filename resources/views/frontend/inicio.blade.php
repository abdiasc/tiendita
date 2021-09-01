@extends('layouts.master')
@section('titulo', 'Bienvenido')
@section('content')

    <div class="row content-mar-pad">
        
        <div class="col s12 slider">

        </div>
        <div class="col s12 notice">
            <h5>Avisos a usuarios: <span> Mantenimiento programado para el 23 de abril del 2022 </span></h5>
        </div>
        <div class="col s12">
            <div class="row content-mar-pad">
                <div class="col s8">
                    <div class="row content-mar-pad">
                        @include('frontend.components.plan-card')
                    </div>
                </div>
                <div class="col s4">
                    Contenido
                </div>
            </div>
            <div class="row">
                @include('frontend.components.product-card')
            </div>
        </div>
    </div>
   
@endsection