/**
 * Menu Slider
 */

let currentIndex = 0;
let autoSlideInterval;
let slider, sliderWindow, cards;

function getStep() {
    const gap = parseFloat(getComputedStyle(slider).gap) || 0;
    return cards[0].getBoundingClientRect().width + gap;
}

function getVisibleCount() {
    const gap = parseFloat(getComputedStyle(slider).gap) || 0;
    const step = getStep();
    return Math.max(Math.floor((sliderWindow.clientWidth + gap) / step), 1);
}

function moveSlide(direction) {
    const visibleCount = getVisibleCount();
    const maxIndex = Math.max(cards.length - visibleCount, 0);

    currentIndex += direction;
    if (currentIndex < 0) currentIndex = maxIndex;  // loop to last
    if (currentIndex > maxIndex) currentIndex = 0;  // loop to first

    slider.style.transform = 'translateX(-' + (currentIndex * getStep()) + 'px)';
}

function startAutoSlide() {
    autoSlideInterval = setInterval(function () {
        moveSlide(1);
    }, 3000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

document.addEventListener('DOMContentLoaded', function () {
    slider = document.getElementById('menuSlider');
    sliderWindow = document.querySelector('.carousel-window');
    cards = slider.querySelectorAll('.food-card');

    startAutoSlide();

    sliderWindow.addEventListener('mouseenter', stopAutoSlide);
    sliderWindow.addEventListener('mouseleave', startAutoSlide);

    window.addEventListener('resize', function () {
        currentIndex = 0;
        slider.style.transform = 'translateX(0px)';
    });
});