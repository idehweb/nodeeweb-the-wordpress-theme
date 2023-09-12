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
require_once get_template_directory() . '/block/styles.php';
require_once get_template_directory() . '/block/patterns.php';
