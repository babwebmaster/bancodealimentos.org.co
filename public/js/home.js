const swiperBlog = new Swiper('.swiper.blog', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
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

// window.addEventListener('scroll',()=>{
//     let counters = document.querySelector('[data-sectionId="cifras"]')
//     console.log(isInViewport(counters));
// });

// function isInViewport(elem) {
//     var distance = elem.getBoundingClientRect();
//     return (
//         distance.top < (window.innerHeight || document.documentElement.clientHeight) && distance.bottom > 0
//     );
// }
