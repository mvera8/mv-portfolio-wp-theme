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

$site_name = get_bloginfo( 'name' );

get_header();
get_component( 'navbar', ['brand' => $site_name] );
?>

<section class="pt-5 text-center border-bottom">
    <h1 class="display-4">Centered screenshot</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="https://getbootstrap.com/docs/5.0/examples/heroes/bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </section>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 text-center">
				<h2>We treat our clients like family with an unparalleled level of service.</h2>
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


<section class="py-5 bg-gray-100">
	<div class="container">

	<div class="text-center">
		<h2>We treat our clients like family with an unparalleled level of service.</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet arcu vitae mauris vehicula placerat a eu urna. Sed at imperdiet nibh. Praesent a hendrerit lorem, et varius ligula. Nulla pretium erat eu accumsan mollis. </p>

	</div>


		<div class="row">

			<div class="col-md-6">
				<?php get_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php get_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php get_component( 'card' ); ?>
			</div>

			<div class="col-md-3">
				<?php get_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php get_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php get_component( 'card' ); ?>
			</div>
			<div class="col-md-3">
				<?php get_component( 'card' ); ?>
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
