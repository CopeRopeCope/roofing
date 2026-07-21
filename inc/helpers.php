<?php
/**
 * Helper functions
 *
 * @package ALS_Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'als_asset' ) ) {

	/**
	 * Returns asset URL.
	 *
	 * @param string $path Asset path.
	 * @return string
	 */
	function als_asset( $path ) {

		return esc_url(
			get_template_directory_uri() . '/assets/' . ltrim( $path, '/' )
		);

	}

}