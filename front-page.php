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
		<main id="main" class="site-main main-page" role="main">
			<div class="main-page__gen--intro">
					<h3>Hi</h3>
				</div>
				<img class="main-page__gen--img" src="wp-content/themes/heatherlauren-theme/imgs/owl--circle.svg" alt="">
				<div class="main-page__gen--intro">
					<h3>I'm Heather</h3>
				</div>
				<div class="main-page__interest sameHeights">
					<div data-key="sameHeights" class="main-page__interest--day">
						<h4>By day</h4>
						<i class="wp-svg-sun-3 custom-icon icon-class main-icon-interest"></i>
						<h4>I'm an Ancient History undergrad</h4>
					</div><!-- No Spaces
					--><div data-key="sameHeights" class="main-page__interest--night column">
						<h4>But by night</h4>
						<i class="wp-svg-moon-2 custom-icon icon-class main-icon-moon"></i>
						<h4>I'm a web design and development nerd</h4>
					</div>
				</div>
				<script type="text/javascript">
					if ('addEventListener' in window) {
					    window.addEventListener('resize', function(){
					        sameHeights();
					    });
					    window.addEventListener('load', function(){
					        sameHeights();
					    });
					}
				</script>
				<div class="main-page__interest--intro">
					<h4>I'm interested in:</h4>
				</div>
				<div class="main-page__interest--detail">
					<ul>
						<li class="main-page__interest--ah">Greek pottery</li>
						<li class="main-page__interest--d">Responsive design</li>
						<li class="main-page__interest--ah">Ancient perceptions of gender and sexuality</li>
						<li class="main-page__interest--d">Typography</li>
						<li class="main-page__interest--ah">The Achaemenid Empire</li>
						<li class="main-page__interest--d">Accessibility</li>
					</ul>
				</div>
				<div class="main-page__info--intro">
					<h4>What else?</h4>
				</div>
				
				<div class="main-page__info--live">
					<img src="wp-content/themes/heatherlauren-theme/imgs/edinburgh.svg" alt="">
					<h4>I live in Edinburgh<h4>
				</div>
				<div class="main-page__info--cats">
					<h4>With three cats</h4>
					<div class="main-page__info--cat"> 
						<img src="wp-content/themes/heatherlauren-theme/imgs/frida.svg" alt="">
						<h5>Frida</h5>
						<h6>(Cat)</h6>
					</div>
					<div class="main-page__info--cat">
						<img src="wp-content/themes/heatherlauren-theme/imgs/girlfriend.svg" alt="">
						<h5>Cat</h5>
						<h6>(Girlfriend)</h6>
					</div>
					<div class="main-page__info--cat">
						<img src="wp-content/themes/heatherlauren-theme/imgs/amelia.svg" alt="">
						<h5>Amelia</h5>
						<h6>(Also a Cat)</h6>
					</div>
				</div>
				<div class="main-page__info--conclusion">
					<h4>
						<script type="text/javascript" src="wp-content/themes/heatherlauren-theme/js/references.js"></script>
						<noscript>And you have Javascript disabled</noscript>
					</h4>
				</div>
				<div class="main-page__nav--intro">
					<h4>Why not check out:</h4>
				</div>
				<div class="main-page__nav--list">
					<ul>
						<div class="main-page__nav--item">
						<i class="wp-svg-pencil-2 custom-icon icon-class main-icon"></i>
							<li><a href="index.php?page_id=68">My blog</a></li>
						</div>
						<div class="main-page__nav--item">
							<i class="wp-svg-droplet custom-icon icon-class main-icon"></i>
							<li><a href="index.php?page_id=10">My portfolio</a></li>

						</div>
					</ul>
				</div>
				<div class="main-page__nav--contact">
					<i class="wp-svg-bubble custom-icon icon-class main-icon"></i>
					<p><a href="index.php?page_id=17">Or say hey</a></p>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>