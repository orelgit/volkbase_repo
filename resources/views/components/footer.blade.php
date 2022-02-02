@yield('components.layout')

@section('footer')
    
<section class="footer">

   <div class="box-container">

      <div class="box">
            <img src="{{asset('images/logo2.png')}}" alt="">

         <p>{{__('Our Vision To be number one leader company in the industry of IT Services in Yemen and also to be recognized internationally')}}</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>{{__('quick links')}}</h3>
         <a href="#home" class="link">{{__('home')}}</a>
         <a href="#service" class="link">{{__('services')}}</a>
         <a href="#blog" class="link">{{__('blog')}}</a>
         <a href="#contact" class="link">{{__('contact')}}</a>
         <a href="#about" class="link">{{__('about')}}</a>
        
      </div>

      <div class="box">
         <h3>{{__('useful links')}}</h3>
         <a href="#" class="link">{{__('help center')}}</a>
         <a href="#" class="link">{{__('ask questions')}}</a>
         <a href="#" class="link">{{__('send feedback')}}</a>
         <a href="#" class="link">{{__('private policy')}}</a>
         <a href="#" class="link">{{__('terms of use')}}</a>
      </div>



   </div>

   <div class="credit"> {{__('created by')}} <span>{{__('N4DA')}}</span> | {{__('all rights reserved!')}} </div>

</section>
@endsection