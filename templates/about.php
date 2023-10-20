<?php
/**
 * Template Name: About Page
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$site_name = get_bloginfo( 'name' );

get_header();
get_component( 'navbar', ['brand' => $site_name] );
?>

<section class="pt-5 bg-mesh-top">
	<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8 text-center">
					<h6 class="mb-0"><span class="badge bg-light text-secondary">About Me</span></h6>
					<h1 class="mb-5 display-1">Figma to <span class="text-gradient">{WordPress}</span> quicly and easy.</h1>
				</div>
			</div>
	</div>
</section>

<section class="py-5">
	<div class="container">

		<div class="rounded mb-5" style="height:400px;background-color:red;"></div>

		<div class="row justify-content-center">
			<div class="col-12 col-md-4">
				<h2>We treat our clients like family with an unparalleled level of service.</h2>
			</div>
			<div class="col-12 col-md-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet arcu vitae mauris vehicula placerat a eu urna. Sed at imperdiet nibh. Praesent a hendrerit lorem, et varius ligula. Nulla pretium erat eu accumsan mollis. </p>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<?php
		the_content();
		?>
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

<section class="py-5">
	<div class="container">

	</div>
</section>

<?php
get_footer();
