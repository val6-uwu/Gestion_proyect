const carousel = document.querySelector('.destinations_carousel');
        // Clonamos los items del carousel para crear el efecto de bucle infinito
        const items = carousel.querySelectorAll('.slide');
        items.forEach(item => {
            const clone = item.cloneNode(true);
            carousel.appendChild(clone);
        });

        let scrollInterval;

        function iniciarScroll() {
            scrollInterval = setInterval(() => {
                // Si el scroll llega al final de los items originales, se resetea silenciosamente
                if (carousel.scrollLeft >= carousel.scrollWidth / 2) {
                    carousel.scrollLeft = 0;
                }
                carousel.scrollLeft += 1; // Velocidad del scroll
            }, 25); // Intervalo de tiempo (ms)
        }

        // Pausar el scroll cuando el mouse está encima
        carousel.addEventListener('mouseenter', () => clearInterval(scrollInterval));
        // Reanudar el scroll cuando el mouse sale
        carousel.addEventListener('mouseleave', iniciarScroll);

        // Iniciar el scroll por primera vez
        iniciarScroll();