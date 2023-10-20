<?php
$site_name = get_bloginfo( 'name' );

get_header();
get_component(
	'navbar',
	array(
		'brand' => $site_name,
	)
);
?>

<section id="component-hero" class="pt-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-md-8">
				<h6 class="mb-0"><span class="badge bg-light text-secondary">About Me</span></h6>
				<h1 class="mb-5 display-1">Figma to <span class="text-gradient">{WordPress}</span> quicly and easy.</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel libero odio. Phasellus aliquam feugiat elit, sed mollis neque bibendum lacinia.</p>
			</div>
		</div>
	</div>
</section>

<main>
	<div class="container">

		<div class="row">
			<div class="col-12 col-md-6">
				<?php // get_template_part( 'components/card', 'news' ); ?>
			</div>
		</div>

	</div>
</main>


<?php
get_footer();
