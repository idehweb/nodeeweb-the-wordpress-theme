<?php
/**
 * Register block styles.
 * @version 0.0.1
 */
function nodeeweb_register_block_styles() {
	register_block_style(
		'core/separator',
		array(
			'name'         => 'narrow-line',
			'label'        => __( 'Narrow Line', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'double-line',
			'label'        => __( 'Double Line', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'double-line-inverted',
			'label'        => __( 'Double Line (inverted)', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'line-left',
			'label'        => __( 'Line (left)', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'line-right',
			'label'        => __( 'Line (right)', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'star-line',
			'label'        => __( 'Star Line', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'cutout-circle-up',
			'label'        => __( 'Cutout circle (up)', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'cutout-circle-down',
			'label'        => __( 'Cutout circle (down)', 'nodeeweb' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'diamond',
			'label'        => __( 'Diamond', 'nodeeweb' ),
		)
	);
}

add_action( 'init', 'nodeeweb_register_block_styles' );
