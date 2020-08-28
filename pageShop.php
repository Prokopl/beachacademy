<?php /* Template Name: Sablona pro eshop */ ?>

<?php get_header(); ?>

    <div id="pageshop" class="main-section-shop">

		<nav id="shoptopnavbar" class="navbar navbar-expand-lg navbar-light" style="background: white; color: white;">
			<button class="navbar-toggler mt-1 mb-1" type="button" data-toggle="collapse" data-target="#navbarShopNav" aria-controls="navbarShopNav" aria-expanded="false" aria-label="Toggle navigation" style="margin: auto;">
			<span style="font-size: 1.9rem; color: black;"><i class="fas fa-bars" style="color:black;"></i> KATEGORIE</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarShopNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/list.png">
							<div>TRÉNINKY</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/list.png">
							<div>KEMPY</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/list.png">
							<div>DRESY</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/list.png">
							<div>OBLEČENÍ</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/list.png">
							<div>DOPLŇKY</div>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div id="pageshopcontent">

			<span class="title"><?php the_title(); ?></span>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>


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
									<?php the_content(); ?>
								</div>
								</div>
							</div>

							<?php endwhile; ?>

						</div>

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

	</div>

	<nav id="shopnavbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/obchod/">Hlavní stránka <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Doprava a platba</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Všeobecné obchodní podmínky</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reklamační řád</a>
            </li>
            </ul>
        </div>
    </nav>

<?php get_footer(); ?>
