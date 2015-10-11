<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package heatherlauren-theme
 */

get_header(); ?>
	<h1 class="entry-title">SKETCHBOOK</h1>
	<div class="page-intro">
		<p>
			Work-in-progress, doodles and other odds-and-ends
		</p>
		<div class="button-container">
			<input type="submit" class="search-submit search-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
			<!-- <a href="index.php?page_id=560"><button class="archive-button">ARCHIVES</button></a> -->
		</div>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label id="search-bar">
				<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
		</form>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main sketchbook-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

