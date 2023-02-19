<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/backend.js'])
    @stack('css')
    @laravelPWA
</head>
<body>
    <div class="main-container d-flex">
        @include('layouts.partials.backend.header')

        <div class="content">
            <!-- Navbar Start -->
                @include('layouts.partials.backend.navbar')
            <!-- Navbar End -->
            <!-- Messages Start -->
                @include('helpers.message')
            <!-- Messages End -->
            <!-- Content Start -->
                @yield('content')
            <!-- Content End -->
        </div>

    </div>
    @stack('js')
    @stack('script')
</body>
</html>
