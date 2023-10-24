<?php
/**
 * Component: Card
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-4">
	<?php
	if ( has_post_thumbnail() ) {
		echo sprintf(
			'<a href="%s" class="text-decoration-none">%s</a>',
			get_the_permalink(),
			get_the_post_thumbnail( '', array('class' => 'img-fluid') ),
		);
	}

	echo sprintf(
		'<a href="%s" class="text-decoration-none">%s</a>',
		get_the_permalink(),
		the_title( '<h4 class="my-4">', '</h4>', false ),
	);

	the_excerpt();
	?>
</div>