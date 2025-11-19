<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Awadh_Crafts
 */

?>

<footer class="site-footer pt-5 pb-4">
	<div class="container">
		<div class="row g-4 justify-content-between">

			<!-- Brand -->
			<div class="col-12 col-md-4 footer-brand">
				<a href="<?php echo esc_url(home_url('/')); ?>"
					class="footer-logo d-inline-flex align-items-center mb-3">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo.png')); ?>" alt="Site Logo"
						class="footer-logo-img" />
				</a>
				<p class="footer-description">
					Handcrafted art & designs inspired by timeless traditions — made with passion and care.
				</p>
			</div>

			<!-- Quick Links -->
			<div class="col-6 col-md-2 footer-links">
				<h4 class="footer-title">Quick Links</h4>
				<ul class="list-unstyled">
					<li><a href="/shop">Shop</a></li>
					<li><a href="/about">About</a></li>
					<!-- <li><a href="#">Blog</a></li> -->
					<!-- <li><a href="#">Contact</a></li> -->
				</ul>
			</div>

			<!-- Customer Care -->
			<div class="col-6 col-md-2 footer-links">
				<h4 class="footer-title">Customer Care</h4>
				<ul class="list-unstyled">
					<li><a href="/faq">FAQs</a></li>
					<!-- <li><a href="#">Shipping</a></li>
					<li><a href="#">Returns</a></li> -->
					<li><a href="/privacy-policy">Privacy Policy</a></li>
				</ul>
			</div>

			<!-- Newsletter -->
			<div class="col-12 col-md-4 footer-newsletter">
				<h4 class="footer-title">Stay Connected</h4>
				<p>Join our newsletter for new arrivals & special offers.</p>
				<form class="newsletter-form d-flex">
					<input type="email" class="form-control" placeholder="Your email address" required />
					<button type="submit" class="btn btn-primary">Subscribe</button>
				</form>
				<div class="footer-social mt-3">
					<a href="https://www.facebook.com/awadhhandicrafts1"><i class="bi bi-facebook"></i></a>
					<a href="https://www.instagram.com/awadhhandicrafts"><i class="bi bi-instagram"></i></a>
					<!-- <a href="#"><i class="bi bi-pinterest"></i></a> -->
				</div>
			</div>
		</div>

		<hr class="footer-divider mt-5 mb-3" />

		<div class="footer-bottom text-center">
			<p class="mb-0">
				© <?php echo date('Y'); ?> <strong>Awadh Crafts</strong>. All Rights Reserved.
			</p>
		</div>
	</div>
</footer>

</div><!-- #page -->
<a href="https://wa.me/917525968644?text=Hi!%20I%20want%20to%20know%20more%20about%20your%20products."
	class="whatsapp-float" target="_blank" rel="noopener">
	<i class="bi bi-whatsapp"></i>
</a>

<?php wp_footer(); ?>

</body>

</html>