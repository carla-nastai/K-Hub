function toggleMenu() {
    var menu = document.getElementById("menu");
    var hamburger = document.querySelector(".hamburger");

    if (menu.style.display === "block") {
        menu.style.display = "none";
        hamburger.classList.remove("active");
    } else {
        menu.style.display = "block";
        hamburger.classList.add("active");
    }
}