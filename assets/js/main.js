import initHeroSlider from "./components/slider.js";
document.addEventListener('DOMContentLoaded', function () {
    initHeroSlider();
    initHeaderOnScroll();
});

document.addEventListener('DOMContentLoaded', function () {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-nav-overlay');
    const closeBtn = document.getElementById('mobile-menu-close'); // NEW ✔

    function closeMenu() {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('active');
        mobileToggle.classList.remove('active');
    }

    mobileToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('open');
        overlay.classList.toggle('active');
        mobileToggle.classList.toggle('active');
    });

    overlay.addEventListener('click', closeMenu);
    closeBtn.addEventListener('click', closeMenu);
});

// header transparency on scroll
function initHeaderOnScroll() {
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
}


