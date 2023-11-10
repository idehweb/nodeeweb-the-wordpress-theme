<?php
/**
 * Enqueue Assets 
 * @package GutSliderBlocks
 */
 
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

 if( ! class_exists( 'GutSlider_Assets' ) ) {

    class GutSlider_Assets {
        
        /**
         * Constructor
         * return void 
         */
        public function __construct() {
            add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_editor_assets' ], 1 );
            add_action( 'enqueue_block_assets', [ $this, 'enqueue_assets' ] );
        }

        /**
         * Enqueue Block Assets [ Editor Only ]
         * return void
         */
        public function enqueue_editor_assets(){
            if( file_exists( trailingslashit( GUTSLIDER_DIR_PATH ) . './build/global/global.asset.php' ) ){
                $dependency_file = include_once trailingslashit( GUTSLIDER_DIR_PATH ) . './build/global/global.asset.php';
            }
    
            if( is_array( $dependency_file ) && ! empty( $dependency_file ) ) {
                wp_enqueue_script(
                    'gutslider-blocks-global-script',
                    trailingslashit( GUTSLIDER_URL ) . './build/global/global.js',
                    isset( $dependency_file['dependencies'] ) ? $dependency_file['dependencies'] : [],
                    isset( $dependency_file['version'] ) ? $dependency_file['version'] : GUTSLIDER_VERSION,
                    true
                );
            }
    
            wp_enqueue_style(
                'gutslider-blocks-global-style',
                trailingslashit( GUTSLIDER_URL ) . './build/global/global.css',
                [],
                GUTSLIDER_VERSION
            );

            // modules
            if( file_exists( trailingslashit( GUTSLIDER_DIR_PATH ) . './build/modules/modules.asset.php' ) ) {
                $modules_dependency_file = include_once trailingslashit( GUTSLIDER_DIR_PATH ) . './build/modules/modules.asset.php';
            }

            if( is_array( $modules_dependency_file ) && ! empty( $modules_dependency_file ) ) {
                wp_enqueue_script(
                    'gutslider-blocks-modules-script',
                    trailingslashit( GUTSLIDER_URL ) . './build/modules/modules.js',
                    isset( $modules_dependency_file['dependencies'] ) ? $modules_dependency_file['dependencies'] : [],
                    isset( $modules_dependency_file['version'] ) ? $modules_dependency_file['version'] : GUTSLIDER_VERSION,
                    false
                );
            }
        }

        /**
         * Enqueue Block Assets [ Editor + Frontend ]
         * return void 
         */
        public function enqueue_assets() {

            if( is_admin() ) {
                // swiper style
                wp_enqueue_style(
                    'swiper-style',
                    trailingslashit( GUTSLIDER_URL ) . 'assets/css/swiper-bundle.min.css',
                    [],
                    GUTSLIDER_VERSION
                );

                // swiper script
                wp_enqueue_script(
                    'swiper-script',
                    trailingslashit( GUTSLIDER_URL ) . 'assets/js/swiper-bundle.min.js',
                    [],
                    GUTSLIDER_VERSION,
                    true
                );
            }

            // enqueue frontend scripts 
            $swiper_scripts = get_option( 'swiper_scripts', true );
            if( ! is_admin() && $swiper_scripts && ( has_block( 'gutsliders/content-slider' ) || has_block( 'gutsliders/any-content' ) || has_block( 'gutsliders/testimonial-slider'  ) || has_block( 'gutsliders/post-slider' ) || has_block( 'gutsliders/photo-carousel' ) || has_block( 'gutsliders/logo-carousel' ) )) {
                // swiper style
                wp_enqueue_style(
                    'swiper-style',
                    trailingslashit( GUTSLIDER_URL ) . 'assets/css/swiper-bundle.min.css',
                    [],
                    GUTSLIDER_VERSION
                );

                // swiper script
                wp_enqueue_script(
                    'swiper-script',
                    trailingslashit( GUTSLIDER_URL ) . 'assets/js/swiper-bundle.min.js',
                    [],
                    GUTSLIDER_VERSION,
                    true
                );
            }
            if( ! is_admin() && ( has_block( 'gutsliders/photo-carousel' ) )) {
                // lightbox 
                wp_enqueue_script(
                    'gutslider-fslightbox',
                    trailingslashit( GUTSLIDER_URL ) . 'assets/js/fslightbox.js',
                    [],
                    GUTSLIDER_VERSION,
                    true
                );
            }
        }

    }

 }

    new GutSlider_Assets();    // Initialize the class