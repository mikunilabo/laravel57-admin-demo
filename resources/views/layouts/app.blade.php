<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Mikunilabo Admin Demo">
    <meta name="author" content="Kuniyasu Wada">
    <meta name="keyword" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">

    <!-- Favicon -->
    <link type="image/vnd.microsoft.icon" rel="shortcut icon" href="{{ asset(sprintf('images/favicon/%s', app()->isLocal() ? 'favicon.local.ico' : 'favicon.ico')) }}" />

    <script>
        window.Laravel = @json(['csrfToken' => csrf_token()]);
    </script>
</head>
<body id="app" class="app {{ request()->user() ? 'header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show' : 'flex-row align-items-center' }}">
    @auth
        @section('header')
            @include ('layouts.header')
        @show

        <div class="app-body">
            @section('sidebar')
                @include ('layouts.sidebar')
            @show

            @yield('content')

            @section('aside')
                @include ('layouts.aside')
            @show
        </div>

        @section('footer')
            @include ('layouts.footer')
        @show
    @else
        @yield('content')
    @endauth

    <!-- Scripts -->
    <script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
</body>
</html>
