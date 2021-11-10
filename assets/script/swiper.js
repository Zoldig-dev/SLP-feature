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
  document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper(".swiper", {
      effect: "cube",
      cubeEffect: {
        slideShadows: true,
      },
      speed: 500,
      grabCursor: true,
      autoplay: {
        delay: 5000,
        pauseOnMouseEnter: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      on: {
        slideChange: function () {
          // console.log(this.activeIndex);
          let slideElements = document.querySelectorAll(".easyG-sliderInfo");
          slideElements.forEach((element, key) => {
            element.classList.remove("active");
            if (key === this.activeIndex) {
              element.classList.add("active");
            }
          });
        },
      },
    });
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
