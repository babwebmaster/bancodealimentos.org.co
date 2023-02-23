const swiper = new Swiper('.swiper.donors', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 5
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 5,
          spaceBetween: 10
        },
        // when window width is >= 991px
        991: {
            slidesPerView: 7,
            spaceBetween: 10
        },
        // when window width is >= 1024px
        1024: {
            slidesPerView: 8,
            spaceBetween: 40
        }
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },
});