import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import {initSwiper} from "./swiper";

// CKeditor ----------------------------------
ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

// Scroll Down -------------------------------

// let scrollDownTag = document.querySelector(".presentation-tab");
// let screenHeight = window.innerHeight;
//
// scrollDownTag.onclick = (e) =>{
//     window.scrollTo(0, screenHeight);
// }

// Swiper slider
initSwiper();