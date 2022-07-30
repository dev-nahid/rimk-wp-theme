<?php
/**
 * Rimk functions and definitions
 *
 * @package Rimk
 */

// Below define fucntion will be remove after complete the production.
if ( site_url() == "http://localhost/theme" ){
	define( "VERSION", time() );
}else{
	define( "VERSION", wp_get_theme()->get( "version" ));
}

//==================================

define( 'RIMK_DIR', trailingslashit( get_template_directory() )) ;
define( 'RIMK_LINK', trailingslashit( get_template_directory_uri() ) );


function rimkony_setup() {

	load_theme_textdomain( 'rimkony', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );


	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rimkony' ),
		)
	);


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
			'rimkony_custom_background_args',
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
add_action( 'after_setup_theme', 'rimkony_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rimkony_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rimkony_content_width', 640 );
}
add_action( 'after_setup_theme', 'rimkony_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rimkony_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rimkony' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rimkony' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rimkony_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rimkony_scripts() {
	
	// Rimk theme stylesheet
	wp_enqueue_style( 'font-awesome', RIMK_LINK . 'assets/css/all.min.css' );
	wp_enqueue_style( 'flaticon', RIMK_LINK . 'assets/font/flaticon.css' );
	wp_enqueue_style( 'bootstrap', RIMK_LINK . 'assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'menu', RIMK_LINK . 'assets/css/menu.css' );
	wp_enqueue_style( 'venobox', RIMK_LINK . 'assets/css/venobox.css' );
	wp_enqueue_style( 'magnific-popup', RIMK_LINK . 'assets/css/magnific-popup.css' );
	wp_enqueue_style( 'swiper-slider', RIMK_LINK . 'assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'scroll-animation', RIMK_LINK . 'assets/css/animate.css' );
	wp_enqueue_style( 'style', RIMK_LINK . 'assets/css/style.css' );
	wp_enqueue_style( 'responsive', RIMK_LINK . 'assets/css/responsive.css' );

	// Rimk theme scripts
	wp_enqueue_script( 'bootstrap', RIMK_LINK . 'assets/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0' ,true);   
	wp_enqueue_script( 'menu', RIMK_LINK . 'assets/plugins/menu.min.js', array('jquery'), VERSION ,true);   
	wp_enqueue_script( 'venobox', RIMK_LINK . 'assets/plugins/venobox.min.js', array('jquery'), '1.8.6' ,true);   
	wp_enqueue_script( 'megnific-popup', RIMK_LINK . 'assets/plugins/jquery.magnific-popup.min.js', array('jquery'), '1.1.0' ,true);   
	wp_enqueue_script( 'mixitup-popup', RIMK_LINK . 'assets/plugins/mixitup.min.js', array('jquery'), '3.3.1' ,true);   
	wp_enqueue_script( 'swiper-slider', RIMK_LINK . 'assets/plugins/swiper-bundle.min.js', array('jquery'), '6.1.2' ,true);  
	wp_enqueue_script( 'counterup-waypoint', RIMK_LINK . 'assets/plugins/waypoint.js', array('jquery'), '4.0.1' ,true);   
	wp_enqueue_script( 'counterup', RIMK_LINK . 'assets/plugins/jquery.counterup.min.js', array('jquery'), '1.0' ,true);   
	wp_enqueue_script( 'scroll-animation', RIMK_LINK . 'assets/plugins/wow.min.js', array('jquery'), VERSION ,true);   
	wp_enqueue_script( 'scroll-animation', RIMK_LINK . 'assets/plugins/wow.min.js', array('jquery'), '1.1.3' ,true);   
	wp_enqueue_script( 'script', RIMK_LINK . 'assets/js/script.js', array(), VERSION ,true);   


	// by default scripts
	wp_enqueue_style( 'rimkony-style', get_stylesheet_uri(), array(), VERSION );
	wp_style_add_data( 'rimkony-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rimkony-navigation', get_template_directory_uri() . '/js/navigation.js', array(), VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rimkony_scripts' );

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

