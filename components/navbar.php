<?php
/**
 * Component: Navbar
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$brand = $args['brand'] ?? '';
?>

<header>
	<nav id="component-navbar" class="navbar navbar-expand-lg bg-transparent py-2 mb-5">
		<div class="container">

			<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
				<?php get_image( 'escudo.png', 'navbar-brand__image', $brand , 50 ); ?>
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary-nav',
					'container_class' => 'collapse navbar-collapse pe-5',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav mx-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'primary-nav',
					'depth'           => 3,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>

		</div>
	</nav>
</header>