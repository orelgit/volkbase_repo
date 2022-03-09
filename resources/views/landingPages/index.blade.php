@extends('components.layout')
@extends('components.header')
@section('content')
    <!-- home section starts  -->
    <section id="home" class="home">
        <h1 data-aos="fade-up" class="banner">{{ __('tran.HE title text') }}</h1>
        <h3 data-aos="fade-up" class="slogan">{{ __('tran.HE disc text') }}</h3>
        <a class="a-btn" href="#body">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            {{ __('tran.btn') }}
        </a>

        <div class="fas fa-cog nut1"></div>
        <div class="fas fa-cog nut2"></div>
    </section>
    <!-- home section ends -->
    <!-- services -->
    <section id="body" class="service">
        <h1 class="heading text-center" data-aos="fade-up">{{ __('tran.SE head title') }}</h1>

        <div class="row  g-5 py-5" id="readMore">
            <div class="col-10 col-sm-8 col-lg-6">
                <img data-aos="fade-up" data-aos-delay="400" src="{{ asset('images/74.svg') }}"
                    class="d-block mx-lg-auto img-fluid" width="400" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 lh-1 mb-3">
                    {{ __('tran.SE title web') }}</h1>
                <p data-aos="fade-up" data-aos-delay="200">{{ __('tran.SE disc web') }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ URL::route('services-homePage', app()->getLocale()) }}"
                        class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up">{{ __('tran.btn') }}</a>
                </div>
            </div>
        </div>

        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center ">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 ">
                <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 mb-3 lh-1">
                    {{ __('tran.SE title mob') }}
                </h1>
                <p data-aos="fade-up" data-aos-delay="200"> {{ __('tran.SE disc mob') }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="{{ URL::route('services-homePage', app()->getLocale()) }}"
                        class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up">{{ __('tran.btn') }}</a>
                </div>
            </div>
            <div class="col-lg-4 ">
                <img class="d-block mx-lg-auto img-fluid " data-aos="fade-up" data-aos-delay="400"
                    src=" {{ asset('images/84.svg') }}" alt="" width="400">
            </div>
        </div>


        <div class="row  g-5 py-5  mb-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img data-aos="fade-up" data-aos-delay="400" src="{{ asset('images/282.svg') }}"
                    class="d-block mx-lg-auto img-fluid " width="400" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 lh-1 mb-3">
                    {{ __('tran.SE title net') }}</h1>
                <p data-aos="fade-up" data-aos-delay="200"> {{ __('tran.SE disc net') }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ URL::route('services-homePage', app()->getLocale()) }}"
                        class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up">{{ __('tran.btn') }}</a>
                </div>
            </div>
        </div>

        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center ">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 ">
                <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 mb-3 lh-1">
                    {{ __('tran.SE title data') }}
                </h1>
                <p data-aos="fade-up" data-aos-delay="200"> {{ __('tran.SE disc data') }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="{{ URL::route('services-homePage', app()->getLocale()) }}"
                        class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up">{{ __('tran.btn') }}</a>
                </div>
            </div>
            <div class="col-lg-4 ">
                <img class="d-block mx-lg-auto img-fluid " data-aos="fade-up" data-aos-delay="400"
                    src=" {{ asset('images/191.svg') }}" alt="" width="400">
            </div>
        </div>



        <!-- cards -->
        <h1 data-aos="fade-up" class="heading text-center ">{{ __('tran.SE sol head title') }}</h1>
        <div class="row" data-aos="zoom-in">
            <div class="mycard">
                <div class="cimg">
                    <img src="{{ asset('images/undraw_features_overview_re_2w78.svg') }}" alt="">
                </div>
                <div class="cdetail">
                    <h2>{{ __('tran.SE title hosting') }}</h2>
                    <p>{{ __('tran.SE disc hosting') }}</p>
                </div>
            </div>
            <div class="mycard">
                <div class="cimg">
                    <img src="{{ asset('images/undraw_on_the_office_re_cxds (1).svg') }}" alt="">
                </div>
                <div class="cdetail">
                    <h2>{{ __('tran.SE title different') }}</h2>
                    <p>{{ __('tran.SE disc different') }}</p>
                </div>
            </div>
            <div class="mycard">
                <div class="cimg">
                    <img src="{{ asset('images/undraw_teaching_re_g7e3.svg') }}" alt="">
                </div>
                <div class="cdetail">
                    <h2>{{ __('tran.SE title many') }}</h2>
                    <p>{{ __('tran.SE disc many') }}</p>
                </div>
            </div>
        </div>
        <!-- cards end -->
    </section>
    <!-- services end-->
    <!-- blog  -->
    <section id="blog" class="blog" data-aos="fade-up">
        <div class="banner-vid">
            <video autoplay muted loop src="{{ asset('images/blog.mp4') }}"></video>
            <h2>{{ __('BLOG') }}</h2>
            <a href="{{ URL::route('blog-homePage', app()->getLocale()) }}"><button class="btn-vid">
                    {{ __('tran.BG btn') }}</button></a>
        </div>
    </section>
    <!-- blog end -->
    <!-- contact section starts  -->
    <h1 class="heading text-center" data-aos="fade-up">{{ __('tran.CT head title') }}</h1>
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center ">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 ">
            <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 mb-3 lh-1">
                {{ __('tran.CT title') }}
            </h1>
            <p data-aos="fade-up" data-aos-delay="200"> {{ __('tran.CT disc') }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}"
                    class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up">{{ __('tran.CT head title') }}</a>
            </div>
        </div>
        <div class="col-lg-4 ">
            <img class="d-block mx-lg-auto img-fluid " data-aos="fade-up" data-aos-delay="400"
                src=" {{ asset('images/undraw_team_spirit_re_yl1v (1).svg') }}" alt="" width="400">
        </div>
    </div>

    <!-- contact section ends -->
    <!-- abuout section starts  -->
    <h1 class="heading text-center" data-aos="fade-up">{{ __('tran.AT head title') }}</h1>

    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center" id="readMore">
        <div class="col-10 col-sm-8 col-lg-6">
            <img data-aos="fade-up" data-aos-delay="400"
                src="{{ asset('images/undraw_team_collaboration_re_ow29.svg') }}" class="d-block mx-lg-auto img-fluid"
                width="400" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 lh-1 mb-3">
                {{ __('tran.AT title') }}</h1>
            <p data-aos="fade-up" data-aos-delay="200">{{ __('tran.AT disc') }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ URL::route('about-homePage', app()->getLocale()) }}"
                    class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up">{{ __('tran.btn') }}</a>
            </div>
        </div>
    </div>
    <!-- abuout section ends  -->



    <div class="px-4 pt-5 my-5 text-center ">
        <h1 class="heading text-center " data-aos="fade-up" data-aos-delay="100">{{ __('tran.tech title') }}</h1>
        <div class="col-lg-6 mx-auto mt-5 mbottom">
            <div class=" gap-2 d-sm-flex justify-content-sm-center mb-5">
                <img data-aos="fade-left" class="mend" src="{{ asset('images/vue.png') }}" alt="Avatar"
                    style="width:15%">
                <img data-aos="fade-left" class="mend " src="{{ asset('images/react.png') }}" alt="Avatar"
                    style="width:15%">
                <img data-aos="fade-up" class="mend " src="{{ asset('images/laravel8.png') }}" alt="Avatar"
                    style="width:15%">
                <img data-aos="fade-right" class="mend " src="{{ asset('images/asp.png') }}" alt="Avatar"
                    style="width:15%">
                <img data-aos="fade-right" class="mend " src="{{ asset('images/dj.png') }}" alt="Avatar"
                    style="width:15%">
            </div>
        </div>
    </div>
@endsection
@extends('components.footer')
