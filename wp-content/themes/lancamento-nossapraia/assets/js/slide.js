const swiperEmpreen = new Swiper(".mySwiper", {
    
    effect: "slide",
    slidesPerView: 1,
    loop: true,
    loopedSlides: 1,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },





});



document.addEventListener('DOMContentLoaded', function(){


    const swiper = new Swiper(".mySwiper1", {
        width: 364,
        slidesPerView: 1,
        spaceBetween: 32,
        // slideActiveClass: 'swiper-slide-active',
        // centeredSlides: true,
        initialSlide: 0,
        // loopAddBlankSlides: true,
        // slideBlankClass: 'swiper-slide-blank',

        slideToClickedSlide: true,
        // loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        breakpoints:{
            1024: {
                // width: 364,
                // slidesPerView: 1,
            },
 
        },

        on:{
            slideChange: function(){
                // Atualiza a class 'active' no menu ao mudar de slide
                updateMenuActiveClass();
            },
        },

        

    });




    const menuItens = document.querySelectorAll(".menu-item");

    menuItens.forEach(function(item){
        item.addEventListener('click', function(){
            var targetSlide = parseInt(this.getAttribute('data-slide'));
            swiper.slideTo(targetSlide);
        });
    });

    swiper.on('click', function () {
        updateMenuActiveClass();
    });

    
    
    function updateMenuActiveClass(){
        menuItens.forEach(function(item){
            // Remove a class 'active' de todos os itens do menu
            item.classList.remove('active');
        });
    
        // Add a class 'active' apenas ao item do menu correspondenteao slide ativo
        menuItens[swiper.activeIndex].classList.add('active');
    }

});

var menuItem = document.querySelectorAll(".menu-item");

document.addEventListener('DOMContentLoaded', function () {
    menuItem[0].classList.add('active');
});


