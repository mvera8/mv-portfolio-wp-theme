<?php
/**
 * Component: Hero
 *
 * @package supercampeones
 */

// https://cssbuttons.app/buttons/28

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$servicios = $args['services'] ?? array();
?>

<section id="component-hero" class="mb-5 py-5">
	<div class="container mb-5">
		<div class="row align-items-center">
			<div class="col-6">
				<div class="pe-5">
					<span class="lala">Ready to Use Tailwind CSS Web Template.</span>
					<h1 class="mb-4">Tailwind Template for <span class="text-gradient">App & Software</span> Site.</h1><!-- Web Developer / UI/UX Designer/ QA Tester -->
					<p class="lead text-gray-200">All in one Tailwind CSS site template for - App and Software sites Comes with all essential components. <?php get_emoji( 'sunglasses', 30 ); ?></p>
					<a href="#" class="btn btn-dark btn-lg me-3">
						Download Now
					</a>
					<button type="button" class="btn btn-outline-dark btn-lg text-success" data-toggle="modal" data-target="#exampleModal">
						<div class="lala">Watch Demo</div> See how it works
					</button>
				</div>
			</div>
			<div class="col-5 offset-md-1">
				<div class="position-relative">
					<!-- absolute1 -->
					<div class="card position-absolute overflow-hidden" style="top:10px;left:70%;width:180px;">
						<div class="card-body p-1">
							<div class="row justify-content-center g-0 ">
								<div class="col-md-4">
									<?php get_emoji( 'wave' ); ?>
								</div>
								<div class="col-md-8 ps-2">
										<p class="card-text text-gray-200 mb-0">hello, im</p>
										<h4 class="card-title mb-0">Martin</h4>
								</div>
							</div>
						</div>
					</div>
					<!-- absolute2 -->
					<div class="card position-absolute overflow-hidden" style="top:40%;left:-10%;width:180px;">
						<div class="card-body p-0">
							<?php get_image( 'pagespeed.png', 'img-fluid', 'pagespeed' ); ?>
						</div>
					</div>
					<div style="height:400px;background-color:red;">
					https://icons8.com/icon/set/computer/emoji
					https://dribbble.com/shots/14586924-Hero-Header-Adelfox-2
https://www.behance.net/gallery/107296295/Adelfox-2-Teaser-Shots?tracking_source=search_projects|adelfox
					https://www.behance.net/gallery/178139617/Echo-Website-Hero-Header-Builder?tracking_source=project_owner_other_projects
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pb-3">
		<div class="row">
			<?php
			foreach( $servicios as $servicio ) {
				get_template_part(
					'components/home-card',
					null,
					$servicio
				);
			}
			?>
		</div>
	</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>