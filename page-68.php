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

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-page" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					<div class="page-intro">
						<p>
							Where design, activism and nerdery meet up to bitch about their exes
						</p>
						<div class="button-container">
							<input type="submit" class="search-submit search-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
							<a href="index.php?page_id=560"><button class="archive-button">ARCHIVES</button></a>
						</div>
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label id="search-bar">
								<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</label>
						</form>
					</div>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'heatherlauren-theme' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'heatherlauren-theme' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
		
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>