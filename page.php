<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// https://www.opendoorscareers.com/post-a-job


get_header();
get_template_part( 'components/navbar' );
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