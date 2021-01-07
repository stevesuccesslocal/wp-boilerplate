<?php
/**
 * success functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package success
 */

// THEME SET UP
require_once('functions/enqueue-files.php'); //  Enqueue scripts and styles to wp_head
require_once('functions/register-sidebar.php');  //  Register default widget area
require_once('functions/register-menus.php');    //  Register three preset menus
require_once('functions/custom-post-types.php'); //  Creates additional post types
require_once('functions/custom-taxonomies.php'); //  Creates additional taxonomies
require_once('functions/widgets.php'); //  Creates additional widgets
require_once('functions/json.php'); //  Adds json code to the header


// YOUR FUNCTIONS
if ( ! function_exists( 'success_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function success_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on success, use a find and replace
		 * to change 'success' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'success', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'success' ),
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
		add_theme_support( 'custom-background', apply_filters( 'success_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'success_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function success_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'success_content_width', 640 );
}
add_action( 'after_setup_theme', 'success_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/functions/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/functions/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/functions/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/functions/customizer.php';



/**
 * ACF options page
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .layout .acf-fc-layout-handle { 
      background-color: #0073aa; 
      color: #fff !important; 
    } 
    .acf-flexible-content .layout { border-color: #0073aa;  }
    dd.ui_tpicker_second { display: none !important; }
  </style>';
}

/* Change Excerpt length */
function custom_excerpt_length( $length ) {
return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_image_size( 'slider-home', 1200, 500, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
add_image_size( 'slider-internal', 1200, 300, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
add_image_size( 'cta', 600, 450, true );
add_image_size( 'content-image', 800, 600, true );
add_image_size( 'preview', 500, 300, true );
add_image_size( 'cs-preview', 900, 400, true );
add_image_size( 'medium', 300, 300, true );




// Check filetypes (additional WP upload validation)
function check_correct_filetypes( $data, $file, $filename, $mimes, $real_mime ) {
	if( ! empty ( $data['ext'] ) && ! empty( $data['type'] ) ) {
		return $data;
	}

	$wp_file_type = wp_check_filetype( $filename, $mimes );

	if( 'svg' === $wp_file_type['ext'] ) {
		$data['ext'] = 'svg';
		$data['type'] = 'image/svg+xml';
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'check_correct_filetypes', 10, 5 );





/* ---------------------------------- */
/* ---------------------------------- */
/* Hide comments page */
/* ---------------------------------- */
/* ---------------------------------- */
add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}


function filter_media_comment_status( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
	return false;
	}
	return $open;
	}
	add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );