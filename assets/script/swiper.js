// Swiper slider

import Swiper, { Navigation, Autoplay, EffectCube, } from "swiper";

Swiper.use([Navigation, Autoplay, EffectCube]);

export function initSwiper() {
    const swiper = new Swiper('.swiper', {
        effect: 'cube',
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
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
}