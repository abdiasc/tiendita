@extends('layouts.master')

@section('content')
    <div class="row content-login">
        <div class="col s4 offset-s4">
            <div class="row content-padding">
                <div class="col s12 login-header">
                    <span class="icon-bubbles2"></span> INICIAR SESION
                </div>
                <div class="col s12 login-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="col s12 margin-top-bot">
                            <label for="email">{{ __('Correo Electronico') }}</label>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Escriba su correo electronico">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col s12 margin-top-bot">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Escribe tu contraseña">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col s12 margin-top-bot">
                            <label>
                                <input type="checkbox" class="filled-in" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>{{ __('Recordarme!') }}</span>
                            </label>                   
                        </div>
                        <div class="col s12 margin-top-bot">
                            <button type="submit" class="btn btn-inicia">
                                {{ __('Iniciar Sesion') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                        {{ __('¡He olvidado mi contraseña!') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
