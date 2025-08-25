document.addEventListener("DOMContentLoaded", function () {
  const mainCarousel = new Swiper(".main-carousel", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 800,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const catCarousel = new Swiper(".cat-carousel", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 800,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".cat-carousel-wrapper .swiper-button-next",
      prevEl: ".cat-carousel-wrapper .swiper-button-prev",
    },
    pagination: {
      el: ".cat-carousel-wrapper .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
});
