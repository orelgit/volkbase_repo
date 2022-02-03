@extends('components.layout')

@extends('components.header')

@section('content')
    <!-- home section starts  -->

<section class="blog-banner" id="blog-banner">

 <div class="blog-vid-div">
  <video class="blog-vid" autoplay muted loop src="{{asset('images/blog-page.mp4')}}"></video>
 </div>

 <div class="blog-content">
  <h3>{{__('tran.BOGHE title text')}}</h3>
  <p>{{__('tran.BOGHE disc text')}}</p>
  <a href="#posts" class="btn">{{__('tran.BG btn')}}</a>
 </div>

</section>

<!-- home section ends -->


<!-- posts section starts  -->

<section class="blog-container" id="posts">
 

 <div class="blog-posts-container">

  <div class="blog-post">
   <img src="{{asset('images/blog4.jpg')}}" alt="" class="image">
   <div class="blog-date">
    <i class="far fa-clock"></i>
    <span>1st may, 2021</span>
   </div>
   <h3 class="blog-title">{{__('tran.BOGMINE mpost1 title')}}</h3>
   <p class="blog-text">{{__('tran.BOGMINE mpost1 disc')}}</p>
   <p class="blog-text">{{__('tran.BOGMINE mpost1 disc')}}</p>
   <div class="blog-links">
    <a href="#" class="blog-user">
     <i class="far fa-user"></i>
     <span>{{__('tran.BOGMINE mpost1 by')}}</span>
    </a>
    <a href="#" class="blog-icon">
     <i class="far fa-comment"></i>
     <span>(45)</span>
    </a>
    <a href="#" class="blog-icon">
     <i class="far fa-share-square"></i>
     <span>(29)</span>
    </a>
   </div>
  </div>

  <div class="blog-post">
   <img src="{{asset('images/blog5.jpg')}}" alt="" class="image">
   <div class="blog-date">
    <i class="far fa-clock"></i>
    <span>1st may, 2021</span>
   </div>
   <h3 class="blog-title">{{__('tran.BOGMINE mpost2 title')}}</h3>
   <p class="blog-text">{{__('tran.BOGMINE mpost2 disc')}}</p>
    <p class="blog-text">{{__('tran.BOGMINE mpost2 disc')}}</p>
   <div class="blog-links">
    <a href="#" class="blog-user">
     <i class="far fa-user"></i>
     <span>{{__('tran.BOGMINE mpost2 by')}}</span>
    </a>
    <a href="#" class="blog-icon">
     <i class="far fa-comment"></i>
     <span>(45)</span>
    </a>
    <a href="#" class="blog-icon">
     <i class="far fa-share-square"></i>
     <span>(29)</span>
    </a>
   </div>
  </div>

  <div class="blog-post">
   <img src="{{asset('images/blog6.jpg')}}" alt="" class="image">
   <div class="blog-date">
    <i class="far fa-clock"></i>
    <span>1st may, 2021</span>
   </div>
   <h3 class="blog-title">{{__('tran.BOGMINE mpost3 title')}}</h3>
   <p class="blog-text">{{__('tran.BOGMINE mpost3 disc')}}</p>
   <p class="blog-text">{{__('tran.BOGMINE mpost3 disc')}}</p>
   <div class="blog-links">
    <a href="#" class="blog-user">
     <i class="far fa-user"></i>
     <span>{{__('tran.BOGMINE mpost3 by')}}</span>
    </a>
    <a href="#" class="blog-icon">
     <i class="far fa-comment"></i>
     <span>(45)</span>
    </a>
    <a href="#" class="blog-icon">
     <i class="far fa-share-square"></i>
     <span>(29)</span>
    </a>
   </div>
  </div>

 </div>

 <div class="blog-sidebar">

  <div class="blog-box">
   <h3 class="blog-title">{{__('tran.BOGAT head title')}}</h3>
   <div class="blog-about">
    <img src="{{asset('images/undraw_contract_re_ves9.svg')}}" alt="">
    <h3>{{__('tran.BOGAT title')}}</h3>
    <p>{{__('tran.BOGAT disc')}}</p>
    <div class="blog-follow">
     <a href="#" class="fab fa-facebook-f"></a>
     <a href="#" class="fab fa-twitter"></a>
     <a href="#" class="fab fa-instagram"></a>
     <a href="#" class="fab fa-linkedin"></a>
    </div>
   </div>
  </div>

  <div class="blog-box">
   <h3 class="blog-title">{{__('tran.BOGCAT head title')}}</h3>
   <div class="blog-category">
    <a href="#"> {{__('tran.BOGCAT title1')}} <span>42</span></a>
    <a href="#"> {{__('tran.BOGCAT title2')}} <span>75</span> </a>
    <a href="#"> {{__('tran.BOGCAT title3')}} <span>22</span> </a>
    <a href="#"> {{__('tran.BOGCAT title4')}} <span>48</span> </a>
    <a href="#"> {{__('tran.BOGCAT title5')}} <span>39</span> </a>
    <a href="#"> {{__('tran.BOGCAT title6')}} <span>12</span> </a>
    <a href="#"> {{__('tran.BOGCAT title7')}} <span>32</span> </a>
    
   </div>
  </div>

  <div class="blog-box">
   <h3 class="blog-title">{{__('tran.BOGPR head title')}}</h3>
   <div class="blog-p-post">
    <a href="#">
     <h3>{{__('tran.BOGPR ppost1')}}</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
    <a href="#">
     <h3>{{__('tran.BOGPR ppost2')}}</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
    <a href="#">
     <h3>{{__('tran.BOGPR ppost3')}}</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
    <a href="#">
     <h3>{{__('tran.BOGPR ppost4')}}</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
   </div>
  </div>

  <div class="blog-box">
   <h3 class="blog-title">{{__('tran.BOGT head title')}}</h3>
   <div class="blog-tags">
    <a href="#">{{__('tran.BOGT ptag1')}}</a>
    <a href="#">{{__('tran.BOGT ptag2')}}</a>
    <a href="#">{{__('tran.BOGT ptag3')}}</a>
    <a href="#">{{__('tran.BOGT ptag4')}}</a>
    <a href="#">{{__('tran.BOGT ptag5')}}</a>
    <a href="#">{{__('tran.BOGT ptag6')}}</a>
    <a href="#">{{__('tran.BOGT ptag7')}}</a>
   </div>
  </div>

 </div>

</section>

<!-- posts section ends -->


@endsection

    
@extends('components.footer')