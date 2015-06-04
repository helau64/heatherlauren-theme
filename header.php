<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package heatherlauren-theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr/modernizr.js"></script>
<script src="//use.typekit.net/kvf8llm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<!-- <header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
	-->
	<div class="navbar">
			<ul>
				<li><a id="navbar-click">ME &#9662</a>
					<ul id="navbar-dropdown">
						<li><a href="index.php?page_id=4">HOME</a></li>
						<li><a href="index.php?page_id=4/#about">ABOUT</a></li>
						<li id="navbar-portfolio"><a href="index.php?page_id=4/#contact">CONTACT</a></li>
					</ul>
				</li>
				<li><a href="index.php?page_id=68">BLOG</a></li>
				<li><a href="index.php?page_id=10">PORTFOLIO</a></li>
			</ul>
	</div>

	<!--
		</nav><!-- #site-navigation -->
	<!--
	</header><!-- #masthead -->

	<div id="content" class="site-content">
