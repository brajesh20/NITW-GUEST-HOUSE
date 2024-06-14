document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel-slide');
    const dotsContainer = document.querySelector('.navigation-dots');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(-${index * 100}%)`;
        });
        updateDots();
    }

    function createDots() {
        slides.forEach((slide, i) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === currentIndex) {
                dot.classList.add('active');
            }
            dot.addEventListener('click', () => {
                showSlide(i);
                currentIndex = i;
            });
            dotsContainer.appendChild(dot);
        });
    }

    function updateDots() {
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, i) => {
            if (i === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    createDots();

    prevBtn.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    nextBtn.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    function moveToNextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    const intervalId = setInterval(moveToNextSlide, 3000);

    document.querySelector('.carousel').addEventListener('mouseenter', function() {
        clearInterval(intervalId);
    });

    document.querySelector('.carousel').addEventListener('mouseleave', function() {
        intervalId = setInterval(moveToNextSlide, 3000);
    });

});
