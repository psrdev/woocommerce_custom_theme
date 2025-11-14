<?php
defined('ABSPATH') || exit;

$current_user = wp_get_current_user();
?>
<section class="myaccount-dashboard py-5 mt-5">
    <div class="container">

        <div class="row g-4">

            <!-- Welcome Card -->
            <div class="col-12">
                <div class="card border-0 shadow-sm p-2 p-md-4 rounded-4 bg-white">
                    <h2 class="fw-bold mb-1 text-dark">
                        <i class="bi bi-person-circle me-2"></i>
                        Hello, <?php echo esc_html($current_user->display_name); ?>
                    </h2>
                    <p class="text-muted mb-0">
                        Manage your orders, addresses, and account details easily.
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-12">
                <div class="card border-0 shadow-sm p-2 p-md-4 rounded-4">
                    <h4 class="fw-bold mb-4">Quick Actions</h4>

                    <div class="row g-3 quick-actions">

                        <div class="col-sm-6 col-lg-3">
                            <a href="<?php echo wc_get_endpoint_url('orders'); ?>" class="action-box">
                                <div class="inner">
                                    <i class="bi bi-box-seam icon"></i>
                                    <h6>My Orders</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <a href="<?php echo wc_get_endpoint_url('edit-address'); ?>" class="action-box">
                                <div class="inner">
                                    <i class="bi bi-geo-alt icon"></i>
                                    <h6>Addresses</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <a href="<?php echo wc_get_endpoint_url('edit-account'); ?>" class="action-box">
                                <div class="inner">
                                    <i class="bi bi-person icon"></i>
                                    <h6>Account Details</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <a href="<?php echo wc_logout_url(); ?>" class="action-box">
                                <div class="inner">
                                    <i class="bi bi-box-arrow-right icon"></i>
                                    <h6>Logout</h6>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Recent Orders -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-2 p-md-4 rounded-4 h-100 bg-white">
                    <h4 class="fw-bold mb-4">
                        <i class="bi bi-receipt-cutoff me-2"></i>Recent Orders
                    </h4>

                    <?php
                    $customer_orders = wc_get_orders([
                        'customer_id' => get_current_user_id(),
                        'limit' => 5,
                        'orderby' => 'date',
                    ]);

                    if (!empty($customer_orders)): ?>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($customer_orders as $order): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>#<?php echo $order->get_order_number(); ?></strong><br>
                                        <small class="text-muted">Placed on
                                            <?php echo wc_format_datetime($order->get_date_created()); ?></small>
                                    </div>

                                    <div class="text-end">
                                        <span class="badge bg-primary rounded-pill mb-2">
                                            <?php echo wc_get_order_status_name($order->get_status()); ?>
                                        </span>
                                        <br>
                                        <strong><?php echo $order->get_formatted_order_total(); ?></strong>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p class="text-muted mt-3">You have no recent orders.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Addresses -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-2 p-md-4 rounded-4 h-100 bg-white">
                    <h4 class="fw-bold mb-4">
                        <i class="bi bi-geo me-2"></i>Saved Addresses
                    </h4>

                    <div class="row g-3">
                        <?php
                        $addresses = apply_filters('woocommerce_my_account_my_addresses', [
                            'billing' => __('Billing Address', 'woocommerce'),
                            'shipping' => __('Shipping Address', 'woocommerce'),
                        ], get_current_user_id());

                        foreach ($addresses as $key => $title):
                            $address = wc_get_account_formatted_address($key);
                            ?>
                            <div class="col-12">
                                <div class="address-box p-3 rounded-3">
                                    <h6 class="fw-bold mb-2"><?php echo esc_html($title); ?></h6>
                                    <p class="text-muted small mb-2">
                                        <?php echo $address ? wp_kses_post($address) : 'Not set yet.'; ?>
                                    </p>
                                    <a class="text-primary fw-semibold"
                                        href="<?php echo wc_get_endpoint_url('edit-address', $key); ?>">
                                        Edit Address →
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>