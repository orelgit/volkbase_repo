@extends('components.layout')

@extends('components.header')

@section('content')
    
   <!-- home section starts  -->

   <section id="home" class="home">

      <h1 class="banner">{{__('tran.HE title text')}}</h1>
      <h3 class="slogan">{{__('tran.HE disc text')}}</h3>


      <a class="a-btn" href="{{ URL::route('admin-homePage',app()->getLocale()) }}">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         {{__('tran.btn')}}
      </a>



      <div class="fas fa-cog nut1"></div>
      <div class="fas fa-cog nut2"></div>




   </section>


   <!-- home section ends -->

   <!-- services -->
   <section id="service" class="service">

      <h1 class="heading">{{__('tran.SE head title')}}</h1>

      <div class="row">

         <div class="image">
            <img src="{{asset('images/74.svg')}}" alt="">
         </div>
         <div class="content" style="{{ app()->getLocale() == 'ar'? 'text-align: right' : 'text-align: left' }}">
            <h3>{{__('tran.SE title web')}}</h3>
            <p>{{__('tran.SE disc web')}}</p>
            <a href="#"><button class="btn">{{__('tran.btn')}}</button></a>
         </div>

      </div>

      <div class="row">

         <div class="content" style="{{ app()->getLocale() == 'ar'? 'text-align: right' : 'text-align: left' }}">
            <h3>{{__('tran.SE title mob')}}</h3>
            <p>{{__('tran.SE disc mob')}}</p>
            <a href="#"><button class="btn">{{__('tran.btn')}}</button></a>
         </div>
         <div class="image">
            <img src="{{asset('images/84.svg')}}" alt="">
         </div>

      </div>

      <div class="row">


         <div class="image">
            <img src="{{asset('images/282.svg')}}" alt="">
         </div>
         <div class="content" style="{{ app()->getLocale() == 'ar'? 'text-align: right' : 'text-align: left' }}">
            <h3>{{__('tran.SE title net')}}</h3>
            <p>{{__('tran.SE disc net')}}</p>
            <a href="#"><button class="btn">{{__('tran.btn')}}</button></a>
         </div>

      </div>

      <div class="row">

         <div class="content" style="{{ app()->getLocale() == 'ar'? 'text-align: right' : 'text-align: left' }}">
            <h3>{{__('tran.SE title data')}}</h3>
            <p>{{__('tran.SE disc data')}}</p>
            <a href="#"><button class="btn">{{__('tran.btn')}}</button></a>
         </div>
         <div class="image">
            <img src="{{asset('images/191.svg')}}" alt="">
         </div>

      </div>

      <!-- cards -->
      <h1 class="heading">{{__('tran.SE sol head title')}}</h1>
      <div class="row">


         <div class="mycard">
            <div class="cimg">
               <img src="{{asset('images/undraw_features_overview_re_2w78.svg')}}" alt="">
            </div>
            <div class="cdetail">
               <h2>{{__('tran.SE title hosting')}}</h2>
               <p>{{__('tran.SE disc hosting')}}</p>
            </div>
         </div>


         <div class="mycard">
            <div class="cimg">
               <img src="{{asset('images/undraw_on_the_office_re_cxds (1).svg')}}" alt="">
            </div>
            <div class="cdetail">
               <h2>{{__('tran.SE title different')}}</h2>
               <p>{{__('tran.SE disc different')}}</p>
            </div>
         </div>




         <div class="mycard">
            <div class="cimg">
               <img src="{{asset('images/undraw_teaching_re_g7e3.svg')}}" alt="">
            </div>
            <div class="cdetail">
               <h2>{{__('tran.SE title many')}}</h2>
               <p>{{__('tran.SE disc many')}}</p>
            </div>
         </div>

      </div>
      <!-- cards end -->
   </section>
   <!-- services end-->

   
   <!-- blog  -->

   <section id="blog" class="blog">



         <div class="banner-vid">
            <video autoplay muted loop src="{{asset('images/blog.mp4')}}"></video>
            <h2>{{__('BLOG')}}</h2>
         <a href="{{ URL::route('blog-homePage',app()->getLocale()) }}"><button class="btn-vid"> {{__('tran.BG btn')}}</button></a>
         </div>



   </section>


   <!-- blog end -->


   <!-- contact section starts  -->
   
   <section id="contact"  class="contact">
   
      <h1 class="heading">{{__('tran.CT head title')}}</h1>
   
   
      <div class="row">
   
         <div class="image">
            <img src="{{asset('images/undraw_team_spirit_re_yl1v (1).svg')}}" alt="">
         </div>
   
         <div style="{{ app()->getLocale() == 'ar'? 'text-align: right' : 'text-align: left' }}" class="form-container">
            <form action="">
   
               <div class="inputBox">
                  <input type="text" placeholder="{{__('tran.CT first')}}">
                  <input type="text" placeholder="{{__('tran.CT last')}}">
               </div>
   
               <input type="email" placeholder="{{__('tran.CT email')}}">
               <textarea name="" id="" cols="30" rows="10" placeholder="{{__('tran.CT message')}}"></textarea>
               <input type="submit" value="{{__('tran.CT send btn')}}">
   
            </form>
         </div>
   
      </div>
   
   </section>
   
   
   <!-- contact section ends -->


   <!-- abuout section starts  -->

   <section id="about" class="about">

      <h1 class="heading">{{__('tran.AT head title')}}</h1>

      <div class="row">

         <div class="content" style="{{ app()->getLocale() == 'ar'? 'text-align: right' : 'text-align: left' }}">
            <h3>{{__('tran.AT title')}}</h3>
            <p>{{__('tran.AT disc')}}</p>
            <a href="#"><button  class="btn">{{__('tran.btn')}}</button></a>
         </div>

         <div class="image">
            <img src="{{asset('images/undraw_team_collaboration_re_ow29.svg')}}" alt="">
         </div>

      </div>


   </section>

   <!-- abuout section ends  -->


@endsection


    
@extends('components.footer')