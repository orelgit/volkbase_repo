<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar'? 'rtl' : 'ltr' }}">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>VolkBase</title>
  {{-------> links <--------}}
  {{-- ///> css </// --}}
   <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
 <link rel="stylesheet" href="{{ asset('css/home.css') }}">
 <link rel="stylesheet" href="{{ asset('css/login.css') }}">
 


  {{-- ///> fontawsom icons </// --}}
  <link rel="stylesheet" href="{{ url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}">

  
</head>
<body>
  {{-------> Header <--------}}

@yield('header')
  {{-------> content <--------}}
  @yield('content')


  {{-------> footer <--------}}
  @yield('footer')

  {{-------> js <--------}}
     <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>