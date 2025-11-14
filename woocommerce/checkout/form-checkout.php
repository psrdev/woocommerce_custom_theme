<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_checkout_form', $checkout);

// If registration is disabled and required, force login
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html__('You must be logged in to checkout.', 'woocommerce');
    return;
}
?>

<section class="checkout-section py-5 mt-5">
    <div class="container">

        <!-- ============================
             LOGIN SECTION (OUTSIDE FORM)
             ============================ -->
        <?php if (!is_user_logged_in()): ?>
            <div class="checkout-login card border-0 shadow-sm p-4 rounded-4 mb-4">

                <h3 class="mb-3 fw-bold text-dark">
                    <?php esc_html_e('Login', 'woocommerce'); ?>
                </h3>

                <p class="text-muted mb-4">
                    <?php esc_html_e('If you already have an account, please log in. Otherwise, continue as guest and fill in your billing details.', 'woocommerce'); ?>
                </p>

                <?php
                woocommerce_login_form(
                    array(
                        'redirect' => wc_get_checkout_url(),
                        'hidden' => false,
                    )
                );
                ?>
            </div>
        <?php endif; ?>


        <!-- ============================
             CHECKOUT FORM
             ============================ -->
        <form name="checkout" method="post" class="checkout woocommerce-checkout"
            action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

            <div class="row g-4">

                <!-- LEFT COLUMN -->
                <div class="col-lg-7">

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

                    </div> <!-- /.checkout-form -->

                </div> <!-- /.col-lg-7 -->


                <!-- RIGHT COLUMN -->
                <div class="col-lg-5">

                    <div class="order-summary card border-0 shadow-sm p-4 rounded-4">

                        <h3 class="mb-4 fw-bold text-dark">
                            <?php esc_html_e('Your Order', 'woocommerce'); ?>
                        </h3>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action('woocommerce_checkout_order_review'); ?>
                        </div>

                    </div> <!-- /.order-summary -->

                </div> <!-- /.col-lg-5 -->

            </div> <!-- /.row -->

        </form> <!-- /.checkout form -->

    </div> <!-- /.container -->
</section>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>