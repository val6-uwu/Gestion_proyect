// sliderprod.js
document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const slides = document.querySelector('.slides');
    const slideGroups = document.querySelectorAll('.slide-group');
    const dotsContainer = document.querySelector('.slider-dots');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    // Variables de estado
    let currentIndex = 0;
    let slideCount = slideGroups.length;
    let autoplayInterval;
    let isHovering = false;

    // Inicialización del slider
    function initSlider() {
        createDots();
        startAutoplay();
        setupEventListeners();
    }

    // Crear puntos de navegación
    function createDots() {
        slideGroups.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }

    // Mover el slider a un slide específico
    function goToSlide(index) {
        currentIndex = (index + slideCount) % slideCount;
        updateSliderPosition();
        updateActiveDot();
    }

    // Actualizar posición del slider
    function updateSliderPosition() {
        const offset = -currentIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;
    }

    // Actualizar dot activo
    function updateActiveDot() {
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });
    }

    // Navegación
    function nextSlide() {
        goToSlide(currentIndex + 1);
        resetAutoplay();
    }

    function prevSlide() {
        goToSlide(currentIndex - 1);
        resetAutoplay();
    }

    // Autoplay
    function startAutoplay() {
        if (!isHovering) {
            autoplayInterval = setInterval(nextSlide, 3000);
        }
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    function resetAutoplay() {
        stopAutoplay();
        startAutoplay();
    }

    // Event listeners
    function setupEventListeners() {
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Pausar autoplay al interactuar
        slides.addEventListener('mouseenter', () => {
            isHovering = true;
            stopAutoplay();
        });

        slides.addEventListener('mouseleave', () => {
            isHovering = false;
            startAutoplay();
        });

        // Teclado
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') {
                nextSlide();
            } else if (e.key === 'ArrowLeft') {
                prevSlide();
            }
        });

        // Touch events para móviles
        let touchStartX = 0;
        let touchEndX = 0;

        slides.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoplay();
        }, { passive: true });

        slides.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoplay();
        }, { passive: true });
    }

    // Manejar gestos de swipe
    function handleSwipe() {
        const threshold = 50;
        if (touchEndX < touchStartX - threshold) {
            nextSlide();
        } else if (touchEndX > touchStartX + threshold) {
            prevSlide();
        }
    }

    // Iniciar el slider
    initSlider();
});