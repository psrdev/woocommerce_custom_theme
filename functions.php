<?php
/**
 * Awadh Crafts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Awadh_Crafts
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function awadh_crafts_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Awadh Crafts, use a find and replace
     * to change 'awadh-crafts' to the name of your theme in all the template files.
     */
    load_theme_textdomain('awadh-crafts', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'awadh-crafts'),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'awadh_crafts_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'awadh_crafts_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function awadh_crafts_content_width()
{
    $GLOBALS['content_width'] = apply_filters('awadh_crafts_content_width', 640);
}
add_action('after_setup_theme', 'awadh_crafts_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function awadh_crafts_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'awadh-crafts'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'awadh-crafts'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'awadh_crafts_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function awadh_crafts_scripts()
{
    wp_enqueue_style('awadh-crafts-style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_style_add_data('awadh-crafts-style', 'rtl', 'replace');

    wp_enqueue_script('awadh-crafts-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'awadh_crafts_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


// addding google fonts and main stylesheet
function awadh_enqueue_assets()
{

    // Google Fonts
    wp_enqueue_style(
        'awadh-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Open+Sans:wght@400;600&display=swap',
        false
    );

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
    );
    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css');

    // Theme main stylesheet
    wp_enqueue_style('awadh-style', get_stylesheet_uri());
    // Main compiled PostCSS file
    wp_enqueue_style('awadh-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_template_directory() . '/assets/css/main.css'));


    // jQuery (built-in)
    wp_enqueue_script('jquery');

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        null,
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );
    // GSAP + ScrollTrigger
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        null,
        true
    );
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        array('gsap'),
        null,
        true
    );

    // Theme JS
    wp_enqueue_script(
        'awadh-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery', 'swiper-js', 'gsap', 'gsap-scrolltrigger'),
        null,
        true
    );


}
add_action('wp_enqueue_scripts', 'awadh_enqueue_assets');
add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ('awadh-main' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>' . "\n";
    }
    return $tag;
}, 10, 3);


// lode more products 
function load_more_products_ajax()
{
    $paged = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $products_per_page = 8;

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $products_per_page,
        'paged' => $paged + 1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            global $product; ?>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card position-relative h-100">
                    <a href="<?php the_permalink(); ?>" class="product-link d-block">
                        <div class="product-image">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail(get_the_ID(), 'medium');
                            } else {
                                echo '<img src="' . esc_url(wc_placeholder_img_src()) . '" alt="Placeholder">';
                            }
                            ?>
                        </div>
                    </a>

                    <div class="product-info text-center p-3">
                        <h3 class="product-title"><?php the_title(); ?></h3>
                        <span class="product-price d-block mb-2">
                            <?php echo $product->get_price_html(); ?>
                        </span>
                        <?php woocommerce_template_loop_add_to_cart(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;

    wp_die();
}
add_action('wp_ajax_load_more_products', 'load_more_products_ajax');
add_action('wp_ajax_nopriv_load_more_products', 'load_more_products_ajax');

// disable admin bar 
add_filter('show_admin_bar', '__return_false');


// WooCommerce support
function awadh_crafts_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 400,
        'single_image_width' => 800,
        'product_grid' => array(
            'default_rows' => 3,
            'min_rows' => 1,
            'max_rows' => 6,
            'default_columns' => 4,
            'min_columns' => 2,
            'max_columns' => 6,
        ),
    ));
}
add_action('after_setup_theme', 'awadh_crafts_add_woocommerce_support');

add_filter('woocommerce_blocks_is_feature_enabled', function ($is_enabled, $feature) {
    if ($feature === 'cart_checkout_blocks') {
        return false; // disable new blockified cart/checkout
    }
    return $is_enabled;
}, 10, 2);

// add_filter('woocommerce_enqueue_styles', '__return_empty_array');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('wc-cart-fragments');
});

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {

    // Update cart count
    ob_start();
    ?>
    <span class="cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php
    $fragments['span.cart-count'] = ob_get_clean();


    // Update mini cart content
    ob_start();
    woocommerce_mini_cart();
    $fragments['.mini-cart-dropdown'] = ob_get_clean();

    return $fragments;
});

add_filter('woocommerce_enable_myaccount_registration', '__return_true');
add_filter('woocommerce_registration_errors', function ($errors, $username, $password, $email) {
    return $errors;
}, 10, 4);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', ['search-form', 'gallery', 'caption']);
});