// script.js
document.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY;
    var button = document.getElementById('portfolioButton');

    if (scrollPosition > 100) {
        button.style.top = '0';
    } else {
        button.style.top = '-50px';
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const homeButton = document.getElementById('homeButton'); // Ensure you have an ID assigned to your Home button

    homeButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default anchor behavior
        window.scrollTo({
            top: 0, // Scroll to the top of the window
            behavior: 'smooth' // Smooth scroll
        });
    });
});
