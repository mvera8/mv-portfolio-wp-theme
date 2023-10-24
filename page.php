<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// https://www.opendoorscareers.com/post-a-job

$criticals = array(
	'navbar',
);
set_query_var( 'portfolio_critical', $criticals );

$site_name = get_bloginfo( 'name' );

get_header();
get_component( 'navbar', ['brand' => $site_name] );
?>

<section class="py-5">
	<div class="container">
		<?php
		the_content();
		?>
	</div>
</section>

<?php
get_footer();