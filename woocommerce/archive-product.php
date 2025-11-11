<?php
defined('ABSPATH') || exit;
get_header(); ?>
<div class="" style="height: 50vh;  background-color: rgba(0,0,255,.1)"></div>

<div class="container my-5">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-lg-3 mb-4">
            <div class="sidebar p-3 shadow-sm rounded">
                <h4 class="mb-4">Filters</h4>

                <!-- Categories -->
                <div class="filter-group mb-4">
                    <h5 class="mb-2">Categories</h5>
                    <ul class="list-unstyled">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => true,
                        ));
                        foreach ($categories as $cat) {
                            echo '<li><a href="' . get_term_link($cat) . '" class="text-decoration-none">' . $cat->name . ' <span class="text-muted">(' . $cat->count . ')</span></a></li>';
                        }
                        ?>
                    </ul>
                </div>

                <!-- Price Slider -->
                <div class="filter-group mb-4">
                    <h5 class="mb-2">Price</h5>
                    <?php the_widget('WC_Widget_Price_Filter'); ?>
                </div>


            </div>
        </aside>

        <!-- Products Section -->
        <main class="col-lg-9">
            <!-- Sorting & Showing Results -->
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <div class="showing-results mb-2">
                    <?php
                    global $wp_query;
                    $total = $wp_query->found_posts;
                    $per_page = wc_get_loop_prop('per_page');
                    $paged = max(1, get_query_var('paged', 1));
                    $start = ($paged - 1) * $per_page + 1;
                    $end = min($total, $paged * $per_page);
                    echo "Showing {$start}–{$end} of {$total} results";
                    ?>
                </div>


            </div>

            <!-- Products Grid -->
            <?php if (woocommerce_product_loop()): ?>
                <div class="row g-4">
                    <?php while (have_posts()):
                        the_post();
                        global $product; ?>
                        <div class="col-sm-6 col-md-4 col-lg-4 d-flex">
                            <div class="product-card shadow-sm rounded overflow-hidden d-flex flex-column w-100">
                                <!-- Product Image -->
                                <a href="<?php the_permalink(); ?>" class="product-image d-block overflow-hidden">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium', ['class' => 'img-fluid']);
                                    } else {
                                        echo '<img src="' . wc_placeholder_img_src() . '" class="img-fluid" alt="Placeholder">';
                                    }
                                    ?>
                                </a>

                                <!-- Product Details -->
                                <div class="p-3 mt-auto d-flex flex-column">
                                    <h5 class="product-title mb-2">
                                        <a href="<?php the_permalink(); ?>"
                                            class="text-decoration-none text-dark"><?php the_title(); ?></a>
                                    </h5>

                                    <div class="product-price mb-2"><?php echo $product->get_price_html(); ?></div>

                                    <div class="product-rating mb-3">
                                        <?php if ($product->get_average_rating())
                                            echo wc_get_rating_html($product->get_average_rating()); ?>
                                    </div>

                                    <!-- Product Variations -->
                                    <?php if ($product->is_type('variable')): ?>
                                        <div class="product-variations mb-3">
                                            <?php
                                            $available_attributes = $product->get_variation_attributes();
                                            foreach ($available_attributes as $attribute_name => $options):
                                                $taxonomy = str_replace('attribute_', '', $attribute_name);
                                                $attribute_label = wc_attribute_label($taxonomy);
                                                ?>
                                                <div class="variation-group mb-1">
                                                    <strong><?php echo esc_html($attribute_label); ?>:</strong>
                                                    <?php
                                                    $options_list = array_map(function ($option) use ($taxonomy) {
                                                        if (taxonomy_exists($taxonomy)) {
                                                            return esc_html(get_term_by('slug', $option, $taxonomy)->name);
                                                        }
                                                        return esc_html($option);
                                                    }, $options);

                                                    foreach ($options_list as $key => $opt) {
                                                        echo "<span class=\"badge bg-secondary me-1\">{$opt}</span>";

                                                    }
                                                    ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Add to Cart Button -->
                                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                                        class="btn btn-primary w-100 add-to-cart mt-auto">
                                        <?php echo esc_html($product->add_to_cart_text()); ?>
                                    </a>
                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <nav class="mt-5 d-flex justify-content-center">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '<span class="btn btn-outline-secondary me-2">« Prev</span>',
                        'next_text' => '<span class="btn btn-outline-secondary ms-2">Next »</span>',
                        'before_page_number' => '<span class="btn btn-light me-1">',
                        'after_page_number' => '</span>',
                    ));
                    ?>
                </nav>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>
            <!-- Store Highlights Section -->

        </main>

    </div>
</div>
<section class="store-highlights py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Free Shipping -->
            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side shadow-sm rounded p-3 d-flex align-items-center hover-scale">
                    <span class="icon-box-icon text-primary fs-3 me-3">
                        <i class="bi bi-truck"></i> <!-- Bootstrap Icons -->
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title mb-1">Free Shipping</h3>
                        <p class="mb-0">On orders ₹500 or more</p>
                    </div>
                </div>
            </div>

            <!-- Free Returns -->
            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side shadow-sm rounded p-3 d-flex align-items-center hover-scale">
                    <span class="icon-box-icon text-primary fs-3 me-3">
                        <i class="bi bi-arrow-counterclockwise"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title mb-1">Free Returns</h3>
                        <p class="mb-0">Within 30 days</p>
                    </div>
                </div>
            </div>

            <!-- 20% Off Signup -->
            <div class="col-sm-6 col-lg-3">
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
            <div class="col-sm-6 col-lg-3">
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