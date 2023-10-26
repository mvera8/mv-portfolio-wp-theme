<?php
/**
 * Get component as template part
 *
 * @package petbook
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_component( $name, $args = null ) {
	$component = locate_template( 'components/' . $name . '.php' );

	if ( ! empty( $component ) ) {
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		$style_path    = '/source/css/components/' . $name . '.css';
		$js_path       = '/source/js/components/' . $name . '.js';

		ob_start(); // Start output buffering
		get_template_part('components/' . $name, null, $args);
		$child = ob_get_clean(); // Get the output buffer contents and clean the buffer

		if ( $style_path && file_exists( get_template_directory() . $style_path ) ) {
			$style_version = $theme_version . '.' . filemtime( get_template_directory() . $style_path );
			wp_enqueue_style( $name . '-style', get_template_directory_uri() . $style_path, array(), $style_version );
		}

		if ( $js_path && file_exists( get_template_directory() . $js_path ) ) {
			$js_version = $theme_version . '.' . filemtime( get_template_directory() . $js_path );
			wp_enqueue_script( $name . '-script', get_template_directory_uri() . $js_path, array(), $js_version );
		}

		return $child;
	}
	
}

function the_component( $name, $args = null ) {
	echo get_component( $name, $args );
}
