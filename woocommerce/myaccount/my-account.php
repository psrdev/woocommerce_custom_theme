<?php
defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>

<div class="container-fluid myaccount-page py-5 mt-5">
    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class=" container h-100">
                <?php
                do_action('woocommerce_account_navigation'); ?>
            </div>
        </div>

        <div class="col-lg-9">
            <div class=" h-100">
                <?php
                do_action('woocommerce_account_content');
                ?>
            </div>
        </div>
    </div>


</div>