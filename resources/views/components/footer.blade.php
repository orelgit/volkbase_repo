@yield('components.layout')

@section('footer')
    
<section class="footer">

   <div class="box-container">

      <div class="box">
            <img src="{{asset('images/logo2.png')}}" alt="">

         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, voluptatem.</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="#home" class="link">home</a>
         <a href="#service" class="link">services</a>
         <a href="#blog" class="link">blog</a>
         <a href="#contact" class="link">contact</a>
         <a href="#about" class="link">about</a>
        
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>



   </div>

   <div class="credit"> created by <span>N4DA</span> | all rights reserved! </div>

</section>
@endsection