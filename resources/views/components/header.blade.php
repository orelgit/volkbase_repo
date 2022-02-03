
@yield('components.layout')

@section('header')
    <header class="header">
      <a href="#" class="logo"><img src="{{asset('images/logo2.png')}}" alt=""></a>

      <nav class="navbar">
         <a href="{{ URL::route('index-homePage',app()->getLocale()) }}">{{__('tran.home')}}</a>      
         <a href="#service">{{__('tran.services')}}</a>
         <a href="#blog">{{__('tran.blog')}}</a>
         <a href="#contact">{{__('tran.contact')}}</a>
         <a href="#about">{{__('tran.about')}}</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="login-btn" class="fas fa-user"></div>
         <div id="lang-btn" class="fas fa-language"></div>
      </div>
    
       
      <!-- search -->
      <form action="" class="search-form">
         <input type="search" name="" placeholder="{{__('tran.HR search')}}" id="search-box">
         <label for="search-box" class="fas fa-search"></label>
      </form>

      <!-- login form -->
      <form action="" class="login-form">
         <h3>{{__('tran.HR login')}}</h3>
         <input type="email" placeholder="{{__('tran.HR email')}}" class="box">
         <input type="password" placeholder="{{__('tran.HR password')}}" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">{{__('tran.HR remember')}}</label>
            <a href="#">{{__('tran.HR forgot')}}</a>
         </div>
         <input type="submit" value="{{__('tran.HR enter')}}" class="btn">
         <p>{{__("tran.HR account")}} <a href="#">{{__('tran.HR create')}}</a></p>
      </form>
     
      {{-- lang --}}
       <div class="lang-form">
     
               <select class="changeLang" onchange="javascript:location.href = this.value;">
                  
                    <option value="" >{{__('tran.HR choose')}}</option>
                    <option value="{{route(Route::currentRouteName(),'en')}}" >{{__('tran.HR en')}}</option>
                    <option value="{{route(Route::currentRouteName(),'ar')}}" >{{__('tran.HR ar')}}</option>
                </select>
                
            </div>
   </header>
   

@endsection