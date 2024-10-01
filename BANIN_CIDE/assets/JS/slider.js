let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    currentSlide = (index + totalSlides) % totalSlides; // Ciclado
    slides.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

// Cambiar de imagen cada 3 segundos
setInterval(() => changeSlide(1), 5000);