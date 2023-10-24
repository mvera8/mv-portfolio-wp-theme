<?php
/**
 * 404 Page
 *
 * @package infinity
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$criticals = array(
	'navbar',
	'404',
);
set_query_var( 'portfolio_critical', $criticals );

$site_name = get_bloginfo( 'name' );

get_header();
get_component( 'navbar', ['brand' => $site_name] );
get_component( '404', ['text' => 'The page you were looking for appears to have been moved, deleted or does not exist.'] );
get_footer();
