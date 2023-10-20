<?php
/**
 * Component: Content Middle
 *
 * @package portfolio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$title = $args['title'] ?? '';
$text  = $args['text'] ?? '';

echo sprintf(
	'<div class="row justify-content-center text-center">
		<div class="col-12 col-md-7">
			<h2 class="px-5 mb-4">%s</h2>
			<p class="mb-5 text-gray-200">%s</p>
		</div>
	</div>',
	esc_html( $title ),
	esc_html( $text ),
);