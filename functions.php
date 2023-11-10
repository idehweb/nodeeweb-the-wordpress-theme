<?php
/**
 * Nodeeweb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage nodeeweb
 * @version 0.0.1
 */

if ( ! function_exists( 'nodeeweb_support' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * @version 0.0.1
	 */
	function nodeeweb_support() {
        define( 'GUTSLIDER_VERSION', '0.1.2' );

        define( 'GUTSLIDER_URL', get_template_directory_uri() );
        define('GUTSLIDER_DIR_PATH', get_template_directory());
        define( 'GUTSLIDER_DIR', get_template_directory() );
        require_once trailingslashit( GUTSLIDER_DIR ) . '/includes/init.php';
        require_once get_template_directory() . '/admin/admin.php';

        add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style.css' );
		load_theme_textdomain( 'nodeeweb', get_template_directory() . '/languages' );
	}
}

add_action( 'after_setup_theme', 'nodeeweb_support' );

if ( ! function_exists( 'nodeeweb_admin_enqueue_scripts' ) ) {
	/**
	 * Add admin scripts
	 * @version 0.0.1
	 */
	function nodeeweb_admin_enqueue_scripts($hook) {
//        if ('site-editor.php' !== $hook) {
//            return;
//        }
//        print_r($hook);
        wp_enqueue_script('nodeeweb_custom_script', get_template_directory_uri() . '/script/admin.js');
	}
}

add_action( 'admin_enqueue_scripts', 'nodeeweb_admin_enqueue_scripts' );

if ( ! function_exists( 'nodeeweb_styles' ) ) {
	/**
	 * Enqueue styles.
	 * @version 0.0.1
	 */
	function nodeeweb_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'nodeeweb-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		wp_enqueue_style( 'nodeeweb-style' );
        wp_enqueue_script('custom-script-menu', get_template_directory_uri() . '/script/main.js', array('jquery'), true, true);

    }
}

add_action( 'wp_enqueue_scripts', 'nodeeweb_styles' );


function nodeeweb_customizer_enqueues() {
    wp_enqueue_script( 'nodeeweb-exntender-scripts',
        plugins_url( '/js/custom.customize.js', dirname( __FILE__ ) ),
        array( 'jquery', 'customize-controls' ),
        false,
        true );
}

add_action( 'customize_controls_enqueue_scripts', 'nodeeweb_customizer_enqueues' );


require_once get_template_directory() . '/block/styles.php';
require_once get_template_directory() . '/block/patterns.php';
require_once get_template_directory() . '/includes/autoloader.php';

$customizer = new NodeewebExtender\Customizer();
$extender   = new NodeewebExtender\Extender();

// Disable new WooCommerce product template (from Version 7.7.0)
function nodeeweb_restored_reset_product_template($post_type_args) {
    if (array_key_exists('template', $post_type_args)) {
        unset($post_type_args['template']);
    }
    return $post_type_args;
}
add_filter('woocommerce_register_post_type_product', 'nodeeweb_restored_reset_product_template');

// Enable Gutenberg editor for WooCommerce
function nodeeweb_restored_activate_gutenberg_product($can_edit, $post_type) {
    if ($post_type == 'product') {
        $can_edit = true;
    }
    return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'nodeeweb_restored_activate_gutenberg_product', 10, 2);

// Enable taxonomy fields for woocommerce with gutenberg on
function nodeeweb_restored_enable_taxonomy_rest($args) {
    $args['show_in_rest'] = true;
    return $args;
}
add_filter('woocommerce_taxonomy_args_product_cat', 'nodeeweb_restored_enable_taxonomy_rest');
add_filter('woocommerce_taxonomy_args_product_tag', 'nodeeweb_restored_enable_taxonomy_rest');;