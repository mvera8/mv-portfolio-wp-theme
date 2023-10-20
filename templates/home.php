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

$site_name = get_bloginfo( 'name' );
$servicios = array(
	array(
		'title' => 'Dynamic sites',
		'text'  => 'WordPress-based websites with versatile features and content management.',
		'icon'  => 'code',
	),
	array(
		'title' => 'Performance sites',
		'text'  => 'Speedy Next.js websites, less dynamic compared to WordPress.',
		'icon'  => 'gauge-simple-high',
	),
	array(
		'title' => 'Graphic Design',
		'text'  => 'Creating logos and branding to enhance your business identity.',
		'icon'  => 'paintbrush',
	),
	array(
		'title' => 'QA Automation',
		'text'  => 'Streamlining testing with Cypress, an end-to-end testing solution.',
		'icon'  => 'list-check',
	),
);

$preguntas = array(
	array(
		'title' => 'Qué hacemos?',
		'text'  => 'We provide digital experience services to startups and small businesses. We help our clients succeed by creating brand identities, digital experiences. Praesent vel nibh a tellus dictum gravida sed tempor nunc.',
	),
	array(
		'title' => '¿Como es el Proceso?',
		'text'  => 'Una vez entregado el proyecto se da por cerrado...',
	),
);

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
		<div class="text-center">
			<h5>Recent Work</h5>
			<h2>Buying a home doesnt have to be a mystery.</h2>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="card bg-dark ">
					<?php get_image( '4aa6c2bb1ce8297cb649afcd4a532e34.jpg', 'card-img', 'Card title' ); ?>
					<div class="card-img-overlay">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text">Last updated 3 mins ago</p>
					</div>
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
			<div class="col-12 col-md-8 text-center">
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
			<div class="row">
				<div class="col-md-3">
					<h2>My Blog</h2>
				</div>
				<?php
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<div class="col-3">
						<a href="<?php the_permalink(); ?>" class="lala">
							<?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
						</a>
						<a href="<?php the_permalink(); ?>" class="text-decoration-none">
							<h4 class="my-4"><?php the_title() ?></h2>
						</a>
						<p class="text-gray-100"><?php the_excerpt() ?></p>
					</div>
				<?php 
				}
				?>
			</div>
		</div>
	</section>
	<?php
}
wp_reset_postdata();

get_footer();