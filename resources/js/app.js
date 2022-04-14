// require('./bootstrap');

// Hamburger toggle

const bodyTag = document.querySelector("body");
const menuToggle = document.querySelector("a.menu-toggle");
const menuHamburger = document.querySelector(".menu-hamburger");
// Listen for click

menuToggle.addEventListener("click", () => {
    menuHamburger.classList.toggle("open");
    console.log(bodyTag.classList.toggle(".open"));
    console.log("nav-open");
});
