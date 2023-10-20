<?php
/**
 * Functions and definitions
 *
 * @package infinity
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	// '/nucleus/admin-bar.php',
	// '/nucleus/admin-dashboard.php',
	// '/nucleus/admin-glance.php',
	'/nucleus/admin-theme-settings.php', // Theme Settings
	'/nucleus/deregister.php',
	'/nucleus/enqueue.php',                      // Enqueue scripts and styles.
	'/nucleus/excerpt-length.php',
	'/nucleus/setup.php',
	'/nucleus/theme-activation.php',
	'/nucleus/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker.
	'/nucleus/get-component.php',                // Load get_component() function.
	'/nucleus/get-image.php',                    // Load get_image() function.

	'/preload.php',                          // Load Font Awesome.
	'/fontawesome.php',                          // Load Font Awesome.
	'/get-emoji.php',                          // Load Font Awesome.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
