<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/landing/assets/favicon.ico') }}" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('theme/landing/css/styles.css') }}" rel="stylesheet" />

    @yield('css')

    @livewireStyles
</head>

<body>
    <!-- Responsive navbar-->
    @include('layouts.landing.partials.navbar')

    <!-- Page header with logo and tagline-->
    @yield('page_header')

    <!-- Page content-->
    <div class="container">
        {{ $slot }}
    </div>

    <!-- Footer-->
    @include('layouts.landing.partials.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{ asset('theme/landing/js/scripts.js') }}"></script>

    @yield('js')

    @livewireScripts
</body>

</html>
