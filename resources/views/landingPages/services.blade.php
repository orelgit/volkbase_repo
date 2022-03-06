@extends('components.layout')

@extends('components.header')

@section('content')
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">


    <section class="hero hero-bg d-flex justify-content-center align-items-center container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center ">
                    <div class="hero-text ms-5">
                        <h2 class="text-black fw-bold lh-1" data-aos="fade-up" data-aos-delay="200">
                            {{ __('services.hero-title') }}</h2>
                        <p data-aos="fade-up" data-aos-delay="200"> {{ __('services.hero-dis') }}</p>

                        <a href="#readMore" class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up"
                            data-aos-delay="100">{{ __('tran.BG btn') }}</a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 ">
                    <div class=" ms-5 mt-5" data-aos="fade-up" data-aos-delay="500">
                        <img src=" {{ asset('images/undraw_interview_re_e5jn.svg') }}"
                            class="d-block mx-lg-auto img-fluid " width="500" height="500" loading="lazy">

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container ">
            <div class="row  g-5 py-5" id="readMore">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img data-aos="fade-up" data-aos-delay="400"
                        src="{{ asset('images/undraw_progressive_app_m-9-ms.svg') }}" class="d-block mx-lg-auto img-fluid"
                        width="400" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 lh-1 mb-3">
                        {{ __('services.Responsive-title') }}</h1>
                    <p data-aos="fade-up" data-aos-delay="200">{{ __('services.Responsive-dis') }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}"
                            class="custom-btn btn-bg btn mt-3 text-white"
                            data-aos="fade-up">{{ __('tran.CT head title') }}</a>
                    </div>
                </div>
            </div>


            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 flex-lg-row-reverse align-items-center mtop">
                <div class="col-lg-4 ">
                    <img class="d-block mx-lg-auto img-fluid " data-aos="fade-up" data-aos-delay="400"
                        src=" {{ asset('images/undraw_mobile_photos_psm5.png') }}" alt="" width="400">
                </div>
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 ">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 mb-3 lh-1">
                        {{ __('services.Apps-title') }}
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200"> {{ __('services.Apps-dis') }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}"
                            class="custom-btn btn-bg btn mt-3 text-white"
                            data-aos="fade-up">{{ __('tran.CT head title') }}</a>
                    </div>
                </div>

            </div>



            <div class="row  g-5 py-5 mtop">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img data-aos="fade-up" data-aos-delay="400" src="{{ asset('images/239.svg') }}"
                        class="d-block mx-lg-auto img-fluid " width="400" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 lh-1 mb-3">
                        {{ __('services.teem-title') }}</h1>
                    <p data-aos="fade-up" data-aos-delay="200"> {{ __('services.teem-dis') }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}"
                            class="custom-btn btn-bg btn mt-3 text-white"
                            data-aos="fade-up">{{ __('tran.CT head title') }}</a>
                    </div>
                </div>
            </div>

            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 flex-lg-row-reverse align-items-center mtop">
                <div class="col-lg-4 ">
                    <img class="d-block mx-lg-auto img-fluid " data-aos="fade-up" data-aos-delay="400"
                        src=" {{ asset('images/302.svg') }}" alt="" width="400">
                </div>
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 ">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 mb-3 lh-1">
                        {{ __('services.panle-title') }}
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200"> {{ __('services.panle-dis') }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}"
                            class="custom-btn btn-bg btn mt-3 text-white"
                            data-aos="fade-up">{{ __('tran.CT head title') }}</a>
                    </div>
                </div>

            </div>




            <div class="row px-4 pt-5 mb-5 text-center  mtop">
                <div class="col-lg" data-aos="fade-up">
                    <h1 class="display-5 mb-3 lh-1"> {{ __('services.Ability-title') }}</h1>
                    <p> {{ __('services.Ability-dis') }}</p>
                </div>
            </div>
            <div class="row mb-5 text-center">
                <div class="col-lg-4">
                    <h3 data-aos="flip-left" data-aos-delay="400"><i class="fas fa-desktop fas-size"></i></h3>
                    <p class="para"> {{ __('services.Ability-panle') }}</p>
                </div>
                <div class="col-lg-4">
                    <h3 data-aos="flip-left" data-aos-delay="600"><i class="fas fa-shield-alt fas-size"></i></h3>
                    <p class="para">{{ __('services.Ability-Login') }}</p>
                </div>
                <div class="col-lg-4">
                    <h3 data-aos="flip-left" data-aos-delay="800"><i class="fas fa-sign-in-alt fas-size"></i></h3>
                    <p class="para">{{ __('services.Ability-Secure') }}</p>
                </div>
            </div>

        </div>
    </section>
@endsection
@extends('components.footer')
