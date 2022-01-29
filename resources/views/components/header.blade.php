
@yield('components.layout')

@section('header')
    <header class="header">
      <a href="#" class="logo"><img src="{{asset('images/logo2.png')}}" alt=""></a>

      <nav class="navbar">
         <a href="#home">home</a>      
         <a href="#service">services</a>
         <a href="#blog">blog</a>
         <a href="#contact">contact</a>
         <a href="#about">about</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="login-btn" class="fas fa-user"></div>
      </div>
      <!-- search -->
      <form action="" class="search-form">
         <input type="search" name="" placeholder="search here..." id="search-box">
         <label for="search-box" class="fas fa-search"></label>
      </form>

      <!-- login form -->
      <form action="" class="login-form">
         <h3>login form</h3>
         <input type="email" placeholder="enter your email" class="box">
         <input type="password" placeholder="enter your password" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
         </div>
         <input type="submit" value="login now" class="btn">
         <p>don't have an account <a href="#">create one!</a></p>
      </form>
   </header>
   

@endsection