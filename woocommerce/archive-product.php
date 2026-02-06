<?php
defined('ABSPATH') || exit;
get_header();
?>

<div class="container my-5">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-lg-3 mb-4">
            <div class="sidebar p-3 shadow-sm rounded">
                <h4 class="mb-4">Filters</h4>

                <div class="filter-group mb-4">
                    <h5>Categories</h5>
                    <ul class="list-unstyled">
                        <?php
                        $categories = get_terms([
                            'taxonomy' => 'product_cat',
                            'hide_empty' => true,
                        ]);
                        foreach ($categories as $cat) {
                            echo '<li><a href="' . esc_url(get_term_link($cat)) . '">' . esc_html($cat->name) . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>

                <div class="filter-group mb-4">
                    <h5>Price</h5>
                    <?php the_widget('WC_Widget_Price_Filter'); ?>
                </div>
            </div>
        </aside>

        <!-- Products -->
        <main class="col-lg-9">

            <?php if (woocommerce_product_loop()): ?>

                <div id="products-wrapper" class="row g-4" data-page="1">
                    <?php while (have_posts()):
                        the_post();
                        global $product; ?>

                        <?php get_template_part('template-parts/product-card'); ?>

                    <?php endwhile; ?>
                </div>
                <?php
                global $wp_query;
                $has_more = $wp_query->max_num_pages > 1;
                ?>
                <!-- Infinite Scroll Trigger -->
                <?php if ($has_more): ?>
                    <div id="load-more-trigger" class="text-center my-4">
                        <span id="loader" class="spinner-border text-primary d-none"></span>
                    </div>
                <?php endif; ?>

            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>

        </main>
    </div>
</div>
<section class="store-highlights py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Free Shipping -->


            <!-- 20% Off Signup -->
            <div class="col-sm-6 col-lg-6">
                <div class="icon-box icon-box-side shadow-sm rounded p-3 d-flex align-items-center hover-scale">
                    <span class="icon-box-icon text-primary fs-3 me-3">
                        <i class="bi bi-gift"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title mb-1">Get Extra Discount</h3>
                        <p class="mb-0">On bulk ordering</p>
                    </div>
                </div>
            </div>

            <!-- 24/7 Support -->
            <div class="col-sm-6 col-lg-6">
                <div class="icon-box icon-box-side shadow-sm rounded p-3 d-flex align-items-center hover-scale">
                    <span class="icon-box-icon text-primary fs-3 me-3">
                        <i class="bi bi-headset"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title mb-1">We Support</h3>
                        <p class="mb-0">24/7 amazing services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>