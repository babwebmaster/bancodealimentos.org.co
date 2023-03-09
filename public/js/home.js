const swiperBlog = new Swiper('.swiper.blog', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 3500,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 5
        },
        // when window width is >= 480px
        560: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is >= 991px
        768: {
            slidesPerView: 3,
            spaceBetween: 10
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
const swiperCarousel = new Swiper('.swiper-carousel', 
    {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 4000,
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination.carousel',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next.carousel',
            prevEl: '.swiper-button-prev.carousel',
        }
    }
);