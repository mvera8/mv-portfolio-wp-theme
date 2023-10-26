<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// https://www.opendoorscareers.com/post-a-job
// https://github.blog/changelog/2023-06-13-github-actions-all-actions-will-run-on-node16-instead-of-node12-by-default/

$criticals = array(
	'navbar',
);
set_query_var( 'portfolio_critical', $criticals );

$site_name = get_bloginfo( 'name' );

get_header();
the_component( 'navbar', ['brand' => $site_name] );
?>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<?php the_post_thumbnail('', array('class' => 'img-fluid mb-5')); ?>
			</div>
			<div class="col-12 col-md-8">
				<?php
				the_title( '<h1 class="mb-5 h2 text-center">', '</h1>' );
				the_content();
				// the tags with class pill-label
				$tags = get_the_tags();

				if ( $tags ) {
					?>
					<hr />
					<div class="lala">
						<?php
						foreach ( $tags as $tag ) {
							?>
							<a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="text-gradient-purple-coral pill-label"><?php echo $tag->name; ?></a>
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();