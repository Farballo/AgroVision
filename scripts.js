document.getElementById('contacto').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Formulario enviado');
});

let currentIndex = 0;
const images = document.querySelectorAll('.slides img');
const totalImages = images.length;

function showNextImage() {
    const nextIndex = (currentIndex + 1) % totalImages;

    images[currentIndex].classList.remove('active');
    images[currentIndex].classList.add('prev');
    
    images[nextIndex].classList.add('next');

    setTimeout(() => {
        images[currentIndex].classList.remove('prev');
        images[nextIndex].classList.remove('next');
        images[nextIndex].classList.add('active');
        
        currentIndex = nextIndex;
    }, 1000); // Duración de la transición (1s)
}

document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".imagenes_camaras img");
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