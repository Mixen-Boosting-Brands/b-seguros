const swiperCarrusel = new Swiper('.swiper-carrusel', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    effect: 'fade',
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
});

const swiperLogos = new Swiper('.swiper-logos', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  autoplay: {
    delay: 5000,
  }
});