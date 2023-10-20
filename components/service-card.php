<?php
/**
 * Component: Service Card
 *
 * @package portfolio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$title = $args['title'] ?? '';
$text  = $args['text'] ?? '';

echo sprintf(
	'<div class="col-6 col-md-3 mb-5">
		<div class="card bg-white border-0 h-100">
			<div class="card-body">
				<div class="icon mb-2 rounded bg-primary p-2">
					<i class="fa-solid fa-terminal text-secondary"></i>
				</div>
				<h5 class="card-title">%s</h5>
				<p class="card-text text-muted">%s</p>
				<div class="text-end">
					<a href="#" class="card-link"><i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>',
	$title,
	$text,
);
