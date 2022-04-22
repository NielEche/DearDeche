<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700i,700|Poppins:700">
    <link rel="stylesheet" href="{{ asset('files/css/font-awesome.css') }}" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('files/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('files/favicons/favicon.png') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <script src="https://github.com/Modernizr/Modernizr/raw/master/modernizr.js"></script>


    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
 

</head>

<body style="background-color: #f5f5f5 /* #e6e0d1 */;" class="font-sans antialiased bg-black">
    @include('partial.header')
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    @php
        $route = \Route::current()->getName();
    @endphp

    @if ($route == 'shop')
        @include('partial.footer')
    @else
        @include('partial.footer1')
    @endif

    @livewireScripts
    <script src="{{ asset('files/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('files/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('files/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('files/js/slide.js') }}"></script>
    <script src="{{ asset('files/js/home.js') }}"></script>
    <script type="application/javascript" src="{{ asset('files/js/lib.js') }}"></script>
    <script defer async type="application/javascript" src="{{ asset('files/js/app.js') }}"></script>
    <script type="application/javascript" src="{{ asset('files/js/lib.min.js') }}"></script>
</body>

</html>
