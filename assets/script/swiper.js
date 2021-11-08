// Swiper slider

import Swiper, {
  Navigation,
  Autoplay,
  EffectCube,
  EffectCoverflow,
  Pagination,
} from "swiper";

Swiper.use([Navigation, Autoplay, EffectCube, EffectCoverflow, Pagination]);

export function initSwiper() {
  const swiper = new Swiper(".swiper", {
    effect: "cube",
    cubeEffect: {
      slideShadows: true,
    },
    loop: true,
    speed: 500,
    grabCursor: true,
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}

export function initSwiper2() {
  const swiper2 = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    initialSlide: 2,
  });
}
