@yield('components.layout')

@section('footer')
    
<section class="footer">

   <div class="box-container">

      <div class="box">
            <img src="{{asset('images/logo2.png')}}" alt="">

         <p>{{__('tran.FR head title')}}</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>{{__('tran.FR quick title')}}</h3>
         <a href="#home" class="link">{{__('tran.home')}}</a>
         <a href="#service" class="link">{{__('tran.services')}}</a>
         <a href="#blog" class="link">{{__('tran.blog')}}</a>
         <a href="#contact" class="link">{{__('tran.contact')}}</a>
         <a href="#about" class="link">{{__('tran.about')}}</a>
        
      </div>

      <div class="box">
         <h3>{{__('tran.FR useful title')}}</h3>
         <a href="#" class="link">{{__('tran.FR questions')}}</a>
         <a href="#" class="link">{{__('tran.FR feedback')}}</a>
         <a href="#" class="link">{{__('tran.FR help')}}</a>
         <a href="#" class="link">{{__('tran.FR policy')}}</a>
         <a href="#" class="link">{{__('tran.FR terms')}}</a>
      </div>



   </div>

   <div class="credit"> {{__('tran.FR created')}} <span>{{__('tran.FR company')}}</span> | {{__('tran.FR rights')}} </div>

</section>
@endsection