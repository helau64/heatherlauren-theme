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
		<div id="splash" class="main-page-section">
			<div id="splash-text">
				<h1 style="text-transform:uppercase;">Hi</h1>
				<hr aria-hidden="true">
				<h1 class="animated fadeInUp" style="text-transform:uppercase;">I'm Heather</h1>
			</div>
		</div>

		<div id="about-info" class="main-page-section main-page-text-wrap">
			<h2 style="text-transform:uppercase;">About</h2>
			<p>
				I'm a rookie designer and front-end developer with a love for Sass, Python and beautiful typography. I build websites, design for web and print, and write 
				and speak on the intersections between tech, design and radical activism.
			</p>
			<p>
				I live in a perpetually messy flat in Edinburgh with my girlfriend and our two cats,
				where you'll usually find me trying to avoid working for my Ancient History degree.
			</p>
			<p>
				I also like tea, indie comics and classic funk and soul.
			</p>
		</div>

		<div id="contact" class="main-page-section main-page-text-wrap ">
			<h2 style="text-transform:uppercase;">Contact</h2>
			<p>
				I'm currently available to:
			</p>
			<ul>
				<li>Write for your publication</li>
				<li>Speak at your event</li>
				<li>Design for print and web</li>
			</ul>
			<p>
				I'm particularly interested in working with:
			</p>
			<ul>
				<li>Sex workers' rights organisations</li>
				<li>Local activists</li>
				<li>Diversity focused tech education groups</li>
			</ul>

			<h3>Want to get in touch?</h3>
			
			<div id="social-media-icons">
				<a href="http://www.twitter.com/heatherlauren"><img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/twitter-icon.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/imgs/twitter-icon-png.png'; this.onerror=null;"></a>

				<a href="http://www.github.com/heatherlauren"><img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/github-icon.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/imgs/github-icon-png.png'; this.onerror=null;"></a>

				<a href="mailto:hello@heatherlauren.me"><img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/email-icon.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/imgs/email-icon-png.png'; this.onerror=null;"></a>
			</div>

			<?php get_footer(); ?>
		</div>

