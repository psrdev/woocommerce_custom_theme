<?php
defined('ABSPATH') || exit;

wc_print_notices();
?>

<div class="container my-5">
    <div class="auth-card mx-auto p-4 p-md-5 shadow rounded-4">

        <h2 class="text-center mb-3">Forgot Password?</h2>
        <p class="text-center text-muted mb-4">
            Enter your email address, and we’ll send you a link to reset your password.
        </p>

        <form method="post" class="woocommerce-ResetPassword lost_reset_password">

            <?php do_action('woocommerce_lostpassword_form_start'); ?>

            <div class="mb-3">
                <label for="user_login" class="form-label fw-medium">Email Address *</label>
                <input class="form-control form-control-lg rounded-3" type="text" name="user_login" id="user_login"
                    autocomplete="email" required>
            </div>

            <?php do_action('woocommerce_lostpassword_form'); ?>

            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill mb-3">
                Send Reset Link
            </button>

            <?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>

            <input type="hidden" name="wc_reset_password" value="true">

            <?php do_action('woocommerce_lostpassword_form_end'); ?>

        </form>

        <div class="text-center mt-3">
            <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="small">
                ← Back to Login
            </a>
        </div>

    </div>
</div>