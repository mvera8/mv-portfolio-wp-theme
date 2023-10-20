<?php
/**
 * Template Name: Privacy Page
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// https://www.opendoorscareers.com/privacy-policy

get_header();
get_template_part( 'components/page', 'title', [ 'title' => get_the_title() ] );
?>

<section class="py-5 bg-light">
	<div class="container">
		<?php
		the_content();
		?>
	</div>
</section>

<?php
get_footer();
