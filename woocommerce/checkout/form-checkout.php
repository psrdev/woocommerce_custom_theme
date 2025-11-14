<?php
defined('ABSPATH') || exit;

if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html__('You must be logged in to checkout.', 'woocommerce');
    return;
}
?>

<section class="checkout-section py-5 mt-5">
    <div class="container">

        <form name="checkout" method="post" class="checkout woocommerce-checkout"
            action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

            <div class="row g-4">
                <!-- Left Column -->
                <div class="col-lg-7">


                    <?php if (!is_user_logged_in()): ?>
                        <div class="checkout-login card border-0 shadow-sm p-4 rounded-4 mb-4">
                            <h3 class="mb-4 fw-bold text-dark"><?php esc_html_e('Login', 'woocommerce'); ?></h3>
                            <?php
                            // Output the WooCommerce login form
                            woocommerce_login_form(
                                array(
                                    'redirect' => wc_get_checkout_url(),
                                    'hidden' => false,
                                )
                            );
                            ?>
                        </div>
                    <?php endif; ?>


                    <div class="checkout-form card border-0 shadow-sm p-4 rounded-4">


                        <?php if ($checkout->get_checkout_fields()): ?>
                            <?php do_action('woocommerce_checkout_before_customer_details'); ?>

                            <div id="customer_details" class="row">
                                <div class="col-md-12 mb-4">
                                    <?php do_action('woocommerce_checkout_billing'); ?>
                                </div>
                                <div class="col-md-12">
                                    <?php do_action('woocommerce_checkout_shipping'); ?>
                                </div>
                            </div>

                            <?php do_action('woocommerce_checkout_after_customer_details'); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-5">
                    <div class="order-summary card border-0 shadow-sm p-4 rounded-4">
                        <h3 class="mb-4 fw-bold text-dark"><?php esc_html_e('Your Order', 'woocommerce'); ?></h3>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action('woocommerce_checkout_order_review'); ?>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->

        </form>
    </div>
</section>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>