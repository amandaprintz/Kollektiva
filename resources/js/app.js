// require('./bootstrap');

// Hamburger toggle

const menuToggle = document.querySelector(".menu-toggle");
const menuHamburger = document.querySelector(".menu-hamburger");
// Listen for click

menuToggle.addEventListener("click", () => {
    menuHamburger.classList.toggle("open");
    console.log("open menu");
});
