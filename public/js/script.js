let navbar = document.querySelector('.header .navbar');
let searchForm = document.querySelector('.header .search-form');
let loginForm = document.querySelector('.header .login-form');
let langForm = document.querySelector('.header .lang-form');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
   langForm.classList.remove('active');
};

document.querySelector('#search-btn').onclick = () =>{
   searchForm.classList.toggle('active');
   navbar.classList.remove('active');
   loginForm.classList.remove('active');
   langForm.classList.remove('active');
};

document.querySelector('#login-btn').onclick = () =>{
   loginForm.classList.toggle('active');
   navbar.classList.remove('active');
   searchForm.classList.remove('active'); 
   langForm.classList.remove('active');
};

document.querySelector('#lang-btn').onclick = () =>{
   langForm.classList.toggle('active');
   loginForm.classList.remove('active');
   navbar.classList.remove('active');
   searchForm.classList.remove('active'); 
};
document.querySelector('#close-contact-info').onclick = () =>{
   contactInfo.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
   langForm.classList.remove('active');
   contactInfo.classList.remove('active');
};

// للانتقال الى العربي انجليزي
  window.onload = function(){
        location.href=document.getElementById("selectbox").value;
    }    


