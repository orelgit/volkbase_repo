@yield('components.layout')

@section('header')
    <header class="header">
        <a href="#" class="logo"><img src="{{ asset('images/logo2.png') }}" alt=""></a>

        <nav class="navbar">
            <a href="{{ URL::route('index-homePage', app()->getLocale()) }}">{{ __('tran.home') }}</a>
            <a href="#service">{{ __('tran.services') }}</a>
            <a href="#blog">{{ __('tran.blog') }}</a>
            <a href="#contact">{{ __('tran.contact') }}</a>
            <a href="#about">{{ __('tran.about') }}</a>

        </nav>

        <div class="icons">

            <div id="menu-btn" class="fas fa-bars"></div>
            {{-- <div id="search-btn" class="fas fa-search"></div> --}}
            <div id="lang-btn" class="fas fa-language"></div>


            @if (Auth::check() &&
    auth()->user()->can('admin'))
                {{-- إظهار زر الادمن فقط للادمن --}}
                <a href="{{ URL::route('admin-homePage', app()->getLocale()) }}">
                    <div class="fas fa-user-shield"></div>
                </a>
            @endif




            @auth
                {{-- إظهار اسم المستخدم وزر الخروج اذا كان مسجل دخوله --}}

                <!-- profile -->
                <form class="aicon" action="{{ URL::route('logout-page', app()->getLocale()) }}" method="POST">
                    @csrf
                    <button class="fas fa-sign-out aicon" type="submit"></button>
                </form>
                <div class="aicon"><a href="">{{ auth()->user()->u_name }}</a></div>


                {{-- إظهار تسجيل الدخول وتسجيل حساب اذا كان مش مسجل --}}
            @else
                <div> <a href="{{ URL::route('login-page', app()->getLocale()) }}" id="login-btn"
                        class="fas fa-user aicon"></a></div>

            @endauth

        </div>




        {{-- lang --}}
        <div class="lang-form">
            <select class="changeLang" onchange="javascript:location.href = this.value;">
                <option value="">{{ __('tran.HR choose') }}</option>
                <option value="{{ route(Route::currentRouteName(), 'en') }}">{{ __('tran.HR en') }}</option>
                <option value="{{ route(Route::currentRouteName(), 'ar') }}">{{ __('tran.HR ar') }}</option>
            </select>
        </div>


    </header>
@endsection
