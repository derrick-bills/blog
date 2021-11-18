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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- Pull in Compiled CSS file  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="bg-primary d-flex justify-content-between align-items-center">
        <ul class="d-flex p-2">
            <li  href = "" class = "p-3">Home</li>
            <li  href = "" class = "p-3">Dashboard</li>
            <li  href = "" class = "p-3">Post</li>
        </ul>
        <ul class="d-flex p-2">
            <li  href = "" class = "p-3">Derrick Bills</li>
            <li  href = "" class = "p-3">Login</li>
            <li  href = "" class = "p-3">Register</li>
            <li  href = "" class = "p-3">Logout</li>
        </ul>
    </nav>
</body>
</html>
