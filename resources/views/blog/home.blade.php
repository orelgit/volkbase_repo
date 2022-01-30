@extends('components.layout')

@extends('components.header')

@section('content')
    <!-- home section starts  -->

<section class="blog-banner" id="blog-banner">

 <div class="blog-vid-div">
  <video class="blog-vid" autoplay muted loop src="images/blog-page.mp4"></video>
 </div>

 <div class="blog-content">
  <h3>explore the technology</h3>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, laboriosam?</p>
  <a href="#posts" class="btn">Go to blogs</a>
 </div>

</section>

<!-- home section ends -->


<!-- posts section starts  -->

<section class="blog-container" id="posts">
 

 <div class="blog-posts-container">

  <div class="blog-post">
   <img src="images/blog4.jpg" alt="" class="image">
   <div class="blog-date">
    <i class="far fa-clock"></i>
    <span>1st may, 2021</span>
   </div>
   <h3 class="blog-title">blog title goes here</h3>
   <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est
    culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi
    fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis
    maxime alias autem distinctio. Fuga, esse velit!</p>
   <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia
    omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam
    quam?</p>
   <div class="blog-links">
    <a href="#" class="blog-user">
     <i class="far fa-user"></i>
     <span>by admin</span>
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
   <img src="images/blog5.jpg" alt="" class="image">
   <div class="blog-date">
    <i class="far fa-clock"></i>
    <span>1st may, 2021</span>
   </div>
   <h3 class="blog-title">blog title goes here</h3>
   <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est
    culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi
    fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis
    maxime alias autem distinctio. Fuga, esse velit!</p>
   <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia
    omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam
    quam?</p>
   <div class="blog-links">
    <a href="#" class="user">
     <i class="far fa-user"></i>
     <span>by admin</span>
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
   <img src="images/blog6.jpg" alt="" class="image">
   <div class="blog-date">
    <i class="far fa-clock"></i>
    <span>1st may, 2021</span>
   </div>
   <h3 class="blog-title">blog title goes here</h3>
   <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est
    culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi
    fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis
    maxime alias autem distinctio. Fuga, esse velit!</p>
   <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia
    omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam
    quam?</p>
   <div class="blog-links">
    <a href="#" class="blog-user">
     <i class="far fa-user"></i>
     <span>by admin</span>
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
   <h3 class="blog-title">about this page</h3>
   <div class="blog-about">
    <img src="images/undraw_contract_re_ves9.svg" alt="">
    <h3>Blog</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, officia.</p>
    <div class="blog-follow">
     <a href="#" class="fab fa-facebook-f"></a>
     <a href="#" class="fab fa-twitter"></a>
     <a href="#" class="fab fa-instagram"></a>
     <a href="#" class="fab fa-linkedin"></a>
    </div>
   </div>
  </div>

  <div class="blog-box">
   <h3 class="blog-title">categories</h3>
   <div class="blog-category">
    <a href="#"> programming <span>42</span></a>
    <a href="#"> photography <span>75</span> </a>
    <a href="#"> technology <span>22</span> </a>
    <a href="#"> study <span>48</span> </a>
    <a href="#"> science <span>39</span> </a>
    <a href="#"> public <span>12</span> </a>
    <a href="#"> business <span>32</span> </a>
    
   </div>
  </div>

  <div class="blog-box">
   <h3 class="blog-title">popular posts</h3>
   <div class="blog-p-post">
    <a href="#">
     <h3>01. blog title goes here</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
    <a href="#">
     <h3>02. blog title goes here</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
    <a href="#">
     <h3>03. blog title goes here</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
    <a href="#">
     <h3>04. blog title goes here</h3>
     <span><i class="far fa-clock"></i>1st may, 2021</span>
    </a>
   </div>
  </div>

  <div class="blog-box">
   <h3 class="blog-title">popular tags</h3>
   <div class="blog-tags">
    <a href="#">Phone</a>
    <a href="#">photo</a>
    <a href="#">science</a>
    <a href="#">IT</a>
    <a href="#">Database</a>
    <a href="#">Games</a>
    <a href="#">world</a>
   </div>
  </div>

 </div>

</section>

<!-- posts section ends -->


@endsection

    
@extends('components.footer')