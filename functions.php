<?php
/**
 * heatherlauren-theme functions and definitions
 *
 * @package heatherlauren-theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'heatherlauren_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function heatherlauren_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on heatherlauren-theme, use a find and replace
	 * to change 'heatherlauren-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'heatherlauren-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add thumbnails
	add_theme_support( 'post-thumbnails' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'heatherlauren-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'heatherlauren_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // heatherlauren_theme_setup
add_action( 'after_setup_theme', 'heatherlauren_theme_setup' );

/** Custom post type **/
function portfolio_items_init() {
    $args = array(
      'label' => 'Portfolio Items',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'portfolio'),
        'query_var' => true,
        'menu_icon' => 'dashicons-images-alt',
        'taxonomies' => array('post_tag'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'portfolio-items', $args );
}
add_action( 'init', 'portfolio_items_init' );

function blog_posts_init() {
    $args = array(
      'label' => 'Blog Posts',
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'blog'),
        'query_var' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'taxonomies' => array('post_tag'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'blog-posts', $args );
}
add_action( 'init', 'blog_posts_init' );

function remove_menus(){
  
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  
}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function heatherlauren_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'heatherlauren-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'heatherlauren_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function heatherlauren_theme_scripts() {
	wp_enqueue_style( 'heatherlauren-theme-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'heatherlauren-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'heatherlauren-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'heatherlauren_theme_scripts' );

function my_scripts_method() {
	wp_enqueue_script(
		'navbar',
		get_stylesheet_directory_uri() . '/js/navbar.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'navbar-portfolio',
		get_stylesheet_directory_uri() . '/js/navbar-portfolio.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'searchbar',
		get_stylesheet_directory_uri() . '/js/searchbar.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
