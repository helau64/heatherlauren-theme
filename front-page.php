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

	<div id="splash">
		<h1>HI</h1>
		<h1>I'M HEATHER</h1>
	</div>
	<div id="about">
		<h2>ABOUT</h2>
		<div id="about-designer">
			<h3>DESIGNER</h3>
		</div>
		<div id="about-developer">
			<h3>DEVELOPER</h3>
		</div>
		<div id="about-activist">
			<h3>ACTIVIST</h3>
			<p>Currently focused on combating toxic, masculinist and inaccesible activism.</p>
		</div>
	</div>
	
	<div id="contact">
		<h2>CONTACT</h2>
		<p>
			Want to get in touch? You can most often find me on <a href="http://twitter.com/HeatherLauren">Twitter</a>, but 
			I'm also on <a href="https://github.com/heatherlauren">GitHub</a>. Or, if it's important, you should probably
			<a href="mailto:hello@heatherlauren.me">send me an email</a>.
		</p>
	</div>


<?php get_footer(); ?>