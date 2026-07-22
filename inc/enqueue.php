<?php
/**
 * Load scripts and styles.
 *
 * @package ALS_Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function als_enqueue_assets() {

	wp_enqueue_style(
		'als-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'als-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		ALS_THEME_VERSION
	);

	wp_enqueue_style(
		'als-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'als-main' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'als-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

}

add_action(
	'wp_enqueue_scripts',
	'als_enqueue_assets'
);