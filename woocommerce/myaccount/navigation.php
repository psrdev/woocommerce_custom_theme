<?php
if (!defined('ABSPATH')) {
    exit;
}

$menu_items = wc_get_account_menu_items();
$current = wc_get_account_endpoint_url(get_query_var('account_endpoint'));
?>

<nav class="myaccount-sidebar">
    <ul class="myaccount-nav-list">
        <?php foreach ($menu_items as $endpoint => $label): ?>
            <?php
            $url = wc_get_account_endpoint_url($endpoint);
            $active = wc_get_account_endpoint_url($endpoint) === $current ? 'is-active' : '';
            ?>
            <li class="myaccount-nav-item <?php echo esc_attr($active); ?>">
                <a href="<?php echo esc_url($url); ?>" class="myaccount-nav-link">
                    <span class="nav-icon">
                        <?php
                        // Add simple SVG icons based on endpoint
                        switch ($endpoint) {
                            case 'dashboard':
                                echo '<i class="bi bi-grid"></i>';
                                break;
                            case 'orders':
                                echo '<i class="bi bi-bag-check"></i>';
                                break;
                            case 'downloads':
                                echo '<i class="bi bi-cloud-download"></i>';
                                break;
                            case 'edit-address':
                                echo '<i class="bi bi-geo-alt"></i>';
                                break;
                            case 'edit-account':
                                echo '<i class="bi bi-person"></i>';
                                break;
                            case 'customer-logout':
                                echo '<i class="bi bi-box-arrow-right"></i>';
                                break;
                            default:
                                echo '<i class="bi bi-chevron-right"></i>';
                        }
                        ?>
                    </span>
                    <span><?php echo esc_html($label); ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>