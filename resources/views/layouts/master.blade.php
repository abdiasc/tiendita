<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <!--Fuentes e iconos de google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!--Materialize-->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <!--Icomoon-->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <!--My CSS-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
    
    @include('layouts.partials.menu')
    @yield('content')
    @include('layouts.partials.footer')
    



    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}" defer></script>
    @stack('js') 
    @yield('js')
</body>
</html>