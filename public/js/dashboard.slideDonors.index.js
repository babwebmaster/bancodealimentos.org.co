const swiper = new Swiper('.swiper.donors', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 10,
    spaceBetween: 10,
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
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});