<?php
/**
 * Deregister.
 *
 * @param int $max maximun number of test.
 *
 * @package infinity
 */

function deregister_scripts() {
	// Once in PROD.
	// wp_deregister_script('jquery');
	// wp_deregister_script('jquery-migrate');

	wp_dequeue_style( 'wp-block-library' ); // WordPress core
	wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
	wp_dequeue_style( 'wc-block-style' ); // WooCommerce
	wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}
add_action( 'wp_enqueue_scripts', 'deregister_scripts', 99 );