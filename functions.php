
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LIMPLUS_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/*
 * Theme Includes
 */
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/menus.php';
require_once get_template_directory() . '/inc/helpers.php';