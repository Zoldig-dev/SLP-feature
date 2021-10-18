

export function scrollDownTag(){
    let scrollDownTag = document.querySelector(".presentation-tab");
    let screenHeight = window.innerHeight;
    scrollDownTag.onclick = (e) =>{
        window.scrollTo(0, screenHeight);
    }
}