@extends('layouts.master')
@section('titulo', 'Admin | Productos')

@section('content')
    <div class="row content-login">
        <div class="col s4 offset-s4">
            <div class="row content-padding">
                <div class="col s12 login-header">
                    <span class="icon-bubbles2"></span> CREAR UNA CUENTA GRATIS
                </div>
                <div class="col s12 login-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="row">
                                <div class="col s12">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                    @error('name')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col s12">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col s12">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col s12">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col s12">
                                    <button type="submit" class="btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
                
            </div>    
        </div>
    </div>
@endsection
