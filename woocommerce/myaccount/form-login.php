<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="container my-5 mt-5">
    <div class="auth-card mx-auto p-4 p-md-5 shadow rounded-4">

        <ul class="nav nav-tabs justify-content-center mb-4" id="authTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
                    type="button" role="tab">
                    Login
                </button>
            </li>

            <?php if (get_option('woocommerce_enable_myaccount_registration') === 'yes'): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button"
                        role="tab">
                        Register
                    </button>
                </li>
            <?php endif; ?>
        </ul>

        <div class="tab-content" id="authTabContent">

            <!-- LOGIN -->
            <div class="tab-pane fade show active" id="login" role="tabpanel">
                <form method="post" class="woocommerce-form woocommerce-form-login login">

                    <?php do_action('woocommerce_login_form_start'); ?>

                    <div class="mb-3">
                        <label for="username" class="form-label fw-medium">Email or Username *</label>
                        <input type="text" class="form-control form-control-lg rounded-3" name="username" id="username"
                            autocomplete="username" required />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-medium">Password *</label>
                        <input type="password" class="form-control form-control-lg rounded-3" name="password"
                            id="password" autocomplete="current-password" required />
                    </div>

                    <?php do_action('woocommerce_login_form'); ?>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <label class="form-check">
                            <input class="form-check-input" name="rememberme" type="checkbox" id="rememberme"
                                value="forever" />
                            <span class="form-check-label">Remember me</span>
                        </label>

                        <a class="small" href="<?php echo esc_url(wp_lostpassword_url()); ?>">
                            Forgot password?
                        </a>
                    </div>

                    <!-- NONCE -->
                    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>

                    <!-- REDIRECT -->
                    <input type="hidden" name="redirect"
                        value="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">

                    <!-- FIXED LOGIN BUTTON -->
                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill" name="login" value="Login">
                        Login
                    </button>

                    <?php do_action('woocommerce_login_form_end'); ?>
                </form>
            </div>

            <!-- REGISTER -->
            <?php if (get_option('woocommerce_enable_myaccount_registration') === 'yes'): ?>
                <div class="tab-pane fade" id="register" role="tabpanel">

                    <form method="post" class="woocommerce-form woocommerce-form-register register">

                        <?php do_action('woocommerce_register_form_start'); ?>

                        <div class="mb-3">
                            <label for="reg_email" class="form-label fw-medium">Email *</label>
                            <input type="email" class="form-control form-control-lg rounded-3" name="email" id="reg_email"
                                autocomplete="email" required />
                        </div>

                        <div class="mb-3">
                            <label for="reg_password" class="form-label fw-medium">Password *</label>
                            <input type="password" class="form-control form-control-lg rounded-3" name="password"
                                id="reg_password" autocomplete="new-password" required />
                        </div>

                        <?php do_action('woocommerce_register_form'); ?>

                        <!-- NONCE -->
                        <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>

                        <!-- FIXED REGISTER BUTTON -->
                        <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill" name="register"
                            value="Register">
                            Register
                        </button>

                        <?php do_action('woocommerce_register_form_end'); ?>
                    </form>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>