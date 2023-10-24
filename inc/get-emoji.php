<?php
/**
 * Get emoji as image
 *
 * @package petbook
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_emoji( $name, $size = null ) {
	$emoji = '/source/images/emojis/' . $name . '.svg';

	$image =  sprintf(
		'<img src="%s" class="img-fluid" alt="%s" width="%s">',
		get_stylesheet_directory_uri() . $emoji,
		$name,
		$size,
	);

	return $image;
}

function the_emoji( $name, $size = null ) {
	echo get_emoji( $name, $size );
}
