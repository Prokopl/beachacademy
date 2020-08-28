<?php get_header(); ?>

	<div id="page" class="main-section">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<br><br><span class="title"><?php the_title(); ?></span><br>

			<!-- post details -->
			<span class="date"><?php the_time('d.m.Y'); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
