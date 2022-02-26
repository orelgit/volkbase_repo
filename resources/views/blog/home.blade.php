@extends('components.layout')

@extends('components.header')

@section('content')
    <!-- home section starts  -->

    <section class="blog-banner" id="blog-banner">

        <div class="blog-vid-div">
            <video class="blog-vid" autoplay muted loop src="{{ asset('images/blog-page.mp4') }}"></video>
        </div>

        <div class="blog-content">
            <h3>{{ __('tran.BOGHE title text') }}</h3>
            <p>{{ __('tran.BOGHE disc text') }}</p>
            <a href="#posts" class="btn">{{ __('tran.BG btn') }}</a>
        </div>

    </section>

    <!-- home section ends -->


    <!-- posts section starts  -->

    <section class="blog-container" id="posts">


        <div style="overflow: hidden;" class="blog-posts-container">
            @php
                $blog = \App\Models\Blog::all();
                $user = \App\Models\User::all();
                $category = \App\Models\Category::all();
            @endphp
            @foreach ($blog as $blogs)
                <div class="blog-post">
                    <img src="{{ asset('storage/' . $blogs->b_img) }}" alt="" class="image">
                    <div class="blog-date">
                        <i class="far fa-clock"></i>
                        <span>{{ $blogs->created_at->diffForHumans() }}</span>
                    </div>
                    <h3 class="blog-title">{{ $blogs->b_title }}</h3>
                    <p style=" word-wrap:break-word;" class="blog-text">{{ $blogs->b_blog }}</p>
                    <div class="blog-links">
                        <a href="#" class="blog-user">
                            <i class="far fa-user"></i>
                            <span>{{ $blogs->user->u_name }}</span>
                        </a>
                        <a href="#" class="blog-user">
                            <i class="far fa-dot-circle"></i>
                            <span>{{ $blogs->category->c_name }}</span>
                        </a>
                        {{-- <a href="#" class="blog-icon">
                            <i class="far fa-comment"></i>
                            <span>(45)</span>
                        </a>
                        <a href="#" class="blog-icon">
                            <i class="far fa-share-square"></i>
                            <span>(29)</span>
                        </a> --}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="blog-sidebar">

            <div class="blog-box">
                <h3 class="blog-title">{{ __('tran.BOGAT head title') }}</h3>
                <div class="blog-about">
                    <img src="{{ asset('images/undraw_contract_re_ves9.svg') }}" alt="">
                    <h3>{{ __('tran.BOGAT title') }}</h3>
                    <p>{{ __('tran.BOGAT disc') }}</p>
                    <div class="blog-follow">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="blog-box">
                <h3 class="blog-title">{{ __('tran.BOGCAT head title') }}</h3>
                <div class="blog-category">
                    @foreach ($category as $categories)
                        <a href="#"> {{ $categories->c_name }} <span>42</span></a>
                    @endforeach
                </div>
            </div>

            <div class="blog-box">
                <h3 class="blog-title">{{ __('tran.BOGPR head title') }}</h3>
                <div class="blog-p-post">
                    @foreach ($blog as $blogs)
                        <a href="#">
                            <h3>{{ $blogs->b_title }}</h3>
                            <span><i class="far fa-clock"></i>{{ $blogs->created_at->diffForHumans() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="blog-box">
                <h3 class="blog-title">{{ __('tran.BOGT head title') }}</h3>
                <div class="blog-tags">
                    <a href="#">{{ __('tran.BOGT ptag1') }}</a>
                    <a href="#">{{ __('tran.BOGT ptag2') }}</a>
                    <a href="#">{{ __('tran.BOGT ptag3') }}</a>
                    <a href="#">{{ __('tran.BOGT ptag4') }}</a>
                    <a href="#">{{ __('tran.BOGT ptag5') }}</a>
                    <a href="#">{{ __('tran.BOGT ptag6') }}</a>
                    <a href="#">{{ __('tran.BOGT ptag7') }}</a>
                </div>
            </div>

        </div>

    </section>

    <!-- posts section ends -->
@endsection


@extends('components.footer')
