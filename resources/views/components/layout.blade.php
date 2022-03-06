<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VolkBase</title>
    {{-- -----> links <------ --}}
    {{-- ///> css </// --}}
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    {{-- ///> smoothscroll </// --}}
    <link rel="stylesheet" href="{{ asset('css/smoothscroll/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smoothscroll/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smoothscroll/owl.theme.default.min.css') }}">

    {{-- ///> fontawsom icons </// --}}
    <link rel="stylesheet" href="{{ url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css') }}">


</head>

<body>
    {{-- -----> Header <------ --}}

    @yield('header')
    {{-- -----> content <------ --}}
    @yield('content')
    {{-- -----> footer <------ --}}
    @yield('footer')


    <x-flash />
    {{-- -----> js <------ --}}
    {{-- smoothscroll --}}
    <script src="{{ asset('js/smoothscroll/jquery.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll/aos.js') }}"></script>
    <script src="{{ asset('js/smoothscroll/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/smoothscroll/custom.js') }}"></script>
    {{-- flash --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{-- menu --}}
    <script src="{{ URL::asset('js/script.js') }}"></script>


</body>

</html>
