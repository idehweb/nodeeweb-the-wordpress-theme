<?php
/**
 * Registers block pattern categories.
 *
 * @version 0.0.1
 *

 */
function nodeeweb_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'nodeeweb' ) ),
		'pages'   => array( 'label' => __( 'Pages', 'nodeeweb' ) ),
		'query'    => array( 'label' => __( 'Query', 'nodeeweb' ) ),
		'nodeeweb' => array( 'label' => __( 'Nodeeweb', 'nodeeweb' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @version 0.0.1
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'nodeeweb_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'nodeeweb_register_block_pattern_categories', 9 );
