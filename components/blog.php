<?php
/**
 * Component: blog
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$query = new WP_Query( $args );
?>

<div class="row">
	<?php
	while ( $query->have_posts() ) {
		$query->the_post();
		the_component( 'blog-card' );
	}
	?>
</div>

<?php
wp_reset_postdata();
