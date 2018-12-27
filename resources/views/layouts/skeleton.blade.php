<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        @include ('layouts.head')
    @show
</head>
<body id="app" class="app flex-row align-items-center">
    @yield('content')

    @section('scripts')
        @include ('layouts.scripts')
    @show
</body>
</html>
