import { initSwiper } from "./swiper";
import { initSwiper2 } from "./swiper";
import { scrollDownTag } from "./scrollDownTag";
import Swiper, {
  Navigation,
  Autoplay,
  EffectCube,
  EffectCoverflow,
  Pagination,
} from "swiper";

Swiper.use([Navigation, Autoplay, EffectCube, EffectCoverflow, Pagination]);

// nav
const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");

  burger.addEventListener("click", () => {
    //Toggle Nav
    nav.classList.toggle("nav-active");

    //Animate Links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s`;
      }
    });

    // burger animation
    burger.classList.toggle("toggle");
  });
};

navSlide();

// Swiper slider
if (document.querySelector(".easyG")) {
  initSwiper();
}

if (document.querySelector(".signaletique")) {
  initSwiper2();
}

function changeContentMetierTo() {
  let navlinks = document.querySelectorAll(".nav-metier_item");
  let sectionContent = document.querySelectorAll("section");
  console.log(sectionContent);
  navlinks.forEach((link, linkKey) => {
    // pour chaque lien dans la liste
    link.addEventListener("click", (e) => {
      // on ajoute un écouteur d'événement sur le lien (click)
      sectionContent.forEach((section, sectionKey) => {
        section.classList.remove("active");
        if (sectionKey === linkKey) {
          section.classList.add("active");
        }
      });
    });
  });
}
changeContentMetierTo();

// Scroll Down Tag HomePage "Accueil" in /assets/script/scrollDownTag.js
// scrollDownTag();
