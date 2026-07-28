<?php
/**
 * Helper functions
 *
 * @package LimPlus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'limplus_asset' ) ) {

	/**
	 * Returns asset URL.
	 *
	 * @param string $path Asset path.
	 * @return string
	 */
	function limplus_asset( $path = '' ) {

		return esc_url(
			get_template_directory_uri() . '/assets/' . ltrim( $path, '/' )
		);

	}

}