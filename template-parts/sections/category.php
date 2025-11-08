<?php
$categories = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => true,
));

if (empty($categories) || is_wp_error($categories)) {
    return;
}
?>
<section class="product-category-grid py-5">
    <div class="container">
        <h2 class="section-title mb-4 text-center">Shop by Category</h2>

        <div class="row g-3 g-md-4 category-grid">
            <?php foreach ($categories as $index => $category):
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image_url = wp_get_attachment_url($thumbnail_id);
                $category_link = get_term_link($category);
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="<?php echo esc_url($category_link); ?>" class="category-item"
                        style="--i: <?php echo $index; ?>;">
                        <div class="category-image" style="background-image:url('<?php echo esc_url($image_url); ?>');">
                        </div>
                        <div class="category-overlay d-flex align-items-end justify-content-center">
                            <h3 class="category-title"><?php echo esc_html($category->name); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>