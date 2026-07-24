<?php
/**
 * Register navigation menus.
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme menus.
 */
function limplus_register_menus() {

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'limplus' ),
			'footer'  => __( 'Footer Menu', 'limplus' ),
		)
	);

}

add_action(
	'after_setup_theme',
	'limplus_register_menus'
);