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
			<h1>HI</h1>
			<hr>
			<h1 class="animated fadeInUp">I'M HEATHER</h1>
		</div>

		<div id="about" class="main-page-section">
			<h2>ABOUT</h2>
			<div class="about-section">
				<h3>DESIGNER</h3>
				<p>I will fight you IRL over typography.</p>
			</div>
			<div class="about-section">
				<h3>DEVELOPER</h3>
				<p>Specialising in front-end development, I'm probably best described as an 'over-enthusiastic amateur'. I throw myself into every new project
				with all the energy and misguided optimism of a dog chasing a ball into the sea. I believe that the web can be beautiful without sacrificing functionality
				or accessibility, and that it should be open to everybody.
				</p>

				<p>
					However, technology will always remain a mysterious force for most - a fact I embrace - 
				and I work within the technology as magic movement to create great experiences and encourage a shift away from masculinist, exclusionary ideals that dominate
				tech culture. I'm proud to have been involved in direct action supporting this, tutoring at coding courses for women, giving presentations on the difficulties faced by
				oppressed groups in tech and encouraging open discussion about mental health issues. 
				</p>
			</div>
			<div class="about-info">
				<p>
					I live in a perpetually messy flat in Edinburgh with two cats, my girlfriend and an incredibly gay flatmate, where
					you'll usually find me trying to avoid working for my Ancient History degree.
				</p>
				<p>
					(I also like tea, obscure GameCube games and northern soul)
				</p>
			</div>
		</div>

		<div id="contact" class="main-page-section">
			<h2>CONTACT</h2>
			<p>
				Want to get in touch? You can most often find me on <a href="http://twitter.com/HeatherLauren">Twitter</a>, but 
				I'm also on <a href="https://github.com/heatherlauren">GitHub</a>. Or, if it's important, you should probably
				<a href="mailto:hello@heatherlauren.me">send me an email</a>.
			</p>
			<?php get_footer(); ?>
		</div>

