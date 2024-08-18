document.addEventListener("DOMContentLoaded", function() {
    initializeImageObserver();
});

function initializeImageObserver() {
    const images = document.querySelectorAll(".service-img");
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("appear");
            }
        });
    }, observerOptions);

    images.forEach(img => {
        observer.observe(img);
    });
}

window.onscroll = function() { stickyHeader(); };

var header = document.querySelector("header");
var sticky = header.offsetTop + 2000; // Ajusta el valor para el punto donde el header debe dejar de ser fijo

function stickyHeader() {
    var width = window.innerWidth; // Recalcular el ancho de la pantalla en cada scroll

    if (width > 1156) {
        if (window.pageYOffset > sticky) {
            header.classList.remove("sticky");
            header.style.position = "absolute";
            header.style.top = sticky + "px"; // Mantén el header en su posición fija
        } else {
            header.classList.add("sticky");
            header.style.position = "fixed";
            header.style.top = "0";
        }
    } else {
        // Para pantallas pequeñas, quitar la clase sticky y resetear el estilo
        header.classList.remove("sticky");
        header.style.position = "";
        header.style.top = "";
    }
}

function toggleMenu() {
    var navMenu = document.getElementById('nav-menu');
    var logo_empresa = document.getElementById('logo-empresa-header');
    var logos_redes = document.getElementById('logos-redes-header');
    if (navMenu.style.display === 'flex') {
        navMenu.style.display = 'none';
        logo_empresa.style.display = 'flex';
        logos_redes.style.display = 'flex';
    } else {
        logo_empresa.style.display = 'none';
        logos_redes.style.display = 'none';
        navMenu.style.display = 'flex';
        navMenu.style.flexDirection = 'column';
        navMenu.style.alignItems = 'center';
    }
}