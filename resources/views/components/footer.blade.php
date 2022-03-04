@yield('components.layout')

@section('footer')
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <img src="{{ asset('images/logo2.png') }}" alt="">

                <p>{{ __('tran.FR head title') }}</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>{{ __('tran.FR quick title') }}</h3>
                <a href="{{ URL::route('services-homePage', app()->getLocale()) }}"
                    class="link">{{ __('tran.services') }}</a>
                <a href="{{ URL::route('blog-homePage', app()->getLocale()) }}"
                    class="link">{{ __('tran.blog') }}</a>
                <a href="{{ URL::route('contact-homePage', app()->getLocale()) }}"
                    class="link">{{ __('tran.contact') }}</a>

            </div>

            <div class="box">
                <h3>{{ __('tran.FR useful title') }}</h3>
                <a href="{{ URL::route('index-homePage', app()->getLocale()) }}"
                    class="link">{{ __('tran.home') }}</a>

                <a href="{{ URL::route('about-homePage', app()->getLocale()) }}"
                    class="link">{{ __('tran.about') }}</a>

                <a href="{{ URL::route('privacy-homePage', app()->getLocale()) }}"
                    class="link">{{ __('tran.privacy') }}</a>

            </div>



        </div>

        <div class="credit">
            {{ __('tran.FR rights') }} </div>

    </section>
@endsection
