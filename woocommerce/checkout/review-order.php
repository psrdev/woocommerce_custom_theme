<?php
defined('ABSPATH') || exit;
?>
<div class="checkout-review-order">

    <div class="order-items-list">
        <?php
        do_action('woocommerce_review_order_before_cart_contents');

        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {

                $thumbnail = $_product->get_image('thumbnail', ['class' => 'img-fluid rounded-3', 'style' => 'width:60px; height:auto;']);
                ?>

                <div class="order-item d-flex align-items-center justify-content-between py-3 border-bottom">

                    <div class="d-flex align-items-center gap-3">
                        <?php echo $thumbnail; ?>

                        <div class="item-details">
                            <div class="fw-semibold text-dark">
                                <?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)); ?>
                            </div>

                            <div class="text-muted small">
                                × <?php echo esc_html($cart_item['quantity']); ?>
                            </div>

                            <?php echo wc_get_formatted_cart_item_data($cart_item); ?>
                        </div>
                    </div>

                    <div class="item-price fw-semibold text-dark text-end">
                        <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
                    </div>

                </div>
                <?php
            }
        }

        do_action('woocommerce_review_order_after_cart_contents');
        ?>
    </div>

    <!-- SUMMARY SECTION -->
    <div class="order-summary my-4 p-3 rounded-3 ">

        <div class="d-flex justify-content-between py-2">
            <span><?php esc_html_e('Subtotal', 'woocommerce'); ?></span>
            <span><?php wc_cart_totals_subtotal_html(); ?></span>
        </div>

        <?php foreach (WC()->cart->get_coupons() as $code => $coupon): ?>
            <div class="d-flex justify-content-between py-2">
                <span><?php wc_cart_totals_coupon_label($coupon); ?></span>
                <span><?php wc_cart_totals_coupon_html($coupon); ?></span>
            </div>
        <?php endforeach; ?>

        <?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()): ?>
            <?php wc_cart_totals_shipping_html(); ?>
        <?php endif; ?>

        <?php foreach (WC()->cart->get_fees() as $fee): ?>
            <div class="d-flex justify-content-between py-2">
                <span><?php echo esc_html($fee->name); ?></span>
                <span><?php wc_cart_totals_fee_html($fee); ?></span>
            </div>
        <?php endforeach; ?>

        <?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()): ?>
            <?php if ('itemized' === get_option('woocommerce_tax_total_display')): ?>
                <?php foreach (WC()->cart->get_tax_totals() as $tax): ?>
                    <div class="d-flex justify-content-between py-2">
                        <span><?php echo esc_html($tax->label); ?></span>
                        <span><?php echo wp_kses_post($tax->formatted_amount); ?></span>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="d-flex justify-content-between py-2">
                    <span><?php echo esc_html(WC()->countries->tax_or_vat()); ?></span>
                    <span><?php wc_cart_totals_taxes_total_html(); ?></span>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <div class="d-flex justify-content-between py-3 border-top fw-bold fs-5">
            <span><?php esc_html_e('Total', 'woocommerce'); ?></span>
            <span><?php wc_cart_totals_order_total_html(); ?></span>
        </div>

    </div>
</div>