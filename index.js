function toggleNav() {
    let nav = document.getElementById('navBar');

    if (nav.style.width == "25%") {
        nav.style.width = "80px";
    }
    else {
        nav.style.width = "25%";
    }
}