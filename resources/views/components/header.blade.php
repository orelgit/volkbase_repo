
@yield('components.layout')

@section('header')
    <header class="header">
      <a href="#" class="logo"><img src="{{asset('images/logo2.png')}}" alt=""></a>

      <nav class="navbar">
         <a href="{{ URL::route('index-homePage',app()->getLocale()) }}">{{__('home')}}</a>      
         <a href="#service">{{__('services')}}</a>
         <a href="#blog">{{__('blog')}}</a>
         <a href="#contact">{{__('contact')}}</a>
         <a href="#about">{{__('about')}}</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="login-btn" class="fas fa-user"></div>
         <div id="lang-btn" class="fas fa-language"></div>
      </div>
    
       
      <!-- search -->
      <form action="" class="search-form">
         <input type="search" name="" placeholder="{{__('search here...')}}" id="search-box">
         <label for="search-box" class="fas fa-search"></label>
      </form>

      <!-- login form -->
      <form action="" class="login-form">
         <h3>{{__('login')}}</h3>
         <input type="email" placeholder="{{__('enter your email')}}" class="box">
         <input type="password" placeholder="{{__('enter your password')}}" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">{{__('remember me')}}</label>
            <a href="#">{{__('forgot password?')}}</a>
         </div>
         <input type="submit" value="{{__('دخول')}}" class="btn">
         <p>{{__("don't have an account")}} <a href="#">{{__('create one!')}}</a></p>
      </form>
     
      {{-- lang --}}
       <div class="lang-form">
     
               <select class="changeLang" onchange="javascript:location.href = this.value;">
                  
                    <option value="" >{{__('Choose a language')}}</option>
                    <option value="{{route(Route::currentRouteName(),'en')}}" >{{__('English')}}</option>
                    <option value="{{route(Route::currentRouteName(),'ar')}}" >{{__('Arabic')}}</option>
                </select>
                
            </div>
   </header>
   

@endsection