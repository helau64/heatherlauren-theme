<?php
/**
 * @package heatherlauren-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
		<div class="entry-meta">
			<h4>BY <a href="https://twitter.com/HeatherLauren">HEATHER LAUREN</a></h4>
			<?php $my_date = the_date('', '<h3>', '</h3>', FALSE); echo $my_date; ?>
		</div><!-- .entry-meta -->

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
		<?php heatherlauren_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
