export const fadeIn = (selector, duration = 1, delay = 0) => {
    gsap.from(selector, { opacity: 0, y: 20, duration, delay, ease: "power2.out" });
};

export const fadeOut = (selector, duration = 1, delay = 0) => {
    gsap.to(selector, { opacity: 0, y: -20, duration, delay, ease: "power2.in" });
};

export const slideInFromLeft = (selector, duration = 1, delay = 0) => {
    gsap.from(selector, { x: -100, opacity: 0, duration, delay, ease: "power3.out" });
};

export const slideInFromRight = (selector, duration = 1, delay = 0) => {
    gsap.from(selector, { x: 100, opacity: 0, duration, delay, ease: "power3.out" });
};

export const scaleUp = (selector, duration = 1, delay = 0) => {
    gsap.from(selector, { scale: 0.5, opacity: 0, duration, delay, ease: "back.out(1.7)" });
};

