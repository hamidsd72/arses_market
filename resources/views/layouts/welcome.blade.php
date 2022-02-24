<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'El Messiri', sans-serif;
            }
        </style>


    </head>
    <body>
        @include('session')
        @yield('content')
    </body>
</html>
