<?php
/**
 * Component: Blog Card
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-4">
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_post_thumbnail( 'medium', array('class' => 'img-fluid w-100 mb-4 rounded') ); ?></a>
	<?php } ?>
	<a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title( '<h4 class="my-4">', '</h4>' ); ?></a>
	<?php the_excerpt(); ?>
</div>
