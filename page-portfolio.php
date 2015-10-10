<?php
/**
 * The template for displaying Portfolio pages.
 *
 *
 * @package heatherlauren-theme
 */

get_header(); ?>
<div id="portfolio">

	<div id="primary" class="content-area">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>