let navbar = document.querySelector('.header .header-navbar');
// let prositForm = document.querySelector('.header .prosit-form');
// let loginForm = document.querySelector('.header .login-form');
let langForm = document.querySelector('.header .lang-form');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   // prositForm.classList.remove('active');
   // loginForm.classList.remove('active');
   langForm.classList.remove('active');
};

// document.querySelector('#prosit-btn').onclick = () =>{
//    prositForm.classList.toggle('active');
//    navbar.classList.remove('active');
//    // loginForm.classList.remove('active');
//    langForm.classList.remove('active');
// };

// document.querySelector('#login-btn').onclick = () =>{
//    loginForm.classList.toggle('active');
//    navbar.classList.remove('active');
//    searchForm.classList.remove('active'); 
//    langForm.classList.remove('active');
// };

document.querySelector('#lang-btn').onclick = () =>{
   langForm.classList.toggle('active');
   // loginForm.classList.remove('active');
   navbar.classList.remove('active');
   // prositForm.classList.remove('active'); 
};
document.querySelector('#close-contact-info').onclick = () =>{
   contactInfo.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
//   prositForm.classList.remove('active');
   // loginForm.classList.remove('active');
   langForm.classList.remove('active');
   contactInfo.classList.remove('active');
};

 


