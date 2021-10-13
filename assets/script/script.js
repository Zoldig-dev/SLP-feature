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




const navSlide = () =>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');

    burger.addEventListener('click',() => {
        nav.classList.toggle('nav-active');
    });
}

navSlide();