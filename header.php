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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63855327-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr/modernizr.js"></script>
<script src="//use.typekit.net/kvf8llm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<!-- <header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
	-->
	<div class="navbar">
			<ul>
				<li><a class="navbar-click" style="text-transform:uppercase;">Me &#9662</a>
					<ul class="navbar-dropdown">
						<li><a href="index.php?page_id=4" style="text-transform:uppercase;">Home</a></li>
						<li><a href="index.php?page_id=4/#about-info" style="text-transform:uppercase;">About</a></li>
						<li class="navbar-contact"><a href="index.php?page_id=4/#contact" style="text-transform:uppercase;">Contact</a></li>
					</ul>
				</li>
				<li><a href="index.php?page_id=68" style="text-transform:uppercase;">Blog</a></li>
				<li><a class="navbar-click-portfolio" style="text-transform:uppercase;">Work &#9662</a>
					<ul class="navbar-dropdown-portfolio">
						<li><a href="index.php?page_id=820" style="text-transform:uppercase;">Sketchbook</a></li>
						<li><a href="index.php?page_id=10" style="text-transform:uppercase;">Portfolio</a></li>
					</ul>
				</li>
			</ul>
	</div>

	<!--
		</nav><!- - #site-navigation -->
	<!--
	</header><!- - #masthead -->

	<div id="content" class="site-content">
