<?php
$initial_count = 8; // how many to load initially
$args = array(
    'post_type' => 'product',
    'posts_per_page' => $initial_count,
    'orderby' => 'date',
    'order' => 'DESC',
);

$new_products = new WP_Query($args);

if ($new_products->have_posts()): ?>
    <section class="new-products-grid py-5">
        <div class="container">
            <h2 class="section-title mb-0 text-center">Explore New Lippan Art Designs</h2>
            <p class="text-center text-muted mb-4">
                We regularly add new MDF designs to inspire your creativity.
            </p>
            <div id="product-grid" class="row g-3 g-md-4">
                <?php while ($new_products->have_posts()):
                    $new_products->the_post();
                    global $product; ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card position-relative h-100">
                            <a href="<?php the_permalink(); ?>" class="product-link d-block">
                                <div class="product-image">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        echo get_the_post_thumbnail(get_the_ID(), 'medium');
                                    } else {
                                        echo '<img src="' . esc_url(wc_placeholder_img_src()) . '" alt="Placeholder">';
                                    }
                                    ?>
                                </div>
                            </a>

                            <div class="product-info text-center p-3">
                                <h3 class="product-title"><?php the_title(); ?></h3>
                                <span class="product-price d-block mb-2">
                                    <?php echo $product->get_price_html(); ?>
                                </span>
                                <?php woocommerce_template_loop_add_to_cart(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>

            <?php if ($new_products->found_posts > $initial_count): ?>
                <div class="text-center mt-4">
                    <button id="load-more-products" class="btn btn-primary px-4 py-2 rounded-pill" data-page="1">
                        Load More
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const wp_vars = { ajax_url: "<?php echo admin_url('admin-ajax.php'); ?>" };
        const loadMoreBtn = document.querySelector("#load-more-products");
        if (!loadMoreBtn) return;

        loadMoreBtn.addEventListener("click", () => {
            const button = loadMoreBtn;
            const currentPage = parseInt(button.dataset.page);
            button.disabled = true;
            button.textContent = "Loading...";

            fetch(`${wp_vars.ajax_url}?action=load_more_products&page=${currentPage + 1}`)
                .then((res) => res.text())
                .then((html) => {
                    if (html.trim() !== "") {
                        document.querySelector("#product-grid").insertAdjacentHTML("beforeend", html);
                        button.dataset.page = currentPage + 1;
                        button.disabled = false;
                        button.textContent = "Load More";
                    } else {
                        button.remove();
                    }
                })
                .catch(() => {
                    button.textContent = "Error";
                });
        });
    });

</script>