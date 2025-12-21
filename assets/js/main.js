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


/**
 * Simple WooCommerce Search Functionality
 * Minimal implementation using Bootstrap
 */

document.addEventListener('DOMContentLoaded', function () {
    // Elements
    const searchToggleBtn = document.getElementById('mobile-search-toggle');
    const searchCloseBtn = document.getElementById('mobile-search-close');
    const mobileSearchBar = document.getElementById('mobile-search-bar');

    // Toggle mobile search
    if (searchToggleBtn && mobileSearchBar) {
        searchToggleBtn.addEventListener('click', function () {
            const isActive = mobileSearchBar.classList.toggle('is-active');

            // Focus on search input when opened
            if (isActive) {
                const searchInput = mobileSearchBar.querySelector('.search-field');
                if (searchInput) {
                    searchInput.focus();
                }

                // Add class to body to prevent scrolling
                document.body.classList.add('search-active');
            } else {
                // Remove class from body
                document.body.classList.remove('search-active');
            }
        });
    }

    // Close mobile search
    if (searchCloseBtn && mobileSearchBar) {
        searchCloseBtn.addEventListener('click', function () {
            mobileSearchBar.classList.remove('is-active');
            document.body.classList.remove('search-active');
        });
    }

    // Close search when clicking outside on mobile
    document.addEventListener('click', function (event) {
        if (mobileSearchBar && mobileSearchBar.classList.contains('is-active')) {
            const isClickInside = mobileSearchBar.contains(event.target);
            const isClickOnToggle = searchToggleBtn?.contains(event.target);

            if (!isClickInside && !isClickOnToggle) {
                mobileSearchBar.classList.remove('is-active');
                document.body.classList.remove('search-active');
            }
        }
    });

    // Close search with Escape key
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && mobileSearchBar?.classList.contains('is-active')) {
            mobileSearchBar.classList.remove('is-active');
            document.body.classList.remove('search-active');
        }
    });

    // Close search when form is submitted (optional)
    const searchForms = document.querySelectorAll('.woocommerce-product-search');
    searchForms.forEach(form => {
        form.addEventListener('submit', function () {
            if (mobileSearchBar?.classList.contains('is-active')) {
                mobileSearchBar.classList.remove('is-active');
                document.body.classList.remove('search-active');
            }
        });
    });
});