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

		<div id="about" class="main-page-section">
			<h2 style="text-transform:uppercase;">About</h2>
			<div class="about-section">
				<h3 style="text-transform:uppercase;">Designer</h3>
				<p>
					Whether I’m creating work for print or the web, I work primarily as a digital artist.
					While I use modern software and techniques, I find the most inspiration in the past,
					from archaic Greek pottery to twentieth century propaganda art. 
				</p>
			</div>
			<div class="about-section">
				<h3 style="text-transform:uppercase;">Developer</h3>
				<p>
					Specialising in front-end development, I'm probably best described as an
					'over-enthusiastic amateur'. I’m most experienced with HTML, Sass and 
					Wordpress development, but I’m constantly learning something new. I always 
					work with two main principles in mind: beauty and accessibility. 
					I strongly believe that any project can look fantastic <em>and</em> provide a 
					great experience for all users.
				</p>
			</div>
			<div class="about-section">
				<h3 style="text-transform:uppercase;">Writer</h3>
				<p>
					I love to write about what I find interesting - which is everything from 
					game design to vegetarian and vegan cooking. I’ve written for a number of 
					feminist and student publications over the years, but you can mostly find my 
					work on my <a href="index.php?page_id=68">blog</a>.
				</p>
			</div>
			<div class="about-section">
				<h3 style="text-transform:uppercase;">Activist</h3>
				<p>
					I’m a fierce and committed activist who works online and in Edinburgh,
					primarily on combating the criminalisation and stigma of sex workers,
					queer (particularly trans) rights and opposing oppressive and exclusionary
					activism. However, I’m especially passionate about dismantling the white,
					straight, cis and male hegemony that dominates the tech world, an aim that
					much of my work - in all fields - is centred on.
				</p>
			</div>


			<div class="about-info">
				<p>
					I live in a perpetually messy flat in Edinburgh with my girlfriend and our two cats,
					where you'll usually find me trying to avoid working for my Ancient History degree.
				</p>
				<p>
					(I also like tea, indie comics and classic funk and soul)
				</p>
			</div>
		</div>

		<div id="contact" class="main-page-section">
			<h2 style="text-transform:uppercase;">Contact</h2>
			<p>
				Want to get in touch? You can most often find me on <a href="http://twitter.com/HeatherLauren">Twitter</a>, but 
				I'm also on <a href="https://github.com/heatherlauren">GitHub</a>. Or, if it's important, you should probably
				<a href="mailto:hello@heatherlauren.me">send me an email</a>.
			</p>
			<?php get_footer(); ?>
		</div>

