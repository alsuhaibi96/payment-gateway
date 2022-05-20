let menuBars=document.querySelector("#menu-bars");
let navBars=document.querySelector("#menu");
menuBars.onclick=function(){
    menuBars.classList.toggle('fa-times');
    navBars.classList.toggle('active');
}
let section=document.querySelectorAll("section");
let navlinks=document.querySelectorAll("header .navbar a");
window.onscroll=function(){
    menuBars.classList.remove('fa-times');
    navBars.classList.remove('active');
    section.forEach(e=>{
        let top=window.scrollY;
        let height=e.offsetHeight;
        let offset=e.offsetTop - 150;
        let id=e.getAttribute('id');
        if(top >=offset && top <offset + height)
        {
            navlinks.forEach(links=>{
                links.classList.remove('active');
                document.querySelector('header .navbar a[href*='+id+']').classList.add('active');

            });
        };
    });
}


var swiper = new Swiper('.home-slider', {
    // Optional parameters
    spaceBetween:20,
    centeredSlides:true,
    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop:true,
  
  });
  var swiper = new Swiper('.review-slider', {
    // Optional parameters
    spaceBetween:20,
    centeredSlides:true,
    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
    loop:true,
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        640:{
            slidesPerView:2,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },
    }
  
  });