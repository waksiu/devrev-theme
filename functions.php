<?php
/**
 * DevRev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DevRev
 */

if ( ! function_exists( 'devrev_setup' ) ) :

    add_theme_support( 'custom-logo' );

    // Register Custom Navigation Walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function devrev_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on DevRev, use a find and replace
		 * to change 'devrev' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'devrev', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'devrev' ),
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
		add_theme_support( 'custom-background', apply_filters( 'devrev_custom_background_args', array(
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
add_action( 'after_setup_theme', 'devrev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function devrev_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'devrev_content_width', 640 );
}
add_action( 'after_setup_theme', 'devrev_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function devrev_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'devrev' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'devrev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'devrev_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function devrev_scripts() {
//    <!-- css class -->
//    <link href="css/bootstrap.min.css" rel="stylesheet">
    wp_enqueue_style( 'devrev-style1', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'devrev-style2', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'devrev-style3', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
    wp_enqueue_style( 'devrev-style4', get_template_directory_uri() . '/css/full-slider.css' );

//    wp_enqueue_style( 'devrev-style5', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'devrev-style5', get_template_directory_uri() . '/css/all.css' );

    wp_enqueue_style( 'devrev-style6', get_template_directory_uri() . '/css/style_lnr_icons.css' );

    wp_enqueue_style( 'devrev-style7', get_template_directory_uri() . '/css/animate.css' );

    wp_enqueue_style( 'devrev-style8', get_template_directory_uri() . '/css/scrolling-nav.css' );
    wp_enqueue_style( 'devrev-style9', get_template_directory_uri() . '/css/css.css' );

    wp_enqueue_style( 'devrev-style10', get_template_directory_uri() . '/owl-carousel/owl.carousel.css' );
    wp_enqueue_style( 'devrev-style11', get_template_directory_uri() . '/owl-carousel/owl.theme.css' );

    wp_enqueue_style( 'devrev-style12', 'https://fonts.googleapis.com/css?family=Open+Sans:light:300italic,400italic,700italic,300,400,700' );
    wp_enqueue_style( 'devrev-style13', 'https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,800,700,900' );
    wp_enqueue_style( 'devrev-style14', get_template_directory_uri() . '/style.css' );

    //    <!-- jQuery Plugin -->
    wp_enqueue_script( 'devrev-js1', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js2', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js3', get_template_directory_uri() . '/js/respond.min.js', array(), '20151215', true );
    //<!--[animate-number]-->
    wp_enqueue_script( 'devrev-js4', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js5', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js6', get_template_directory_uri() . '/js/svgembedder.min.js', array(), '20151215', true );
    //<!--</maps>-->
//    wp_enqueue_script( 'devrev-js7', get_template_directory_uri() . '/https://maps.googleapis.com/maps/api/js?key=AIzaSyAi4pzXIaemolBXDPx_xYjp-97HMC209GI', array(), '20151215', true );
//    wp_enqueue_script( 'devrev-js8', get_template_directory_uri() . '/js/google.maps.js', array(), '20151215', true );
    //<!-- Owl carousel js plugin -->
    wp_enqueue_script( 'devrev-js9', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array(), '20151215', true );
    //<!-- bootstrap -->
    wp_enqueue_script( 'devrev-js10', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js11', get_template_directory_uri() . '/js/anijs.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js12', get_template_directory_uri() . '/js/scrollReveal.min.js', array(), '20151215', true );
    //<!-- Scrolling Nav JavaScript -->
    wp_enqueue_script( 'devrev-js13', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '20151215', true );
//    wp_enqueue_script( 'devrev-js14', get_template_directory_uri() . '/js/scrolling-nav.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js15', get_template_directory_uri() . '/js/jquery.vide.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js16', get_template_directory_uri() . '/js/mixitup.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js17', get_template_directory_uri() . '/js/jquery.lettering.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js18', get_template_directory_uri() . '/js/jquery.textillate.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js19', get_template_directory_uri() . '/js/jquery.visible.min.js', array(), '20151215', true );
    wp_enqueue_script( 'devrev-js20', get_template_directory_uri() . '/js/javascript.js', array(), '20151215', true );

//	wp_enqueue_style( 'devrev-style', get_stylesheet_uri() );

	wp_enqueue_script( 'devrev-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'devrev-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'devrev_scripts' );

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

