<?php
/**
 * Register Blocks 
 * @package GutSliderBlocks
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
 
 if( ! class_exists( 'GutSlider_Register_Blocks' ) ) {

    class GutSlider_Register_Blocks {

        /**
         * Constructor
         * return void 
         */
        public function __construct() {
            add_action( 'init', [ $this, 'register_blocks' ] );
        }

        /**
         * Register Blocks
         * return void
         */
        public function register_blocks() {
            $blocks = [
                'content-slider',
                'any-content',
                'testimonial-slider',
                'post-slider',
                'photo-carousel',
                'logo-carousel',
            ];
            
            $active_blocks = [];
            
            $block_options = [
                'content-slider'     => 'gut_fixed_content_slider',
                'any-content'        => 'gut_any_content_slider',
                'testimonial-slider' => 'gut_testimonial_slider',
                'post-slider'        => 'gut_post_slider',
                'photo-carousel'     => 'gut_photo_carousel',
                'logo-carousel'     => 'gut_logo_carousel',
            ];
            
            foreach ($blocks as $block) {
                $option_name = $block_options[$block];
                $block_enabled = get_option($option_name, true);
                
                if ($block_enabled) {
                    $active_blocks[] = $block;
                }
            }

            if ( ! empty( $active_blocks ) ) {
                foreach ( $active_blocks as $block ) {
                    register_block_type( trailingslashit( GUTSLIDER_DIR ) . '/build/blocks/' . $block);
                }
            }
        }        
    }

 }

    new GutSlider_Register_Blocks();    // Initialize the class