<?php
/**
 * Get component as template part
 *
 * @package petbook
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_image( $name, $class = null, $alt = null, $size = null ) {
	if ( ! empty( $name ) ) {
		echo sprintf(
			'<img src="%s" class="%s" alt="%s" width="%s">',
			get_stylesheet_directory_uri() . '/source/images/' . $name,
			$class,
			$alt,
			$size,
		);
	}
}
