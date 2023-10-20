<?php
/**
 * Component: Home Card
 *
 * @package portfolio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$title = $args['title'] ?? '';
$text  = $args['text'] ?? '';
$icon  = $args['icon'] ?? '';

echo sprintf(
	'<div class="col-3 mt-n1">
		<div class="card border-0 bg-transparent">
			<div class="row g-0">
				<div class="col-md-2">%s</div>
				<div class="col-md-10">
					<div class="card-body py-0">
						<h5 class="card-title mb-3 text-dark">%s</h5>
						<h6 class="card-subtitle text-gray-200">%s</h6>
					</div>
				</div>
			</div>
		</div>
	</div>',
	empty( $icon ) ? '' : '<div class="p-4 text-center border border-gray-200 rounded-circle"><i class="fa-solid fa-' . esc_html( $icon ) . '"></i></div>',
	esc_html( $title ),
	esc_html( $text ),
);
