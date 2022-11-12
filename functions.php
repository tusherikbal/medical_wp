<?php
/**
 * medical_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medical_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function medical_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on medical_theme, use a find and replace
		* to change 'medical_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'medical_theme', get_template_directory() . '/languages' );

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


	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'medical_theme' ),
		)
	);


	









	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'medical_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'medical_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medical_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medical_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'medical_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medical_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'medical_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'medical_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'medical_theme_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function medical_theme_scripts() {

	// stylesheet enque 
	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.css', array(), _S_VERSION, 'all' );

	//bootstrap icon
	wp_enqueue_style( 'bootstrap_icons', get_template_directory_uri() . '/assets/plugins/icofont/icofont.min.css', array(), _S_VERSION, 'all' );

	//slickcss
	wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick.css', array(), _S_VERSION, 'all' );
	
	//slick carousel
	wp_enqueue_style( 'slick_carousel', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick-theme.css', array(), _S_VERSION, 'all' );

	//maincss
	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );



	wp_enqueue_style( 'medical_theme-style', get_stylesheet_uri(), array(), _S_VERSION );


	wp_style_add_data( 'medical_theme-style', 'rtl', 'replace' );

	//enque icon 
	wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );




	wp_enqueue_script( 'medical_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true );

	//jquery
	wp_enqueue_script( 'medical_theme_jquery', get_template_directory_uri() . '/assets/plugins/jquery/jquery.js', array('jquery'), _S_VERSION, true );
	
	//bootstrap js
	wp_enqueue_script( 'medical_theme_js_bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	
	
	
	//slick min js
	wp_enqueue_script( 'medical_theme_slick_js', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick.min.js', array('jquery'), _S_VERSION, true );

	//map link
	wp_enqueue_script( 'medical_theme_map_link', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA', array('jquery'), _S_VERSION, true );

	//map directory
	wp_enqueue_script( 'medical_theme_gmap', get_template_directory_uri().'/assets/plugins/google-map/gmap.js', array('jquery'), _S_VERSION, true );
	
	//shuffle min js
	wp_enqueue_script( 'medical_theme_shuffle_js', get_template_directory_uri() . '/assets/plugins/shuffle/shuffle.min.js', array('jquery'), _S_VERSION, true );
	
	//script min js
	wp_enqueue_script( 'medical_theme_script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}



add_action( 'wp_enqueue_scripts', 'medical_theme_scripts' );








/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



require get_template_directory() . '/inc/csf-options.php';


