document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('slider');
    const sections = document.querySelectorAll('.section_caja');
    const totalSlides = sections.length;
    let currentIndex = 0;

    // Botón para mover a la siguiente imagen
    document.getElementById('btn_siguiente').addEventListener('click', function () {
        moveToNextSlide();
    });

    // Botón para mover a la imagen anterior
    document.getElementById('btn_atras').addEventListener('click', function () {
        moveToPrevSlide();
    });

    // Función para mover a la siguiente imagen
    function moveToNextSlide() {
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSliderPosition();
    }

    // Función para mover a la imagen anterior
    function moveToPrevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1;
        }
        updateSliderPosition();
    }

    // Actualiza la posición del slider
    function updateSliderPosition() {
        const offset = -currentIndex * 100;
        slider.style.transform = `translateX(${offset}%)`;
    }
});
