<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$criticals = array(
	'navbar',
);
set_query_var( 'portfolio_critical', $criticals );

$site_name = get_bloginfo( 'name' );

get_header();
the_component( 'navbar', ['brand' => $site_name] );
?>

<main>
	<section class="py-5">
		<div class="container">
			<div class="row">
				<?php
				if ( have_posts()) :
					while(have_posts()) :
						the_post();
						the_component( 'blog-card' );
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
