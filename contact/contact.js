//Open Menu Function
function toggleNav() {
    let nav = document.getElementById('navBar');
    let topBar = document.getElementById('topBar');
    let middleBar = document.getElementById('middleBar');
    let bottomBar = document.getElementById('bottomBar');

    if (nav.style.width == "23%") {
        nav.style.width = "70px";
        topBar.style.width = "";

        bottomBar.style.transform = "rotate(0deg)";
        topBar.style.transform = "rotate(0deg)";
        middleBar.style.opacity = "1";

        setTimeout (function(){
            bottomBar.style.top = "20px";
            topBar.style.top = "0px";
        }, 500)

    }
    else {
        nav.style.width = "23%";
        topBar.style.width= "100%";

        topBar.style.top = "10px";
        bottomBar.style.top = "10px";

        setTimeout (function(){
            middleBar.style.opacity = "0";
            topBar.style.transform = "rotate(45deg)";
            bottomBar.style.transform = "rotate(-45deg)";
        }, 500)
    }
}