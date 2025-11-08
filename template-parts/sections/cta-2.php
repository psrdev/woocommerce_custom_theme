<section class="dual-banner-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Banner 1 -->
            <div class="col-12 col-md-6">
                <div class="banner-item position-relative overflow-hidden rounded-4 text-white text-center">
                    <div class="banner-bg"
                        style="background-image: url('http://localhost/wp-content/uploads/2025/08/Slide64-600x600.jpg');">
                    </div>
                    <div class="banner-overlay"></div>
                    <div class="banner-content position-relative z-2 p-5">
                        <h3 class="banner-title mb-3">Handcrafted Wooden Art</h3>
                        <p class="banner-text mb-4">
                            Experience warmth and tradition in every detail — elevate your living space today.
                        </p>
                        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
                            class="btn btn-light rounded-pill px-4 py-2 fw-semibold">
                            Explore Collection
                        </a>
                    </div>
                </div>
            </div>

            <!-- Banner 2 -->
            <div class="col-12 col-md-6">
                <div class="banner-item position-relative overflow-hidden rounded-4 text-white text-center">
                    <div class="banner-bg"
                        style="background-image: url('http://localhost/wp-content/uploads/2025/08/mata-ji-paw-27.jpg');">
                    </div>
                    <div class="banner-overlay"></div>
                    <div class="banner-content position-relative z-2 p-5">
                        <h3 class="banner-title mb-3">Elegant Textile Designs</h3>
                        <p class="banner-text mb-4">
                            From handwoven fabrics to modern textures — style that speaks craftsmanship.
                        </p>
                        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
                            class="btn btn-primary rounded-pill px-4 py-2 fw-semibold">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("scroll", () => {
        document.querySelectorAll(".banner-item").forEach((el) => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add("fade-in-up");
            }
        });
    });

</script>