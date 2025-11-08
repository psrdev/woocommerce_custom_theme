export default function initHeroSlider() {

    // const animateSlide = (slide) => {
    //     const elements = slide.querySelectorAll('h2, p, .btn');
    //     gsap.fromTo(elements,
    //         { x: 50, opacity: 0 },   // start off-screen right
    //         { x: 0, opacity: 1, duration: 0.6, stagger: 0.15, ease: "power3.out" }
    //     );

    //     // Optional: subtle background zoom
    //     const bg = slide;
    //     gsap.fromTo(bg,
    //         { scale: 1.05 },
    //         { scale: 1, duration: 6, ease: "power1.out" }  // slow subtle zoom
    //     );
    // };

    // // Reset elements to start position instantly
    // const resetSlideElements = (slide) => {
    //     const elements = slide.querySelectorAll('h2, p, .btn');
    //     elements.forEach(el => gsap.set(el, { x: 50, opacity: 0 }));

    //     // Reset background scale
    //     gsap.set(slide, { scale: 1.05 });
    // };

    // Initialize Swiper
    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 1000,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // on: {
        //     init: function () {
        //         const currentSlide = this.slides[this.activeIndex];
        //         resetSlideElements(currentSlide);
        //         animateSlide(currentSlide);
        //     },
        //     slideChangeTransitionEnd: function () {
        //         const currentSlide = this.slides[this.activeIndex];
        //         resetSlideElements(currentSlide);
        //         animateSlide(currentSlide);
        //     },
        // },
    });
}
