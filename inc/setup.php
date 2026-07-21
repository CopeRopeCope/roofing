<?php
/**
 * Theme setup.
 *
 * @package ALS_Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'als_theme_setup' ) ) :

	function als_theme_setup() {

		/*
		 * Translation
		 */
		load_theme_textdomain(
			'alsroofing',
			get_template_directory() . '/languages'
		);

		/*
		 * RSS
		 */
		add_theme_support( 'automatic-feed-links' );

		/*
		 * WordPress title
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Featured Images
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * HTML5
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'gallery',
				'caption',
				'comment-form',
				'comment-list',
				'style',
				'script',
			)
		);

		/*
		 * Custom Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 260,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/*
		 * Responsive Embeds
		 */
		add_theme_support( 'responsive-embeds' );

		/*
		 * Wide Alignment
		 */
		add_theme_support( 'align-wide' );

		/*
		 * Editor Styles
		 */
		add_theme_support( 'editor-styles' );

		add_editor_style( 'assets/css/editor.css' );

		/*
		 * Selective Refresh
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Menus
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'alsroofing' ),
				'footer'  => __( 'Footer Menu', 'alsroofing' ),
			)
		);

		/*
		 * Image Sizes
		 */

		add_image_size(
			'hero-image',
			1920,
			1080,
			true
		);

		add_image_size(
			'gallery-thumb',
			700,
			700,
			true
		);

		add_image_size(
			'service-image',
			900,
			600,
			true
		);

	}

endif;

add_action(
	'after_setup_theme',
	'als_theme_setup'
);
