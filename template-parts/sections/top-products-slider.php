<?php
// Try to get top-selling products first
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 10,
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
);

$top_products = new WP_Query($args);

// Fallback to latest if store is new
if ($top_products->post_count < 5) {
    wp_reset_postdata();
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $top_products = new WP_Query($args);
}

if ($top_products->have_posts()):
    ?>
    <section class="top-products-slider py-5 position-relative">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title mb-0">Top 10 Products</h2>

            </div>

            <div class="top-products-swiper-wrapper position-relative overflow-hidden">
                <div class="swiper top-products-swiper position-relative">
                    <div class="swiper-wrapper position-relative">
                        <?php while ($top_products->have_posts()):
                            $top_products->the_post();
                            global $product; ?>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <a href="<?php the_permalink(); ?>" class="product-link">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo get_the_post_thumbnail(get_the_ID(), 'medium');
                                            } else {
                                                echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder">';
                                            }
                                            ?>
                                        </a>
                                        <div
                                            class="product-overlay d-flex flex-column align-items-center justify-content-center">
                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                        </div>
                                    </div>

                                    <div class="product-info text-center">
                                        <h3 class="product-title"><?php the_title(); ?></h3>
                                        <span class="product-price d-block mb-2">
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="swiper-nav d-none d-md-flex">
                    <button class="swiper-button-prev "></button>
                    <button class="swiper-button-next "></button>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Swiper('.top-products-swiper', {
            slidesPerView: 1.3,
            spaceBetween: 16,
            loop: true,
            centeredSlides: true,
            grabCursor: true,
            navigation: {
                nextEl: '.top-products-slider .swiper-button-next',
                prevEl: '.top-products-slider .swiper-button-prev',
            },
            breakpoints: {
                576: { slidesPerView: 2.2 },
                768: { slidesPerView: 3 },
                992: { slidesPerView: 4 },
            },
        });
    });
</script>