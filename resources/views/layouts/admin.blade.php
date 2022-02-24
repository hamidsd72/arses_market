<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'El Messiri', sans-serif;
            }
        </style>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav style="background-color: #f9c615" class="navbar navbar-expand-md navbar-light shadow-sm">
                <div class="container">
                    <div class="custom-control-inline">
                        <a href="{{ route('admin') }}" class="text-success h3 mt-2">ADMIN</a>
                        <a href="{{ route('admin') }}" class="text-muted h3 mt-2 ml-1">PANEL</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            @if ( Auth::user()->avatar )
                                <img src="/{{ Auth::user()->avatar }}" class="rounded-circle" width="40px" alt="{{ Auth::user()->name }}">
                            @else
                                <img src="t.png" class="rounded" width="40px" alt="{{ Auth::user()->name }}">
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @include('session')
                @yield('content')
            </main>
        </div>
    </body>
</html>
