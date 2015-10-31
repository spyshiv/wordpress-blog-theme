<?php 
/**
* This is the heart of theme. This file has all the integration with admin, widgets, static files, translater etc etc.
* @package blogshiv 
* for more details visit these links that will help you a lot in theme development
* @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes 
*/

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since blogshiv 1.0
 */
function blogshiv_setup(){

	 /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	 load_theme_textdomain( 'blogshiv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'blogshiv' ),
		'social'  => __( 'Social Links Menu', 'blogshiv' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'blogshiv_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css') );
}
 
add_action( 'after_setup_theme', 'blogshiv_setup' );

/**
 * Register widget area.
 *
 * @since blogshiv 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function blogshiv_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'blogshiv' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'blogshiv' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blogshiv_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since blogshiv 1.0
 */
function blogshiv_scripts() {
	// Add custom fonts, used in the main stylesheet.

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'blogshiv-style', get_stylesheet_uri() );
    //Load CSS Files
    wp_enqueue_style( 'blogshiv-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array( 'blogshiv-style' ), '20152410' );
    wp_enqueue_style( 'blogshiv-dashboard', get_template_directory_uri() . '/assets/css/dashboard.css', array( 'blogshiv-style' ), '20152410' );
    wp_enqueue_style( 'blogshiv-stylecss', get_template_directory_uri() . '/assets/css/style.css', array( 'blogshiv-style' ), '20152410' );
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'blogshiv-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'blogshiv-style' ), '20152410' );
	wp_style_add_data( 'blogshiv-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'blogshiv-ie7', get_template_directory_uri() . '/assets/css/ie7.css', array( 'blogshiv-style' ), '20152410' );
	wp_style_add_data( 'blogshiv-ie7', 'conditional', 'lt IE 8' );
    wp_enqueue_script( 'blogshiv-jquery', get_template_directory_uri() . 'assets/js/jquery.min.js', array(), '20152410', true );
	wp_enqueue_script( 'blogshiv-init', get_template_directory_uri() . 'assets/js/init.js', array(), '20152410', true );
	wp_enqueue_script( 'blogshiv-truncate', get_template_directory_uri() . 'assets/js/truncate.min.js', array(), '20152410', true );
	
}
add_action( 'wp_enqueue_scripts', 'blogshiv_scripts' );


?>

