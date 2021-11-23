import { initSwiper } from "./swiper";
import { initSwiper2 } from "./swiper";
import { scrollDownTag } from "./scrollDownTag";

const breakpoint = 1200;

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

// nav page métiers
function changeContentMetierTo() {
  let navlinks = document.querySelectorAll(".nav-metier_item");
  let sectionContent = document.querySelectorAll("section");

  navlinks.forEach((link, linkKey) => {
    // pour chaque lien dans la liste
    link.addEventListener("click", (e) => {
      // on ajoute un écouteur d'événement sur le lien (click)
      sectionContent.forEach((section, sectionKey) => {
        // pour chaque section
        if (sectionKey !== linkKey) {
          section.classList.remove("active");
        }
        // on supprime la classe active
        if (sectionKey === linkKey && !section.classList.contains("active")) {
          // si la section est égale à la clé du lien cliqué (linkKey) alors on ajoute la classe active
          section.classList.add("active");
        }
      });
      if (window.innerWidth > breakpoint) {
        setTimeout(() => {
          window.scrollTo(0, 0);
        }, 10);
      }
    });
  });
}
changeContentMetierTo();

// Scroll Down Tag HomePage "Accueil" in /assets/script/scrollDownTag.js
scrollDownTag();
