<?php
/**
 * Component: Content Right
 *
 * @package portfolio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$title  = $args['title'] ?? '';
$text   = $args['text'] ?? '';
$image  = $args['image'] ?? '';
$button = $args['button'] ?? '';
$link   = $args['link'] ?? '';
$badge  = $args['badge'] ?? '';

echo sprintf(
	'<div class="row align-items-center justify-content-center">
			%s
			
			<div class="col-12 col-md-5">
				<span class="text-primary">%s</span>
				<h2 class="mb-5">%s</h2>
				<p class="mb-5">%s</p>
				%s
			</div>
		</div>',
	$image ? '<div class="col-12 col-md-4"><img class="img-fluid rounded" loading="lazy" src="' . esc_html( $image ) . '" alt="' . esc_html( $title ) . '" /></div>' : '',
	esc_html( $badge ),
	esc_html( $title ),
	esc_html( $text ),
	( $link && $button ) ? '<a href="' . esc_html( $link ) . '" class="btn btn-primary btn-lg">' . esc_html( $button ) . '</a>' : '',
);