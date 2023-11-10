<?php
/**
 * Plugin Admin Page 
 * 
 */	

 if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 if( ! class_exists( 'GutSlider_Admin' ) ) {

    class GutSlider_Admin {

        /**
         * Constructor
         * return void
         */
        public function __construct() {
            // include admin notice
            $this->include_admin_notice();

            add_action( 'admin_menu', [ $this, 'admin_menu' ] );
            add_action( 'admin_enqueue_scripts', [ $this, 'admin_assests' ] );

            // register settings
            add_action('admin_init', [ $this, 'custom_register_settings' ]);
            add_action( 'rest_api_init', [ $this, 'custom_register_settings' ] );

            // include admin data SDk 
            add_action( 'plugins_loaded', [ $this, 'dci_plugin_gutslider' ] );
        }

        /**
         * Include admin notice
         */
        public function include_admin_notice() {
            require_once trailingslashit( GUTSLIDER_DIR ) . '/admin/notice/notice.php';
        }

        /**
         * Include data SDK 
         */
        public function dci_plugin_gutslider() {
            // Include DCI SDK.
            require_once dirname( __FILE__ ) . '/dci/start.php';
            dci_dynamic_init( array(
                'sdk_version'  => '1.0.0',
                'plugin_title' => 'GutSlider',
                'product_id'   => 3,
                'api_endpoint' => 'https://dashboard.gutenbergkits.com/wp-json/dci/v1/data-insights',
                'slug'         => 'slider-blocks',
                'public_key'   => 'pk_KxU4qcYXPyqvBDwsyyBkbCfY9Gulc1z5',
                'is_premium'   => false,
                'menu'         => array(
                    'slug' => 'gutslider-blocks',
                ),
            ) );
        }
        
        /**
         * Enqueue admin scripts
         */
        public function admin_assests( $screen ) {

            if( $screen === 'toplevel_page_gutslider-blocks' ){

                $dependencyFile = trailingslashit( GUTSLIDER_DIR ) . '/build/admin/admin.asset.php';
                $dependencies   = file_exists( $dependencyFile ) ? require_once $dependencyFile : [];
            
                wp_enqueue_style( 'gutslider-admin-style', trailingslashit( GUTSLIDER_URL ) . 'build/admin/style-admin.css', [], GUTSLIDER_VERSION );
                wp_enqueue_script( 'gutslider-admin-script', trailingslashit( GUTSLIDER_URL ) . 'build/admin/admin.js', $dependencies[ 'dependencies' ] , GUTSLIDER_VERSION, true );

                // enqueue wp-style
                wp_enqueue_style( 'wp-components' );

            }
        }
    
        /**
         * Add admin menu
         */
        public function admin_menu() {
            add_menu_page( __( 'GutSlider', 'slider-blocks' ), __( 'GutSlider', 'slider-blocks' ), 'manage_options', 'gutslider-blocks', [ $this, 'gutslider_admin_page' ], 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0IiByeD0iMTIiIGZpbGw9IiNEOUQ5RDkiLz4KPHBhdGggZD0iTTE1IDdIMTEuODIzNUg5VjE3SDE1VjEyLjQxNjdIMTIuODgyNEgxMS44MjM1IiBzdHJva2U9IiMxRDIzMjciIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+Cjwvc3ZnPgo=', 100 );
        }
    
        /**
         * Admin page
         */
        public function gutslider_admin_page() {
            ?>
                <div id="gutslider"></div>
            <?php
        }

        /**
         * Register settings
         * return void
         */
        public function custom_register_settings() {

            // assets registration 
            register_setting('rest-api-settings', 'swiper_scripts', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));

            // fixed content slider 
            register_setting('rest-api-settings', 'gut_fixed_content_slider', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));

            // any content 
            register_setting('rest-api-settings', 'gut_any_content_slider', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));

            // testimonial slider 
            register_setting('rest-api-settings', 'gut_testimonial_slider', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));

            // post slider
            register_setting('rest-api-settings', 'gut_post_slider', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));

            // photo carousel
            register_setting('rest-api-settings', 'gut_photo_carousel', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));

            // logo carousel
            register_setting('rest-api-settings', 'gut_logo_carousel', array(
                'type'              => 'boolean', 
                'default'           => true,     
                'show_in_rest'      => true,     
                'sanitize_callback' => 'rest_sanitize_boolean',
            ));
        }
    }
 }


new GutSlider_Admin(); // initialize the class