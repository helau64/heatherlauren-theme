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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script src="//use.typekit.net/xfp2fui.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="//use.typekit.net/kvf8llm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'heatherlauren-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img class="header--img" src="/wp-content/themes/heatherlauren-theme/imgs/header.svg" alt="">
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
