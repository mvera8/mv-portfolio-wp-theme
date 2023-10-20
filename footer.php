
	<footer class="py-3 bg-light border-top">
		<div class="container">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'footer-nav',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'fallback_cb'     => '',
					'menu_id'         => 'footer-menu',
					'depth'           => 1,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<ul class="list-inline social-icons">
					<li class="list-inline-item">Sigueme en</li>
					<?php
					$my_theme_option = get_option('my_theme_option');
					foreach( $my_theme_option as $item => $value ) :
						if ( ! empty( $value ) && $item !== 'Contact Form 7 Shortcode' ) {
							echo sprintf(
								'<li class="list-inline-item"><a href="%1$s" target="_blank" class="%2$s"><i class="fa fa-%2$s"></i></a></li>',
								$value,
								strtolower( $item ),
						);
						}
					endforeach;
					?>
				</ul>
		</div>
	</footer>
	
	<?php wp_footer(); ?>



</body>
</html>