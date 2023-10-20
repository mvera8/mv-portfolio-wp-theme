<?php
/**
 * Template Name: Portfolio Page
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$site_name = get_bloginfo( 'name' );

get_header();
get_component(
	'navbar',
	array(
		'brand' => $site_name,
	)
);
?>


<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 text-center">
				<h6 class="mb-0"><span class="badge bg-light text-secondary">Work</span></h6>
				<h1 class="mb-0 display-1">My portfolio</h1>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 mb-5">
				<div style="height:400px;background-color:red;"></div>
			</div>
			<div class="col-12 col-md-6 mb-5">
				<div style="height:400px;background-color:red;"></div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
