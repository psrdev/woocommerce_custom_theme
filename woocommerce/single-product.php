<?php
defined('ABSPATH') || exit;
get_header('shop');
?>

<main class="single-product-modern">
    <section class="product-hero py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <!-- Gallery -->
                <div class="col-12 col-lg-6">
                    <div class="product-gallery swiper">
                        <div class="swiper-wrapper">
                            <?php
                            global $product;
                            $attachment_ids = $product->get_gallery_image_ids();
                            if (has_post_thumbnail()):
                                $main_id = $product->get_image_id();
                                echo '<div class="swiper-slide">' . wp_get_attachment_image($main_id, 'large') . '</div>';
                            endif;
                            if ($attachment_ids):
                                foreach ($attachment_ids as $id) {
                                    echo '<div class="swiper-slide">' . wp_get_attachment_image($id, 'large') . '</div>';
                                }
                            endif;
                            ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="thumbs swiper mt-3">
                        <div class="swiper-wrapper">
                            <?php
                            if (has_post_thumbnail()):
                                echo '<div class="swiper-slide">' . wp_get_attachment_image($main_id, 'thumbnail') . '</div>';
                            endif;
                            if ($attachment_ids):
                                foreach ($attachment_ids as $id) {
                                    echo '<div class="swiper-slide">' . wp_get_attachment_image($id, 'thumbnail') . '</div>';
                                }
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-12 col-lg-6">
                    <div class="product-info text-light">
                        <?php
                        do_action('woocommerce_before_single_product');
                        the_title('<h1 class="product-title mb-3">', '</h1>');
                        do_action('woocommerce_single_product_summary');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights -->
    <section class="product-highlights py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4 text-center">
                    <div class="highlight-box p-4 rounded-4">
                        <span class="icon fs-2 mb-2 d-block">🪵</span>
                        <h5>Authentic Craftsmanship</h5>
                        <p>Each product is made by skilled artisans using time-honoured techniques.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="highlight-box p-4 rounded-4">
                        <span class="icon fs-2 mb-2 d-block">🌿</span>
                        <h5>Eco-Friendly Materials</h5>
                        <p>We use responsibly sourced materials and sustainable practices.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="highlight-box p-4 rounded-4">
                        <span class="icon fs-2 mb-2 d-block">🚚</span>
                        <h5>Fast & Secure Delivery</h5>
                        <p>Shipped safely and swiftly with real-time tracking updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs + Related -->
    <section class="product-tabs bg-dark py-5">
        <div class="container">
            <?php do_action('woocommerce_after_single_product_summary'); ?>
        </div>
    </section>
</main>

<!-- Sticky Add to Cart -->
<div class="sticky-cart d-flex align-items-center justify-content-between px-3 py-2">
    <div class="product-meta small">
        <strong><?php the_title(); ?></strong> — <?php echo $product->get_price_html(); ?>
    </div>
    <?php woocommerce_template_single_add_to_cart(); ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const gallery = new Swiper(".product-gallery", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: new Swiper(".thumbs", {
                    slidesPerView: 4,
                    spaceBetween: 10,
                }),
            },
        });
    });
</script>

<?php get_footer('shop'); ?>