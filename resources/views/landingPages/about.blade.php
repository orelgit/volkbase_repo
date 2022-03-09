@extends('components.layout')

@extends('components.header')

@section('content')
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <section class="hero hero-bg container-fluid">
        <div class="row">
            <div class="col">
                <img data-aos="fade-up" data-aos-delay="200" class="img-fluid" src="{{ asset('images/volk2.png') }}"
                    alt="">
            </div>
        </div>

    </section>

    <main>
        <div class="container py-4 mt-2 mb-0">
            <h1 class="heading text-center mb-5 fw-bold" data-aos="fade-up">{{ __('about.about-head') }}</h1>
            <header class="pb-3 mb-4 mt-5 border-bottom">
                <a data-aos="fade-up" data-aos-delay="200" href="/"
                    class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                        viewBox="0 0 118 94" role="img">

                    </svg>
                    <img class="img-fluid" src="{{ asset('images/10.svg') }}" width="100" alt="">
                    <h2 class="display-5 fw-bold ">{{ __('about.about-title') }}</h2>
                </a>
            </header>

            <div data-aos="fade-up" data-aos-delay="200" class="p-5 mb-4 bg rounded-3 border border-light">
                <div class="container-fluid ">
                    <p data-aos="fade-up" data-aos-delay="400" class="col-md-8 fs-3 ">{{ __('about.about-dis') }}</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6 ">
                    <header class="pb-3 mb-4 border-bottom">
                        <a data-aos="fade-up" data-aos-delay="200" href="/"
                            class="d-flex align-items-center text-dark text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                                viewBox="0 0 118 94" role="img">

                            </svg>
                            <img class="img-fluid" src="{{ asset('images/448.svg') }}" width="100" alt="">
                            <h2 class="display-5 fw-bold ">{{ __('about.Mission-title') }}</h2>
                        </a>
                    </header>
                    <div data-aos="fade-up" data-aos-delay="200" class=" p-5 text-white bg rounded-3">

                        <p data-aos="fade-up" data-aos-delay="400">{{ __('about.Mission-dis') }}</p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <header class="pb-3 mb-4 border-bottom">
                        <a data-aos="fade-up" data-aos-delay="200" href="/"
                            class="d-flex align-items-center text-dark text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                                viewBox="0 0 118 94" role="img">

                            </svg>
                            <img class="img-fluid" src="{{ asset('images/333.svg') }}" width="100" alt="">
                            <h2 class="display-5 fw-bold ">{{ __('about.Vision-title') }}</h2>
                        </a>
                    </header>
                    <div data-aos="fade-up" data-aos-delay="200" class=" p-5 text-white bg rounded-3">

                        <p data-aos="fade-up" data-aos-delay="400">{{ __('about.Vision-dis') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    {{-- cards --}}
    <div class="row px-4 pt-5 mb-5 text-center  mt-5">
        <div class="col" data-aos="fade-up">
            <h1 class="heading text-center fw-bold" data-aos="fade-up">{{ __('about.why-head') }}
            </h1>
        </div>
    </div>

    <div class="row mb-5 text-center ">
        <div class="col-lg  mx-5 my-3  " data-aos="fade-up">

            <div class="card m-auto">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--IT">
                                <i class="far fa-project-diagram card-front__icon"></i>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--IT">
                                    {{ __('about.why-view-btn') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media"
                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--IT">
                            {{ __('about.why-it') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg  mx-5 my-3 " data-aos="fade-up" data-aos-delay="300">
            <div class="card m-auto">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--work">

                                <i class="fas fa-tasks card-front__icon"></i>

                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--work">
                                    {{ __('about.why-view-btn') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media"
                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--work">
                            {{ __('about.why-Projects') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg  mx-5 my-3 " data-aos="fade-up" data-aos-delay="600">
            <div class="card m-auto">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--support">
                                <i class="fab fa-buromobelexperte card-front__icon"></i>

                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--support">
                                    {{ __('about.why-view-btn') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media"
                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--support">
                            {{ __('about.why-Support') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg  mx-5 my-3 " data-aos="fade-up" data-aos-delay="600">
            <div class="card m-auto">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--expert">

                                <i class="fas fa-star card-front__icon"></i>

                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--expert">
                                    {{ __('about.why-view-btn') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media"
                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--expert">
                            {{ __('about.why-Expert') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="heading text-center mb-5 mt-5 fw-bold" data-aos="fade-up"> {{ __('about.Team-head') }}</h1>
    <section class="hero hero-bg2 d-flex justify-content-center align-items-center container-fluid mtop">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center ">
                    <div class="hero-text ms-5 p-5">
                        <h2 class="font-style fw-bold lh-1 text-white" data-aos="fade-left" data-aos-delay="200">
                            {{ __('about.Team-mohammed') }}</h2>

                        <p class="text-black" data-aos="fade-right" data-aos-delay="200">
                            {{ __('about.Team-Founder') }}</p>
                        <a href="https://www.facebook.com/almahfadi.mohammed" target="_blank"><i data-aos="fade-right"
                                data-aos-delay="200" class="fab fa-facebook-square fs-1 text-black me-2"></i></a>
                        <a href="mailto:engalmahfadi@gmail.com" target="_blank"> <i data-aos="fade-right"
                                data-aos-delay="200" class="fas fa-envelope-open-text fs-1 ms-2 text-black"></i></a>

                    </div>
                </div>

                <div class="col-lg-6 col-12 ">
                    <div class=" ms-5 mt-5" data-aos="fade-up" data-aos-delay="500">
                        <img src=" {{ asset('images/undraw_investment_re_rpk5.png') }}" class=" img-fluid "
                            width="400" height="400" loading="lazy">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="hero hero-bg3 d-flex justify-content-center align-items-center container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 ">
                    <div class=" ms-5 mt-5">
                        <img data-aos="fade-up" src=" {{ asset('images/undraw_file_manager_re_ms29.svg') }}"
                            class="  img-fluid " loading="lazy">

                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center ">
                    <div class="hero-text ms-5 p-5">
                        <h2 class="font-style fw-bold lh-1" data-aos="fade-left" data-aos-delay="200">
                            {{ __('about.Team-nada') }}</h2>
                        <p class="text-black" data-aos="fade-right" data-aos-delay="200">
                            {{ __('about.Team-Analtyics') }}</p>
                        <a href=""><i data-aos="fade-right" data-aos-delay="200"
                                class="fab fa-facebook-square fs-1  me-2 text-black"></i></a>
                        <a href=""> <i data-aos="fade-right" data-aos-delay="200"
                                class="fas fa-envelope-open-text fs-1 ms-2 text-black"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('components.footer')
