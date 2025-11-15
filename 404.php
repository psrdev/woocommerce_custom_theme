<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Awadh_Crafts
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found py-5 vh-100 d-flex align-items-center">
		<div class="container text-center">

			<div class="error-wrapper mx-auto p-4 p-md-5 shadow rounded-4">

				<div class="error-icon mb-4">
					<span>404</span>
				</div>

				<h1 class="page-title mb-3">
					<?php esc_html_e('Oops! That page can’t be found.', 'awadh-crafts'); ?>
				</h1>

				<p class="mb-4">
					<?php esc_html_e('It looks like nothing was found at this location. Try searching or exploring below.', 'awadh-crafts'); ?>
				</p>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg rounded-3">
					<?php esc_html_e('Go to Homepage', 'awadh-crafts'); ?>
				</a>


			</div>

		</div>
	</section>


</main><!-- #main -->

<?php
get_footer();
