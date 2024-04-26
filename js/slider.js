// Wait for the DOM to be ready
document.addEventListener('DOMContentLoaded', function () {
    var slides = document.querySelectorAll('.slide');
    var currentIndex = 0;

    function showSlide(index) {
        slides.forEach(function (slide, i) {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    // Function to switch to the next slide
    function switchToNextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // Switch to the next slide every 5 seconds
    setInterval(switchToNextSlide, 5000);

    // Initial display
    showSlide(currentIndex);
});