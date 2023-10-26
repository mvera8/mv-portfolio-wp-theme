<?php
/**
 * Template Name: Services Page
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// https://www.opendoorscareers.com/post-a-job
// https://github.com/features/discussions




$criticals = array(
	'navbar',
);
set_query_var( 'portfolio_critical', $criticals );

$site_name = get_bloginfo( 'name' );
$servicios = array(
	array(
		'title' => 'WordPress <div>sites</div>',
		'text'  => 'Dinamic site for content sites.',
	),
	array(
		'title' => 'React <div>sites</div>',
		'text'  => 'Site that performance very well.',
	),
	array(
		'title' => 'Community <div>Manager</div>',
		'text'  => 'Here has to be a short description of thism course.',
	),
	array(
		'title' => 'UI/UX <div>Design</div>',
		'text'  => 'Here has to be a short description of thism course.',
	),
	array(
		'title' => 'QA <div>Automation</div>',
		'text'  => 'Here has to be a short description of thism course.',
	),
	array(
		'title' => 'Video <div>Creating</div>',
		'text'  => 'Edition & stuff.',
	),
);

get_header();
get_component( 'navbar', ['brand' => $site_name] );
?>

<section id="component-hero" class="pt-5">
	<div class="container py-5">
		<div class="bg-light-primary rounded p-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8 text-center">
					<h6 class="mb-0"><span class="badge bg-light text-secondary">About Me</span></h6>
					<h1 class="mb-5 display-1">Figma to <span class="text-gradient">{WordPress}</span> quicly and easy.</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel libero odio. Phasellus aliquam feugiat elit, sed mollis neque bibendum lacinia.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5 bg-half bg-half-right position-relative">
	<div class="container">
		<?php
		the_content();
		?>

		<div class="row">
			<?php
			foreach ( $servicios as $servicio ) {
				get_template_part( 'components/service-card', null, $servicio );
			}
			?>
		</div>
	</div>
</section>

<?php
get_footer();
