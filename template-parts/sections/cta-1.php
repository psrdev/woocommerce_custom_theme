<section class="cta-section position-relative text-center text-white overflow-hidden">
    <div class="cta-bg"></div>
    <div class="container position-relative z-2 py-5 py-md-6">
        <h2 class="cta-heading mb-3">Discover the Art of Handcrafted Elegance</h2>
        <p class="cta-subtitle mb-4">
            Every product tells a story — bring home timeless craftsmanship today.
        </p>
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
            class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-semibold text-uppercase">
            Shop Now
        </a>
    </div>
    <div class="cta-overlay"></div>
</section>
<script>
    document.addEventListener("scroll", () => {
        const ctaBg = document.querySelector(".cta-bg");
        if (!ctaBg) return;
        const scrollY = window.scrollY * 0.2;
        ctaBg.style.transform = `scale(1.05) translateY(${scrollY}px)`;
    });

</script>