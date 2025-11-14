<?php
defined('ABSPATH') || exit;

$order_id = apply_filters('woocommerce_thankyou_order_id', absint(get_query_var('order-received')));
$order = wc_get_order($order_id);
?>

<section class="order-success py-5 mt-5">
    <div class="container">

        <?php if ($order): ?>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Success Card -->
                    <div class="card border-0 shadow-sm p-5 rounded-4 text-center mb-5">

                        <?php if ($order->has_status('failed')): ?>

                            <h2 class="text-danger fw-bold mb-3">
                                <?php esc_html_e('Your order has failed!', 'woocommerce'); ?>
                            </h2>
                            <p class="mb-4">
                                <?php esc_html_e('Unfortunately your transaction could not be processed.', 'woocommerce'); ?>
                            </p>

                            <a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>"
                                class="btn btn-danger px-4 py-2 rounded-pill me-2">
                                <?php esc_html_e('Retry Payment', 'woocommerce'); ?>
                            </a>

                            <?php if (is_user_logged_in()): ?>
                                <a class="btn btn-outline-secondary px-4 py-2 rounded-pill"
                                    href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">
                                    <?php esc_html_e('My Account', 'woocommerce'); ?>
                                </a>
                            <?php endif; ?>

                        <?php else: ?>

                            <!-- SUCCESS MESSAGE -->
                            <div class="mb-4">
                                <svg width="80" height="80" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" fill="#28a745" opacity="0.15" />
                                    <path d="M8 12.5L10.5 15L16 9" stroke="#28a745" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <h2 class="fw-bold text-success mb-3">
                                <?php esc_html_e('Thank you! Your order has been received.', 'woocommerce'); ?>
                            </h2>

                            <p class="text-muted mb-4">
                                We’ve emailed your order confirmation.
                                Order Number: <strong>#<?php echo $order->get_order_number(); ?></strong>
                            </p>

                        <?php endif; ?>

                    </div>

                    <!-- Order Overview -->
                    <?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order_id); ?>

                    <div class="card border-0 shadow-sm p-4 rounded-4 mb-4">
                        <h4 class="fw-bold mb-4">Order Summary</h4>

                        <ul class="list-unstyled mb-0">

                            <li class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Order Number</span>
                                <strong>#<?php echo $order->get_order_number(); ?></strong>
                            </li>

                            <li class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Date</span>
                                <strong><?php echo wc_format_datetime($order->get_date_created()); ?></strong>
                            </li>

                            <li class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Total</span>
                                <strong><?php echo $order->get_formatted_order_total(); ?></strong>
                            </li>

                            <li class="d-flex justify-content-between">
                                <span class="text-muted">Payment Method</span>
                                <strong><?php echo wp_kses_post($order->get_payment_method_title()); ?></strong>
                            </li>

                        </ul>
                    </div>

                    <!-- Order Items -->
                    <div class="card border-0 shadow-sm p-4 rounded-4">
                        <h4 class="fw-bold mb-4">Items Purchased</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <?php foreach ($order->get_items() as $item_id => $item):
                                        $product = $item->get_product();
                                        ?>
                                        <tr>
                                            <td width="80">
                                                <?php
                                                echo $product ? $product->get_image('thumbnail', ['class' => 'rounded']) : '';
                                                ?>
                                            </td>
                                            <td>
                                                <strong><?php echo $item->get_name(); ?></strong>
                                                <br>
                                                Qty: <?php echo $item->get_quantity(); ?>
                                            </td>
                                            <td class="text-end">
                                                <?php echo wc_price($item->get_total()); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        <?php else: ?>

            <p class="text-center fs-4 text-danger">
                <?php esc_html_e('Invalid order.', 'woocommerce'); ?>
            </p>

        <?php endif; ?>

    </div>
</section>