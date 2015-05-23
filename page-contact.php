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
		<main id="main" class="site-main contact-page" role="main">
			<div class="contact-header">
				<h1>Wanna say hi?</h1>
			</div>
			<h4>You can find me at:</h4>
			<div class="contact-page__info">
				<i class="wp-svg-twitter custom-icon icon-class contact-icon"></i>
				<a href="https://twitter.com/HeatherLauren">&#064;&#104;&#101;&#097;&#116;&#104;&#101;&#114;&#108;&#097;&#117;&#114;&#101;&#110;</a>
			</div>
			<div class="contact-page__info">
				<i class="wp-svg-github-3 custom-icon icon-class contact-icon"></i>
				<a href="https://github.com/heatherlauren">&#104;&#101;&#097;&#116;&#104;&#101;&#114;&#108;&#097;&#117;&#114;&#101;&#110;</a>
			</div>
			<h4>Or send me an email:</h4>
			<div class="contact-page__info contact-page__info--email">
				<i class="wp-svg-mail-4 custom-icon icon-class contact-icon"></i>
				<a href="mailto:hello@heatherlauren.me">&#104;&#101;&#108;&#108;&#111;&#064;&#104;&#101;&#097;&#116;&#104;&#101;&#114;&#108;&#097;&#117;&#114;&#101;&#110;&#046;&#109;&#101;</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>