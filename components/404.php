<?php
/**
 * Component: 404
 *
 * @package portfolio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$text  = $args['text'] ?? '';

echo sprintf(
	'<main>
		<section class="py-5">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-12 col-md-5">
						<h1 class="display-1 mb-5">404</h1>
						<p class="mb-5 text-gray-200">%s %s</p>
						<a href="#" class="btn btn-dark btn-lg me-3">
							Back to homepage
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>',
	esc_html( $text ),
	get_emoji( 'anxious', 30 ),
);