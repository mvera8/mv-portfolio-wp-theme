<?php
/**
 * Template Name: Home Page
 *
 * @package supercampeones
 */

// https://appline-tailwind.preview.uideck.com/#features

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$criticals = array(
	'navbar',
	'hero',
);
set_query_var( 'portfolio_critical', $criticals );

require 'home-controller.php';

get_header();
get_component( 'navbar', ['brand' => $site_name] );
get_component( 'hero', ['services' => $servicios] );
?>

<section class="py-5">
	<div class="container">
		<?php
		get_component(
			'content-middle',
			[
				'title' => 'Amazing features for to make your work easier',
				'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.',
			]
		);
		?>
	</div>
</section>

<section class="py-5 bg-half position-relative my-5">
	<div class="container">
		<div class="row align-items-center justify-content-center">

			<div class="col-12 col-md-4">
				<div style="height:400px;background-color:red;"></div>
			</div>
			
			<div class="col-12 col-md-5">
				<span class="text-primary">Track Audience Activities</span>
				<h2 class="mb-5">Track Your Audience Activities</h2>
				<p class="mb-5">Schedule your posts for times when your audience is most active. Choose from our best-time predictions, or create your own publishing schedule.</p>
				<a href="#" class="btn btn-primary btn-lg">Know More</a>
			</div>

		</div>
	</div>
</section>

<section class="py-5 bg-half position-relative my-5">
	<div class="container">
		<div class="row align-items-center justify-content-center">

			<div class="col-12 col-md-5">
				<span class="text-primary">Create Audience Reports</span>
				<h2 class="mb-5">Know More About Your Audience</h2>
				<p class="mb-5">Schedule your posts for times when your audience is most active. Choose from our best-time predictions, or create your own publishing schedule.</p>
				<a href="#" class="btn btn-primary btn-lg">Know More</a>
			</div>

			<div class="col-12 col-md-4">
				<div style="height:400px;background-color:red;"></div>
			</div>
			
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<?php
		get_component(
			'content-middle',
			[
				'title' => 'How it Works?',
				'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.',
			]
		);
		?>

		<div class="card bg-white">
			<div class="card-body">
				<h5 class="card-title mb-3 text-dark">%s</h5>
				<h6 class="card-subtitle text-gray-100">%s</h6>
			</div>
		</div>

	</div>
</section>

<section class="py-5">
	<div class="container">
		<?php
		get_component(
			'content-middle',
			[
				'title' => 'Recent Work',
				'text'  => 'Buying a home doesnt have to be a mystery.',
			]
		);
		?>

		<div class="row">
			<div class="col-4">
				<div class="card">
					<?php get_image( '4aa6c2bb1ce8297cb649afcd4a532e34.jpg', 'card-img', 'Card title' ); ?>
				
				</div>
			</div>
			<div class="col-4">
				<div style="height:300px;background-color:red;"></div>
			</div>
			<div class="col-4">
				<div style="height:300px;background-color:red;"></div>
			</div>
		</div>
	</div>
</section>

<section class="py-5 bg-gray-100">
	<div class="container">
		<?php
		get_component(
			'content-middle',
			[
				'title' => 'Frequently Asked Questions',
				'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.',
			]
		);
		?>

		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php get_component( 'accordion' ); ?>
			</div>
		</div>

	</div>
</section>


<?php 
$args = array (
	'post_type'      => 'post',
	'posts_per_page' => '3',
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="py-5">
		<div class="container">
			<?php
			get_component(
				'content-middle',
				[
					'title' => 'Recent Work',
					'text'  => 'Buying a home doesnt have to be a mystery.',
				]
			);
			?>
			<div class="row">
				<?php
				while ( $query->have_posts() ) {
					$query->the_post();
					get_component( 'blog-card' );
				}
				?>
			</div>
		</div>
	</section>
	<?php
}
wp_reset_postdata();

get_footer();