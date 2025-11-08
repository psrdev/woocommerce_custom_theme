import initHeroSlider from "./components/slider.js";
document.addEventListener('DOMContentLoaded', function () {
    initHeroSlider();
});

document.addEventListener('DOMContentLoaded', function () {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('open');
        });
    }

    // Optional: Transparent header on scroll
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.remove('transparent');
            } else {
                header.classList.add('transparent');
            }
        });
    }
});

