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
