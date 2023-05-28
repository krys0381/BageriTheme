<?php
/**
 * bageri functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bageri
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bageri_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bageri, use a find and replace
		* to change 'bageri' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bageri', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bageri' ),
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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'bageri_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bageri_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bageri_content_width', 640 );
}
add_action( 'after_setup_theme', 'bageri_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function bageri_scripts() {
	wp_enqueue_style( 'bageri-main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css' );
	wp_enqueue_style( 'main-font', 'https://use.typekit.net/szo0exi.css' );

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js", array(), true);
	wp_enqueue_script( 'bageri-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bageri_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function bageri_register_menu_locations() {
    register_nav_menu("mobile-nav-menu-location", "Mobile Navigation Menu Location");
    register_nav_menu("footer-nav-menu-location", "Footer Navigation Menu Location");
}
add_action("after_setup_theme", "bageri_register_menu_locations");

remove_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10 );

/**
 * Shop Hero Widget
*/
function shop_hero_widget() {
	$args = array(
		'id' 			=> 	'shop_hero_widget',
		'name' 			=> 	__('Shop Hero Widget', 'text_domain'),
		'description' 	=> 	__('Custom Widget for the Shop Hero', 'text_domain'),
		'before_title' 	=> 	'<h1>',
		'after_title' 	=> 	'</h1>',
		'before_widget' => 	'<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'shop_hero_widget');

/**
 * Shop Sidebar Widget
*/
function shop_sidebar_widget() {
	$args = array(
		'id' 			=> 	'shop_sidebar_widget',
		'name' 			=> 	__('Shop Sidebar Widget', 'text_domain'),
		'description' 	=> 	__('Custom Widget for the Shop Sidebar', 'text_domain'),
		'before_title' 	=> 	'<h3>',
		'after_title' 	=> 	'</h3>',
		'before_widget' => 	'<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'shop_sidebar_widget');

/**
 * Footer Contact Widget
*/
function footer_contact_widget() {
	$args = array(
		'id' 			=> 	'footer_contact_widget',
		'name' 			=> 	__('Footer Contact Widget', 'text_domain'),
		'description' 	=> 	__('Custom Footer Widget for Address and Contact Details', 'text_domain'),
		'before_title' 	=> 	'<h4>',
		'after_title' 	=> 	'</h4>',
		'before_widget' => 	'<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'footer_contact_widget');

/**
 * Footer Opening Widget
*/
function footer_opening_widget() {
	$args = array(
		'id' 			=> 	'footer_opening_widget',
		'name' 			=> 	__('Footer Opening Widget', 'text_domain'),
		'description' 	=> 	__('Custom Footer Widget for Opening Hours', 'text_domain'),
		'before_title' 	=> 	'<h4>',
		'after_title' 	=> 	'</h4>',
		'before_widget' => 	'<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'footer_opening_widget');

/**
 * Footer SoMe Widget
*/
function footer_some_widget() {
	$args = array(
		'id' 			=> 	'footer_some_widget',
		'name' 			=> 	__('Footer SoMe Widget', 'text_domain'),
		'description' 	=> 	__('Custom Footer Widget for Social Media links', 'text_domain'),
		'before_title' 	=> 	'<h4>',
		'after_title' 	=> 	'</h4>',
		'before_widget' => 	'<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'footer_some_widget');

/**
 * Footer Payment Widget
*/
function footer_payment_widget() {
	$args = array(
		'id' 			=> 	'footer_payment_widget',
		'name' 			=> 	__('Footer Payment Widget', 'text_domain'),
		'description' 	=> 	__('Custom Footer Widget for Payment Options', 'text_domain'),
		'before_title' 	=> 	'<h4>',
		'after_title' 	=> 	'</h4>',
		'before_widget' => 	'<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'footer_payment_widget');

/**
 * WooCommerce
*/
add_theme_support('woocommerce');

// Remove WooCommerce Styles
function remove_woocommerce_styles($enqueue_styles) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	return $enqueue_styles;
}

add_filter( 'woocommerce_enqueue_styles',  'remove_woocommerce_styles');

/**
 * Enqueue your own WooCommerce Styles
*/
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

/**
 * Override theme default specification for product # per row
 */
function loop_columns() {
	return 3; // 3 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);