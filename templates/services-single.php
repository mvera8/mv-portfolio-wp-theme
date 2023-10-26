<?php
/**
 * Template Name: Service Item Page
 *
 * @package supercampeones
 */

// https://portfolio.adobe.com/
// https://demo.themefisher.com/godocs-bulma/
// https://getbootstrap.com/docs/5.0/examples/heroes/

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

<section class="pt-5 text-center border-bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-7">
				<h1 class="px-5 mb-4 display-2">Figma to <div class="text-gradient">{WordPress}</div> quicly and easy.</h1>
				<p class="mb-5 text-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel libero odio. Phasellus aliquam feugiat elit, sed mollis neque bibendum lacinia.</p>
				<button type="button" class="btn btn-primary btn-lg">Primary button</button>
			</div>
		</div>
	</div>
	<div class="overflow-hidden pt-5" style="max-height: 30vh;">
		<div class="container px-5">
			<img src="https://getbootstrap.com/docs/5.0/examples/heroes/bootstrap-docs.png" class="img-fluid rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500">
		</div>
	</div>
</section>

<?php
the_section(
    'white',
		[
			get_component(
				'content-middle',
				[
					'title' => 'Dedicated space for conversations',
					'text'  => 'Decrease the burden of managing active work in issues and pull requests by providing a separate space to host ongoing discussions, questions, and ideas.',
				]
			)
		]
);

the_section(
    'white',
		[
			get_component(
				'content-right',
				[
					'image' => 'https://placehold.co/600x400',
					'text'  => 'Decrease the burden of managing active work in issues and pull requests by providing a separate space to host ongoing discussions, questions, and ideas.',
				]
			)
		]
);

the_section(
    'white',
		[
			get_component(
				'content-right',
				[
					'image' => 'https://placehold.co/600x400',
					'text'  => 'Decrease the burden of managing active work in issues and pull requests by providing a separate space to host ongoing discussions, questions, and ideas.',
				]
			)
		]
);

the_section(
    'gray-100',
		[
			get_component(
				'content-middle',
				[
					'title' => 'We treat our clients like family with an unparalleled level of service.',
					'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet arcu vitae mauris vehicula placerat a eu urna. Sed at imperdiet nibh. Praesent a hendrerit lorem, et varius ligula. Nulla pretium erat eu accumsan mollis.',
				]
				),
				get_component( 'card' )
		]
);
?>


<section class="py-5 bg-gray-100">
	<div class="container">

	<div class="text-center">
		<h2>We treat our clients like family with an unparalleled level of service.</h2>
				<p class="lead"> </p>

	</div>


		<div class="row">

			<div class="col-md-6">
				<?php the_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php the_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php the_component( 'card' ); ?>
			</div>

			<div class="col-md-3">
				<?php the_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php the_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php the_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php the_component( 'card' ); ?>
			</div>

		</div>
	</div>
</section>




<section class="py-5">
	<div class="container">
		<div class="card">
			<div class="card-body p-0 p-md-4">


				<div class="row justify-content-center">
					<div class="col-12 col-md-4">
						<p>More than 10 years of experience in web development, working with different technologies and platforms, from the front-end to the back-end, from the design to the deployment.</p>
					</div>
					<div class="col-12 col-md-8">
						<?php get_template_part( 'components/timeline' ); ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
