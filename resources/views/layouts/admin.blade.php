<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel Admin') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Template Bundle --}}
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    {{-- Font awesome --}}
    <script src="https://kit.fontawesome.com/d8170c95f7.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('layouts/includes/navbar-admin')

    <div id="layoutSidenav">
        @include('layouts/includes/sidebar-admin')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts/includes/footer-admin')
        </div>
    </div>

    {{-- Template Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
