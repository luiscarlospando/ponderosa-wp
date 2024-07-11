// Libraries
window.bootstrap = require("bootstrap/dist/js/bootstrap.bundle.js");

// Local Scripts
import "../src/smooth-scrolling";
import "../src/form-ajax";
import "../src/aos";
import "../src/swipers";
import "jquery-parallax.js";

// Header
document.addEventListener("DOMContentLoaded", function () {
    // Cache the DOM element containing the navbar
    var header = document.getElementById("navbar");

    function updateScroll() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;

        if (scroll >= 1) {
            header.classList.add("navbar-scroll");
        } else {
            header.classList.remove("navbar-scroll");
        }
    }

    window.addEventListener("scroll", updateScroll);
    updateScroll();
});

// Function that closes menu
function cerrarMenu() {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    if (menu) {
        menu.classList.remove("menu-abierto");
    }
    if (navbar) {
        navbar.classList.remove("opacity-0");
    }
    if (backdrop) {
        backdrop.classList.remove("backdrop-opacity-1");
    }
}

// Navigation menu
document.getElementById("mburger").addEventListener("click", function (e) {
    e.stopPropagation();
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.toggle("menu-abierto");
    navbar.classList.toggle("opacity-0");
    backdrop.classList.toggle("backdrop-opacity-1");
});

document.querySelector(".menu").addEventListener("click", function (e) {
    e.stopPropagation();
});

document.body.addEventListener("click", function (e) {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.remove("menu-abierto");
    navbar.classList.remove("opacity-0");
    backdrop.classList.remove("backdrop-opacity-1");
});

document
    .getElementById("cerrar-menu")
    .addEventListener("click", cerrarMenu, false);
document
    .getElementById("btn-logo")
    .addEventListener("click", cerrarMenu, false);

// Get the ul element by its ID
var ulElement = document.getElementById("navmenu");

// Get all li elements within the ul element
var liElements = ulElement.getElementsByTagName("li");

// Loop through each li element
for (var i = 0; i < liElements.length; i++) {
    // Do stuff with each li element
    var currentLi = liElements[i];
    currentLi.addEventListener("click", function () {
        var menu = document.querySelector(".menu");
        var navbar = document.getElementById("navbar");
        var backdrop = document.getElementById("backdrop");

        menu.classList.remove("menu-abierto");
        navbar.classList.remove("opacity-0");
        backdrop.classList.remove("backdrop-opacity-1");
    });
}

document
    .getElementById("btn-contacto")
    .addEventListener("click", cerrarMenu, false);

// Cerrar menú con Esc
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        cerrarMenu();
    }
});

// Randomizado del fondo del footer (en conjunto con clases generadas con Sass)
document.addEventListener("DOMContentLoaded", function () {
    var imagesCount = 5; // Number of images (match the number of images in your Sass)
    var randomIndex = Math.floor(Math.random() * imagesCount) + 1;
    var div = document.getElementById("bg-aleatorio");
    div.classList.add("bg-aleatorio-" + randomIndex);
});

// Target the last status element (for stylyng purposes)
document.addEventListener("DOMContentLoaded", function () {
    const statusElements = document.querySelectorAll(".status");
    if (statusElements.length > 0) {
        const lastStatus = statusElements[statusElements.length - 1];
        lastStatus.classList.add("last-status");
    }
});
