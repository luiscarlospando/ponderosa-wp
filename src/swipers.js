// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Thumbs } from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperJumbotron = new Swiper(".swiper-jumbotron", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination],

        // Optional parameters
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperProductos = new Swiper(".swiper-productos", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination],

        // Optional parameters
        direction: "horizontal",
        loop: true,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 10,

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper for anos first
    const swiperAnos = new Swiper(".swiper-anos", {
        spaceBetween: 0,
        slidesPerView: 10,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        slideToClickedSlide: true,
    });

    // init Swiper for historia after anos
    const swiperHistoria = new Swiper(".swiper-historia", {
        modules: [Navigation, Thumbs],

        slideToClickedSlide: true,
        centerInsufficientSlides: true,
        loop: false,
        speed: 100,
        centeredSlides: true,
        allowTouchMove: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiperAnos,
        },
        slidesPerView: 1,
        spaceBetween: 0,

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 60,
            },
        },
    });

    // init Swiper:
    const swiperConsejos = new Swiper(".swiper-consejos", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination],

        // Optional parameters
        direction: "horizontal",
        loop: true,
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 10,

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperProducto = new Swiper(".swiper-producto", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination],

        // Optional parameters
        direction: "vertical",
        loop: false,
        allowTouchMove: true,
        grabCursor: true,
        slidesPerView: 1,
        spaceBetween: 0,

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });
});
