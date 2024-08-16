var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 3){
        counter = 1;
    }
}, 10000);


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

window.onscroll = function() {stickyHeader()};

var header = document.querySelector("header");
var sticky = header.offsetTop + 2000; // Ajusta el valor para el punto donde el header debe dejar de ser fijo

function stickyHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.remove("sticky");
        header.style.position = "absolute";
        header.style.top = sticky + "px"; // Mantén el header en su posición
    } else {
        header.classList.add("sticky");
        header.style.position = "fixed";
        header.style.top = "0";
    }
}

/* 
else {
    setTimeout(() => {
        if (!entry.isIntersecting) {
            entry.target.classList.remove("appear");
        }
    }, 5000);
}
*/

function toggleMenu() {
    var navMenu = document.getElementById('nav-menu');
    if (navMenu.style.display === 'flex') {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'flex';
        navMenu.style.flexDirection = 'column';
        navMenu.style.alignItems = 'center';
    }
}