<div id="product-<?php the_ID(); ?>" <?php wc_product_class('container py-5'); ?>>

    <div class="row g-5 product-main-wrapper">

        <div class="col-md-6">
            <div class="product-gallery-wrapper shadow-sm">
                <?php do_action('woocommerce_before_single_product_summary'); ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-summary-wrapper">
                <?php do_action('woocommerce_single_product_summary'); ?>
            </div>
        </div>

    </div>

    <div class="row mt-5 product-tabs-wrapper">
        <div class="col-12">
            <?php do_action('woocommerce_after_single_product_summary'); ?>
        </div>
    </div>

</div>