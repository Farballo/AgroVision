var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 3){
        counter = 1;
    }
}, 5000);


document.addEventListener("DOMContentLoaded", function() {
    initializeImageObserver();
});

function initializeImageObserver() {
    const images = document.querySelectorAll(".et_pb_main_blurb_image img");
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

/* 
else {
    setTimeout(() => {
        if (!entry.isIntersecting) {
            entry.target.classList.remove("appear");
        }
    }, 5000);
}
*/