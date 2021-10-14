import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// CKeditor ----------------------------------
ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );


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


// Scroll Down -------------------------------

let scrollDownTag = document.querySelector(".presentation-tab");
let screenHeight = window.innerHeight;

scrollDownTag.onclick = (e) =>{
    window.scrollTo(0, screenHeight);
}

