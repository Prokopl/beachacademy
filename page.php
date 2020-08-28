<?php get_header(); ?>

	<div id="page" class="main-section">
		
		<br>
		<span class="title page-title"><?php the_title(); ?></span>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php
					$visibility = get_field('zneviditelneni');
					if ($visibility && in_array('aktivace', $visibility)) :
				?>
				
				<p><?php the_field('zneviditelneni_text'); ?></p>
				
				<?php else : ?>

				<?php the_content(); ?>
				
				<?php endif;  ?>


					<?php 
						$args = array(
							'post_type'      => 'page',
							'posts_per_page' => -1,
							'post_parent'    => $post->ID,
							'order'          => 'ASC',
							'orderby'        => 'menu_order'
						);
    
    					$parent = new WP_Query( $args );
    
						if ( $parent->have_posts() ) : ?>
						
							<?php if ( $post->post_name == "turnaje" ) : ?>

								<div id="tournaments">

									<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

										<div class="card" style="width: 46%; float: left; margin-left: 2%; margin-right: 2%;">
											<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title"><?php the_title(); ?></h5>
												<div class="card-text"><?php the_content(); ?></div>
											</div>
										</div>

									<?php endwhile; ?>

								</div>
							
							<?php else : ?>
						
								<div class="accordion" id="myAccordion">

									<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

									<div class="card" style="background-color: transparent">
										<div class="card-header bg-dark" id="heading<?php the_ID(); ?>" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>">
											<h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button">
													<?php the_title(); ?>
												</button>
											</h2>
										</div>
										<div id="collapse<?php the_ID(); ?>" class="collapse" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#myAccordion">
											<div class="card-body">

												<?php
												$visibility = get_field('zneviditelneni');
												if ($visibility && in_array('aktivace', $visibility)) :
												?>

												<p><?php the_field('zneviditelneni_text'); ?></p>

												<?php else : ?>

												<?php the_content(); ?>

												<?php endif;  ?>

											</div>
										</div>
									</div>

									<?php endwhile; ?>

								</div>

								<?php endif;  ?>
    
    					<?php endif; wp_reset_postdata(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</div>

	<!-- <div id="partners" class="main-section">
		<span class="title">PARTNEŘI</span>
		<div class="row">
			<?php echo do_shortcode('[sponsors image_size=full]'); ?>
		</div>
	</div> -->

	<!-- Filter: https://css-tricks.com/gooey-effect/ -->
	<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
		<defs>
			<filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
				<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
			</filter>
		</defs>
	</svg>

<?php get_footer(); ?>
