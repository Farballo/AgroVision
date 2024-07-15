document.getElementById('contacto').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Formulario enviado');
});

document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".products img");
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("appear");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    images.forEach(img => {
        observer.observe(img);
    });
});
setInterval(showNextImage, 5000);


var autoplayInterval = 3000;
var autoplayTimer = null;
var autoplay = true;
var newIndex = 1;

if (autoplay) {
        autoplayTimer = setInterval(function() {
        newIndex++;
        navigateSlider();
    }, autoplayInterval);
}

function resetSlider() { 
    clearInterval(autoplayTimer);
}

function navigateSlider() { 
    const slide1 = document.getElementById('slide1');
    const slide2 = document.getElementById('slide2');
    const slide3 = document.getElementById('slide3');
    const slide4 = document.getElementById('slide4');
    if (newIndex == 1) {
        slide1.checked = true;
    } else if (newIndex == 2) {
        slide2.checked = true;
    } else if (newIndex == 3) {
        slide3.checked = true;
    } else if (newIndex == 4) {
        slide4.checked = true;
        newIndex = 0;
    }
}