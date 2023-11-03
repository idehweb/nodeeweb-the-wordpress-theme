<?php
namespace NodeewebExtender;
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
use WP_Customize_Cropped_Image_Control;
class Customizer {
    public function __construct() {
        add_action( 'customize_register', [ $this, 'register' ] );
    }
    public static function register( $wp_customize ) {
        $wp_customize->add_setting( 'override_icon',
            [
                'default'           => '',
                'sanitize_callback' => [ '\NodeewebExtender\Customizer', 'sanitize_checkbox' ],
                'transport'         => 'postMessage',
            ] );
        $wp_customize->add_control( 'override_icon',
            array(
                'label'       => __( 'Separate Icons for mobile and Windows', 'nodeeweb' ),
                'description' => __( 'By default, WordPress will use the above icon for mobile and other devices. To override this, please upload your separate photos below. Omitting a field will fall back to the default site icon.',
                    'nodeeweb' ),
                'section'     => 'title_tagline',
                'settings'    => 'override_icon',
                'type'        => 'checkbox',
                'priority'    => 100,
            ) );

        $wp_customize->add_setting( 'android_icon' );
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'android_icon', array(
            'label'       => __( 'Mobile', 'nodeeweb' ),
            'description' => __( 'Icon for mobile screens (e.g. Android).',
                'nodeeweb' ),
            'section'     => 'title_tagline',
            'flex_width'  => false,
            'flex_height' => false,
            'width'       => 192,
            'height'      => 192,
            'priority'    => 100,
            'settings'    => 'android_icon',
        ) ) );
        $wp_customize->add_setting( 'ios_icon' );
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'ios_icon', array(
            'label'       => __( 'iOS', 'nodeeweb' ),
            'description' => __( 'Icon for iOS devices.',
                'nodeeweb' ),
            'section'     => 'title_tagline',
            'flex_width'  => false,
            'flex_height' => false,
            'width'       => 180,
            'height'      => 180,
            'priority'    => 100,
            'settings'    => 'ios_icon',
        ) ) );
        $wp_customize->add_setting( 'windows_icon' );
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'windows_icon', array(
            'label'       => __( 'Windows', 'nodeeweb' ),
            'description' => __( 'Icon for Windows tiles.',
                'nodeeweb' ),
            'section'     => 'title_tagline',
            'flex_width'  => false,
            'flex_height' => false,
            'width'       => 144,
            'height'      => 144,
            'priority'    => 100,
            'settings'    => 'windows_icon',
        ) ) );
    }

    public static function sanitize_checkbox( $input ) {
        return isset( $input ) && $input === true;
    }
}