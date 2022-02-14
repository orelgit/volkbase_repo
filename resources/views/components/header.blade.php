
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
         <div id="lang-btn" class="fas fa-language"></div>
         @auth
          <form class="aicon" action="{{ URL::route('logout-page',app()->getLocale()) }}" method="POST">
               @csrf
                      <button class="fas fa-sign-out aicon" type="submit"></button>

         </form>
            <span class="aicon">{{auth()->user()->u_name}}</span>
             @else
           <div> <a href="{{ URL::route('login-page',app()->getLocale()) }}" id="login-btn" class="fas fa-user aicon"></a></div>
              
               
         @endauth
         

      </div>
    
       
      <!-- search -->
      <form action="" class="search-form">
         <input type="search" name="" placeholder="{{__('tran.HR search')}}" id="search-box">
         <label for="search-box" class="fas fa-search"></label>
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