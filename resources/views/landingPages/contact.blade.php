@extends('components.layout')
@extends('components.header')

@section('content')
    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <section class="hero hero-bg d-flex justify-content-center align-items-center container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center ">
                    <div class="hero-text ms-5">
                        <h2 class="text-black fw-bold lh-1" data-aos="fade-up" data-aos-delay="200">
                            Contact Us</h2>

                        <p data-aos="fade-up" data-aos-delay="200">we are pleased to hear from you. Don't hesitate to
                            contact Us.</p>
                        <a href="#readMore" class="custom-btn btn-bg btn mt-3 text-white" data-aos="fade-up"
                            data-aos-delay="100">{{ __('tran.BG btn') }}</a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 ">
                    <div class=" ms-5 mt-5" data-aos="fade-up" data-aos-delay="500">
                        <img src=" {{ asset('images/undraw_new_message_re_fp03 (1).svg') }}"
                            class="d-block mx-lg-auto img-fluid " width="500" height="500" loading="lazy">

                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- cards --}}
    <div class="row px-4 pt-5 mb-5 text-center  mt-5">
        <div class="col" data-aos="fade-up">
            <h1 class="heading text-center" data-aos="fade-up">You Can Reach Us Via</h1>
        </div>
    </div>
    {{-- <div class="container-fluid"> --}}
    <div class="row mb-5 text-center ">
        <div class="col-lg  mx-5 my-3 shadow " data-aos="fade-up">

            <h3><img src="{{ asset('images/145.svg') }}" class="img-fluid" width="150" alt="">
            </h3>
            <p class="para"> Phone</p>
            <p class="para"> +967 776462030</p>
            <a href="https://wa.link/5rd0yb" class="btn btn-primary mb-2 mt-0 hover">WhatsApp</a>

        </div>

        <div class="col-lg  mx-5 my-3 shadow" data-aos="fade-up" data-aos-delay="300">
            <h3><img src="{{ asset('images/9.svg') }}" class="img-fluid" width="150" alt="">
            </h3>
            <p class="para p-black"> Email</p>
            <p class="para"> info@volkbase.com</p>

            <form class="" action="mailto:info@volkbase.com" method="POST">
                <input type="submit" value="Send" class="btn btn-primary mb-2 mt-0 hover">
            </form>


        </div>

        <div class="col-lg  mx-5 my-3 shadow" data-aos="fade-up" data-aos-delay="600">
            <h3><img src="{{ asset('images/123.svg') }}" class="img-fluid" width="150" alt="">
            </h3>
            <p class="para"> العنوان</p>
            <p class="para"> Sana&#039;a - Yemen.</p>
        </div>
    </div>


    {{-- form --}}

    <div class="container-fulid">
        <div class="row px-4 pt-5 mb-5 text-center  mt-5">
            <div class="col" data-aos="fade-up">
                <h1 class="heading text-center" data-aos="fade-up">Fill Out The Contact Form To Contact Us</h1>
                <p data-aos="fade-up" data-aos-delay="100">We Will Help You Choose What Suits Your Specific Needs!</p>
            </div>
        </div>
        <div class="row d-flex  justify-content-center mb-3 ">
            <div class="card bg col-10 shadow  ">
                <div class="card-body  ">
                    <form method="POST" action="">
                        @csrf
                        {{-- name --}}
                        <div class="mb-3 " data-aos="fade-up">
                            <div class="col ">
                                <label for="name" class="form-label fs-3 ">Full name</label>
                                <input value="" type="text" id="name" name="u_name" class="form-control  fs-3" id="name">

                            </div>
                        </div>

                        {{-- email --}}
                        <div class="mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="col">
                                <label for="email" class="form-label fs-3 ">Email</label>
                                <input value="" type="email" id="email" name="u_email" class="form-control  fs-3">

                            </div>
                        </div>

                        {{-- user type --}}
                        <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="col">
                                <label for="user_type" class="form-label fs-3 "> Subject</label>
                                <select class="form-control form-select  fs-3" id="user_type" name="ut_id">
                                    <option value="">Feed back</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 " data-aos="fade-up" data-aos-delay="300">
                            <div class="col ">
                                <label for="name" class="form-label fs-3 ">Message</label>
                                <textarea cols="10" rows="5" name="" class="form-control  fs-3" id=""></textarea>

                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col ">
                                <button type="submit" class=" btn-primary form-control fs-3 ">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('components.footer')
