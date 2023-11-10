<?php 
/**
 * Admin notice 
 * 
 */
if ( ! defined( 'ABSPATH' ) )  exit; //exit if access directly

if( ! class_exists( 'GutSlider_Admin_Notice' ) ) {

    class GutSlider_Admin_Notice {

        /**
         * Constructor
         * return void
         */
        public function __construct() {
            add_action( 'admin_notices', [ $this, 'admin_notice' ] );
            add_action( 'admin_enqueue_scripts', [ $this, 'admin_scripts' ] );
            add_action( 'wp_ajax_dismiss_gutslider_admin_notice', [ $this, 'dismiss_notice' ] );
        }   

        /**
         * Admin notice
         * return void
         */
        public function admin_notice() {
            $screen = get_current_screen();
            if( $screen->id == 'plugins' ) {
                $this->plugin_notice();
            }
        }

        /**
         * Plugin notice
         * return void
         */
        public function plugin_notice() {
            $notice = get_option( 'gutslider_notice' );
            if( $notice ) return;
            ?>
            <div class="notice notice-success gutslider-notice">
                <div class="gutslider-notice-content" style="padding: 10px;">
                    <p><b><?php _e('NOTE: ', 'slider-blocks') ?></b><?php _e( 'During updating verion 1.0.0 to 2.0.0, you may face any "Attempt to Block Recover" exception. Simply click on the "Attempt Block Recovery" button to recover. But if you are using version 2.0.0 or later, you won\'s face this issue.', 'slider-blocks' ); ?></p>
                    <a href="https://youtu.be/uEuiQdj6M38" target="_blank" class="button button-primary"><?php _e( 'Watch Video', 'slider-blocks' ); ?></a>
                    <button id="gutslider_notice" class="button button-primary" style="background: #b32e2e; border-color: #b32e2e">
                        <?php _e('Close Notice', 'slider-blocks'); ?>
                    </button>
                </div>
            </div>
            <?php
        }

        /**
         * Admin scripts
         * return void
         */
        public function admin_scripts( $screen ) {
            if( $screen != 'plugins.php' ) return;
            wp_enqueue_script( 'gutslider-admin-notice', trailingslashit( GUTSLIDER_URL ) . '/admin/notice/notice.js', [ 'jquery' ], GUTSLIDER_VERSION, true );
            wp_localize_script( 'gutslider-admin-notice', 'gutslider_admin_notice', [
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'nonce'   => wp_create_nonce( 'gutslider_admin_notice_nonce' )
            ] );
        }

        /**
         * Dismiss notice
         * return void
         */
        public function dismiss_notice() {
            update_option( 'gutslider_notice', true );
            wp_die();
        }

    }

}

new GutSlider_Admin_Notice(); // Initialize the class