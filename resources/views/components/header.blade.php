@yield('components.layout')

@section('header')
    <header class="header">
        <a href="/" class="logo"><img src="{{ asset('images/logo2.png') }}" alt=""></a>

        <nav class="header-navbar">
            <a href="{{ URL::route('index-homePage', app()->getLocale()) }}">{{ __('tran.home') }}</a>
            <a href="{{ URL::route('services-homePage', app()->getLocale()) }}">{{ __('tran.services') }}</a>
            <a href="{{ URL::route('blog-homePage', app()->getLocale()) }}">{{ __('tran.blog') }}</a>
            <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}">{{ __('tran.contact') }}</a>
            <a href="{{ URL::route('about-homePage', app()->getLocale()) }}">{{ __('tran.about') }}</a>

        </nav>

        <div class="icons">

            <div id="menu-btn" class="fas fa-bars"></div>
            {{-- <div id="search-btn" class="fas fa-search"></div> --}}
            <div id="lang-btn" class="fas fa-language"></div>
            {{-- <div id="" class=""></div> --}}

            @if (Auth::check() &&
    auth()->user()->can('admin'))
                {{-- إظهار زر الادمن فقط للادمن --}}
                <a title="Admin Dashboard" href="{{ URL::route('admin-homePage') }}">
                    <div class="fas fa-user-shield"></div>
                </a>
            @endif

            @auth
                {{-- إظهار اسم المستخدم وزر الخروج اذا كان مسجل دخوله --}}

                <!-- profile -->
                <form class="aicon" action="{{ URL::route('logout-page', app()->getLocale()) }}" method="POST">
                    @csrf
                    <button title="Log out" class="fas fa-sign-out aicon" type="submit"></button>
                </form>
                {{-- <div title="Profile" class="aicon"><a href="">{{ auth()->user()->u_name }}</a></div> --}}


                {{-- إظهار تسجيل الدخول وتسجيل حساب اذا كان مش مسجل --}}
            @else
                <div> <a href="" id="login-btn" class="fas fa-envelope aicon"></a>
                </div>

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
