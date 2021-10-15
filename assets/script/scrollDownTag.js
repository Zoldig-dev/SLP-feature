//
//Ce script est utilisé  par script.js
//Génère un ScrollDown au click sur l'onglet de la page d'accueil
//

export function scrollDownTag(){
    let scrollDownTag = document.querySelector(".presentation-tab");
    let screenHeight = window.innerHeight;
    scrollDownTag.onclick = (e) =>{
        window.scrollTo(0, screenHeight);
    }
}