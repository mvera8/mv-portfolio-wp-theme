<?php
/**
 * Template Name: Contact Page
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'components/navbar' );
?>


<section class="py-5 bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 text-center">
				<h6 class="mb-0"><span class="badge bg-light text-secondary">Contact Page</span></h6>
				<h1 class="mb-5 display-1">Get in touch with me for more information</h1>
				<p class="lead">If you need help or have question, were here for you</p>
				<p class="lala">form empezando en bg light</p>
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

<?php
get_footer();
