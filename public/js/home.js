/** 
 *@autor fernando
 *Bueno este codigo fue echo por IA 
 */
document.addEventListener('DOMContentLoaded', function () {
    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselImages = document.querySelectorAll('.carousel-image');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dots = document.querySelectorAll('.dot');

    let counter = 0;
    let intervalId;
    const intervalTime = 4000; // 1 minuto

    // Inicializar el carrusel
    function initCarousel() {
        const slideWidth = carouselSlide.clientWidth;
        carouselImages.forEach(img => {
            img.style.width = `${slideWidth}px`;
        });

        carouselSlide.style.transform = `translateX(${-slideWidth * counter}px)`;
    }

    // Navegar al slide específico
    function goToSlide(index) {
        const slideWidth = carouselSlide.clientWidth;
        counter = index;
        carouselSlide.style.transition = "transform 0.5s ease";
        carouselSlide.style.transform = `translateX(${-slideWidth * counter}px)`;
        updateDots();
    }

    // Slide siguiente
    function nextSlide() {
        if (counter >= carouselImages.length - 1) {
            goToSlide(0);
        } else {
            goToSlide(counter + 1);
        }
    }

    // Slide anterior
    function prevSlide() {
        if (counter <= 0) {
            goToSlide(carouselImages.length - 1);
        } else {
            goToSlide(counter - 1);
        }
    }

    // Actualizar puntos indicadores
    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === counter);
        });
    }

    // Iniciar autoplay
    function startAutoplay() {
        intervalId = setInterval(nextSlide, intervalTime);
    }

    // Event listeners
    prevBtn.addEventListener('click', () => {
        clearInterval(intervalId);
        prevSlide();
        startAutoplay();
    });

    nextBtn.addEventListener('click', () => {
        clearInterval(intervalId);
        nextSlide();
        startAutoplay();
    });

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            clearInterval(intervalId);
            goToSlide(parseInt(dot.getAttribute('data-slide')));
            startAutoplay();
        });
    });

    // Redimensionar
    window.addEventListener('resize', initCarousel);

    // Inicializar
    initCarousel();
    startAutoplay();
});