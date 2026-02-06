<?php
defined('ABSPATH') || exit;
global $product;
?>
<div class="col-sm-6 col-md-4 col-lg-4 d-flex product-item">
    <div class="product-card shadow-sm rounded overflow-hidden d-flex flex-column w-100">

        <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium', ['class' => 'img-fluid']);
            } else {
                echo '<img src="' . wc_placeholder_img_src() . '" class="img-fluid">';
            }
            ?>
        </a>

        <div class="p-3 d-flex flex-column flex-grow-1">
            <h5 class="mb-2">
                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                    <?php the_title(); ?>
                </a>
            </h5>

            <div class="mb-2">
                <?php echo $product->get_price_html(); ?>
            </div>

            <?php if ($product->get_average_rating()): ?>
                <?php echo wc_get_rating_html($product->get_average_rating()); ?>
            <?php endif; ?>

            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn btn-primary mt-auto">
                <?php echo esc_html($product->add_to_cart_text()); ?>
            </a>
        </div>
    </div>
</div>