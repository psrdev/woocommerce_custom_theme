<?php get_header(); ?>

<?php get_template_part('template-parts/sections/slider'); ?>

<?php
/**
 * Template Part: Product Category Grid
 */

$categories = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => true,
));

if (empty($categories) || is_wp_error($categories))
    return;
?>

<section class="product-category-grid container py-5">
    <h2 class="section-title text-center mb-4">Shop by Category</h2>

    <div class="category-grid">
        <?php foreach ($categories as $index => $category):
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);
            $category_link = get_term_link($category);
            ?>
            <a href="<?php echo esc_url($category_link); ?>" class="category-item item-<?php echo $index % 6; ?>">
                <div class="category-image" style="background-image:url('<?php echo esc_url($image_url); ?>');"></div>
                <div class="category-overlay">
                    <h3><?php echo esc_html($category->name); ?></h3>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>