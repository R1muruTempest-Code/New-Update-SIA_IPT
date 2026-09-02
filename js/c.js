const slider = document.getElementById('menuSlider');
    const cards = slider.querySelectorAll('.food-card');
    let currentIndex = 0;

    function getStep() {
        const gap = parseFloat(getComputedStyle(slider).gap) || 0;
        return cards[0].getBoundingClientRect().width + gap;
    }

    function getVisibleCount() {
        const gap = parseFloat(getComputedStyle(slider).gap) || 0;
        const step = getStep();
        return Math.max(Math.floor((slider.parentElement.clientWidth + gap) / step), 1);
    }

    function moveSlide(direction) {
        const visibleCount = getVisibleCount();
        const maxIndex = Math.max(cards.length - visibleCount, 0);

        currentIndex += direction;
        if (currentIndex < 0) currentIndex = 0;
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        const offset = currentIndex * getStep();
        slider.style.transform = 'translateX(-' + offset + 'px)';
    }

    window.addEventListener('resize', function () {
        currentIndex = 0;
        slider.style.transform = 'translateX(0px)';
    });