import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import {initSwiper} from "./swiper";
import {scrollDownTag} from "./scrollDownTag";

// CKeditor ----------------------------------
ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

// nav
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');


    burger.addEventListener('click', () => {
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link,index)=>{
            if (link.style.animation){
                link.style.animation ='';
            }else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        })

        // burger animation
        burger.classList.toggle('toggle');
     });

}

navSlide()

// Swiper slider
initSwiper();

// Scroll Down Tag HomePage "Accueil" in /assets/script/scrollDownTag.js
scrollDownTag();