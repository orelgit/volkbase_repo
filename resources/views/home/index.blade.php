@extends('components.layout')

@extends('components.header')

@section('content')
    
   <!-- home section starts  -->

   <section id="home" class="home">

      <h1 class="banner">{{__('Just What You Need')}}</h1>
      <h3 class="slogan">{{__('IT Services and Solutions We do websites, web applications, mobile apps')}}</h3>


      <a class="a-btn" href="{{ URL::route('admin-homePage',app()->getLocale()) }}">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         {{__('read more')}}
      </a>



      <div class="fas fa-cog nut1"></div>
      <div class="fas fa-cog nut2"></div>




   </section>


   <!-- home section ends -->

   
   <!-- services -->
   <section id="service" class="service">

      <h1 class="heading">{{__('our services')}}</h1>

      <div class="row">

         <div class="image">
            <img src="{{asset('images/74.svg')}}" alt="">
         </div>
         <div class="content">
            <h3>{{__('website development')}}</h3>
            <p>{{__('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
               temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore
               voluptas nemo placeat. Voluptas.')}}</p>
            <a href="#"><button class="btn">{{__('read more')}}</button></a>
         </div>

      </div>

      <div class="row">

         <div class="content">
            <h3>{{__('mobile freindly')}}</h3>
            <p>{{__('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
               temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore
               voluptas nemo placeat. Voluptas.')}}</p>
            <a href="#"><button class="btn">{{__('read more')}}</button></a>
         </div>
         <div class="image">
            <img src="{{asset('images/84.svg')}}" alt="">
         </div>

      </div>

      <div class="row">


         <div class="image">
            <img src="{{asset('images/282.svg')}}" alt="">
         </div>
         <div class="content">
            <h3>{{__('Network')}}</h3>
            <p>{{__('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
               temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore
               voluptas nemo placeat. Voluptas.')}}</p>
            <a href="#"><button class="btn">{{__('read more')}}</button></a>
         </div>

      </div>

      <div class="row">

         <div class="content">
            <h3>{{__('Database')}}</h3>
            <p>{{__('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
               temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore
               voluptas nemo placeat. Voluptas.')}}</p>
            <a href="#"><button class="btn">{{__('read more')}}</button></a>
         </div>
         <div class="image">
            <img src="{{asset('images/191.svg')}}" alt="">
         </div>

      </div>

      <!-- cards -->
      <h1 class="heading">{{__('Our Solutions Take Care Of All Your Needs')}}</h1>
      <div class="row">


         <div class="mycard">
            <div class="cimg">
               <img src="{{asset('images/undraw_features_overview_re_2w78.svg')}}" alt="">
            </div>
            <div class="cdetail">
               <h2>{{__('Hosting Management')}}</h2>
               <p>{{__('We offer hosting for your website which includes unlimited email creation for your business, storage and security with our support.')}}</p>
            </div>
         </div>


         <div class="mycard">
            <div class="cimg">
               <img src="{{asset('images/undraw_on_the_office_re_cxds (1).svg')}}" alt="">
            </div>
            <div class="cdetail">
               <h2>{{__('Different Platforms')}}</h2>
               <p>{{__('We can implement your solution in any platform including mobile apps, websites and desktop applications')}}</p>
            </div>
         </div>




         <div class="mycard">
            <div class="cimg">
               <img src="{{asset('images/undraw_teaching_re_g7e3.svg')}}" alt="">
            </div>
            <div class="cdetail">
               <h2>{{__('Many Integrations')}}</h2>
               <p>{{__('We provide a range of other services to complement your business needs and infrastructure including software, design, networking, and digital marketing.')}}</p>
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
         <a href="{{ URL::route('blog-homePage',app()->getLocale()) }}"><button class="btn-vid"> {{__('Check it Out')}}</button></a>
         </div>



   </section>


   <!-- blog end -->


   <!-- contact section starts  -->
   
   <section id="contact" class="contact">
   
      <h1 class="heading">{{__('contact')}}</h1>
   
   
      <div class="row">
   
         <div class="image">
            <img src="{{asset('images/undraw_team_spirit_re_yl1v (1).svg')}}" alt="">
         </div>
   
         <div class="form-container">
            <form action="">
   
               <div class="inputBox">
                  <input type="text" placeholder="{{__('first name')}}">
                  <input type="text" placeholder="{{__('last name')}}">
               </div>
   
               <input type="email" placeholder="{{__('email')}}">
               <textarea name="" id="" cols="30" rows="10" placeholder="{{__('message')}}"></textarea>
               <input type="submit" value="{{__('send')}}">
   
            </form>
         </div>
   
      </div>
   
   </section>
   
   
   <!-- contact section ends -->


   <!-- abuout section starts  -->

   <section id="about" class="about">

      <h1 class="heading">{{__('about us')}}</h1>

      <div class="row">

         <div class="content">
            <h3>{{__('Who We Are ?')}}</h3>
            <p>{{__('Volkbase is a small company that includes professionals specialized in many fields of IT services. We are committed to delivering various IT services which include Web developments, mobile development, networking and more. Our number one priority is customer satisfaction. We tend to go out of our way to cater to every need when it comes to our clients. We are also certain that our delivered service will be conducted with the highest of standards. Our wide variety of IT services and after sale maintenance require us to be always available to be of help whenever needed. It’s our belief that we can provide you with the best possible solutions because we make sure that you will be completely satisfied of what we promise to provide.')}}</p>
            <a href="#"><button class="btn">{{__('read more')}}</button></a>
         </div>

         <div class="image">
            <img src="{{asset('images/undraw_team_collaboration_re_ow29.svg')}}" alt="">
         </div>

      </div>


   </section>

   <!-- abuout section ends  -->


@endsection


    
@extends('components.footer')