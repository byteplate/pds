<?php
/**
 * Gaston County Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gaston_County_Theme
 */

if ( ! function_exists( 'gastoncounty_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gastoncounty_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'gastoncounty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gastoncounty', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'gastoncounty-featured-image', 640, 9999 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top', 'gastoncounty' ),
		) );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	/*add_theme_support( 'custom-background', apply_filters( 'gastoncounty_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
}
endif;
add_action( 'after_setup_theme', 'gastoncounty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gastoncounty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gastoncounty_content_width', 640 );
}
add_action( 'after_setup_theme', 'gastoncounty_content_width', 0 );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function gastoncounty_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gastoncounty_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gastoncounty' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gastoncounty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gastoncounty_scripts() {
	wp_enqueue_style( 'gastoncounty-fluidbox', get_template_directory_uri() . '/css/fluidbox.min.css',false,'1.0','all');
	wp_enqueue_style( 'gastoncounty-style', get_stylesheet_uri() );
	wp_enqueue_style( 'gastoncounty-main', get_template_directory_uri() . '/css/main.css',false,'1.0','all');

	if (!is_admin())   
    {  
        wp_deregister_script('jquery');  
  
        // Load a copy of jQuery from the CDN  
        // The last parameter set to TRUE states that it should be loaded in the footer.  
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', false, '3.1.0', true);  
  
        wp_enqueue_script('jquery');  
    }
    
	wp_enqueue_script( 'gastoncounty-throttle-debounce-js', get_template_directory_uri() . '/js/jquery.ba-throttle-debounce.min.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'gastoncounty-fluidbox-js', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'gastoncounty-stickykit-js', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js', array( 'jquery' ), '1.1.2', true );
	wp_enqueue_script( 'gastoncounty-app-js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gastoncounty_scripts' );

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



/* Add ACF Options */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
/*
*  Change the Options Page menu to 'Gaston County Theme Options'
*/
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Gaston County Theme Options') );
}

/**
 * Move Comments Field to Bottom
 */
function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

