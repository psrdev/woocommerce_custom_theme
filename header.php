<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Awadh_Crafts
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header fixed-top">
		<div class="container d-flex align-items-center justify-content-between header-inner">

			<!-- Logo -->
			<div class="site-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<div class="site-logo">
						<a href="/">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo.png')); ?>"
								class="custom-logo" alt="Site Name" />
						</a>
					</div>
				</a>
			</div>

			<!-- Navigation -->
			<nav class="main-nav d-none d-lg-block">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav-list d-flex mb-0',
					'fallback_cb' => false,
				));
				?>
			</nav>

			<!-- Header Icons -->
			<div class="header-icons d-flex align-items-center">
				<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="header-icon">
					<i class="bi bi-person"></i>
				</a>
				<a href="<?php echo wc_get_cart_url(); ?>" class="header-icon position-relative cart-icon-wrapper">

					<i class="bi bi-cart"></i>

					<span class="cart-count">
						<?php echo WC()->cart->get_cart_contents_count(); ?>
					</span>

				</a>

				<!-- Mobile Menu Toggle -->
				<button class="navbar-toggler d-lg-none" type="button" id="mobile-menu-toggle">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>

		<!-- Mobile Menu -->
		<nav class="mobile-nav-full d-lg-none" id="mobile-menu">
			<div class="mobile-menu-inner">
				<button class="mobile-menu-close" id="mobile-menu-close">
					<i class="bi bi-x-lg"></i>
				</button>
				<?php
				wp_nav_menu([
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'mobile-menu-list list-unstyled mb-0',
				]);
				?>
			</div>
		</nav>

		<!-- Overlay -->
		<div class="mobile-nav-overlay" id="mobile-nav-overlay"></div>
	</header>