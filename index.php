<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">Services</div>
				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-3">Sidebar</aside>
						<div class="news col-md-9">
							<?php 

							// If there are any posts
							if( have_posts() ):
								// While have posts, show them to us
								while( have_posts() ): the_post();

								// Require the file which is at template-parts/content.php
								get_template_part( 'template-parts/content', get_post_format() );

							 	endwhile;
							 else: 
							  ?>

							  <p>There's nothing yet to be displayed!</p>

							<?php endif; ?>

						</div>							
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Map</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>