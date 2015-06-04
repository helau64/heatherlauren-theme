<?php
/**
 * The template for displaying all single posts.
 *
 * @package heatherlauren-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-post" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<p class="tags"><?php the_tags( 'Related: ', '' ); ?></p>

			

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
