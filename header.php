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
		<div class="container d-flex align-items-center justify-content-between header-inner py-3">

			<!-- Logo -->
			<div class="site-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo.png')); ?>" class="custom-logo"
						alt="Site Logo">
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

			<!-- Search Form (Desktop) -->
			<div class="header-search d-none d-lg-flex align-items-center ms-4 me-3" style="flex: 1; max-width: 400px;">
				<form role="search" method="get" class="woocommerce-product-search w-100"
					action="<?php echo esc_url(home_url('/')); ?>">
					<div class="input-group border rounded-pill overflow-hidden">
						<input type="search" class="form-control border-0 ps-3 py-2 search-field"
							placeholder="<?php echo esc_attr__('Search products...', 'awadh-crafts'); ?>"
							value="<?php echo get_search_query(); ?>" name="s"
							aria-label="<?php echo esc_attr__('Search products', 'awadh-crafts'); ?>" />
						<input type="hidden" name="post_type" value="product" />
						<button type="submit" class="btn btn-link text-decoration-none px-3 search-button"
							aria-label="<?php echo esc_attr__('Search', 'awadh-crafts'); ?>">
							<i class="bi bi-search"></i>
						</button>
					</div>
				</form>
			</div>

			<!-- Header Icons -->
			<div class="header-icons d-flex align-items-center gap-3">
				<!-- Mobile Search Toggle -->
				<button class="btn btn-link text-dark p-1 d-lg-none search-toggle-btn" type="button"
					id="mobile-search-toggle" aria-label="Toggle search">
					<i class="bi bi-search fs-5"></i>
				</button>

				<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
					class="text-dark text-decoration-none" aria-label="My account">
					<i class="bi bi-person fs-5"></i>
				</a>
				<a href="<?php echo wc_get_cart_url(); ?>" class="text-dark text-decoration-none position-relative"
					aria-label="Cart">
					<i class="bi bi-cart fs-5"></i>
					<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
						<?php echo WC()->cart->get_cart_contents_count(); ?>
					</span>
				</a>

				<!-- Mobile Menu Toggle -->
				<button class="navbar-toggler d-lg-none border-0 p-0 ms-2" type="button" id="mobile-menu-toggle"
					aria-label="Toggle menu">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>

		<!-- Mobile Search Bar -->
		<div class="mobile-search-bar bg-white border-top d-lg-none" id="mobile-search-bar">
			<div class="container py-3">
				<form role="search" method="get" class="woocommerce-product-search"
					action="<?php echo esc_url(home_url('/')); ?>">
					<div class="input-group border rounded-pill overflow-hidden">
						<input type="search" class="form-control border-0 ps-3 py-2 search-field"
							placeholder="<?php echo esc_attr__('Search products...', 'awadh-crafts'); ?>"
							value="<?php echo get_search_query(); ?>" name="s"
							aria-label="<?php echo esc_attr__('Search products', 'awadh-crafts'); ?>" />
						<input type="hidden" name="post_type" value="product" />
						<button type="submit" class="btn btn-link text-decoration-none px-3 search-button"
							aria-label="<?php echo esc_attr__('Search', 'awadh-crafts'); ?>">
							<i class="bi bi-search"></i>
						</button>
						<button type="button" class="btn btn-link text-decoration-none px-3 search-close-btn"
							id="mobile-search-close" aria-label="Close search">
							<i class="bi bi-x"></i>
						</button>
					</div>
				</form>
			</div>
		</div>

		<!-- Mobile Menu -->
		<nav class="mobile-nav-full d-lg-none" id="mobile-menu">
			<div class="mobile-menu-inner">
				<button class="mobile-menu-close" id="mobile-menu-close" aria-label="Close menu">
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