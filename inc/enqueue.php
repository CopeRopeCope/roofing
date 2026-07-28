<?php
/**
 * Load scripts and styles.
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function limplus_enqueue_assets() {

	wp_enqueue_style(
		'limplus-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'limplus-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		LIMPLUS_THEME_VERSION
	);

	wp_enqueue_style(
		'limplus-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'limplus-main' ),
		LIMPLUS_THEME_VERSION
	);

	wp_enqueue_script(
		'limplus-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		LIMPLUS_THEME_VERSION,
		true
	);

}

add_action(
	'wp_enqueue_scripts',
	'limplus_enqueue_assets'
);