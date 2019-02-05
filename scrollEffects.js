let scrolled = false;

window.onscroll = scrollFunctions;

function scrollFunctions() {
    scrolled = true;
}

setInterval (function() {
    if(scrolled) {
        scrolled = false;
        manageBudgetAppear();
    }
}, 500)

function manageBudgetAppear(){
    let scrollPos = window.scrollY;
    const info = document.getElementById('steps-container');
    const tip = document.getElementById('tip-text-content');

    if (scrollPos > 347) {
        info.style.left = "15%";
        info.style.opacity = "1";
    }
    if (scrollPos > 1388) {
        tip.style.left = "0";
        tip.style.opacity = "1";
    }
}