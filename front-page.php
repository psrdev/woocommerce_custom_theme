<?php get_header(); ?>

<section class="hero-section ">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"
                style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/banner/banner-1.jpg')">
                <div class="hero-content fade-in">
                    <h2>Premium Craft Materials</h2>
                    <p>Discover the finest cutouts and handmade supplies for your next project.</p>
                    <a href="/shop" class="btn btn-primary">Shop Now</a>
                </div>
            </div>

            <div class="swiper-slide"
                style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/banner/banner-2.jpg')">
                <div class="hero-content">
                    <h2>For Artists & Creators</h2>
                    <p>Bulk deals for studios and creative businesses.</p>
                    <a href="/shop" class="btn btn-primary">Explore</a>
                </div>
            </div>


        </div>

        <!-- Swiper Controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<?php get_footer(); ?>