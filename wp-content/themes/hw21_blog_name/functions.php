<?php
/**
 * HW21_blog_name functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HW21_blog_name
 */

if ( ! function_exists( 'hw21_blog_name_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hw21_blog_name_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on HW21_blog_name, use a find and replace
	 * to change 'hw21_blog_name' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hw21_blog_name', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'PrimaryNav', 'hw21_blog_name' ),
			'footer' => esc_html__( 'FooterNav', 'hw21_blog_name' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'gallery',
			'link',
	) );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'hw21_blog_name_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif;
add_action( 'after_setup_theme', 'hw21_blog_name_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hw21_blog_name_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hw21_blog_name_content_width', 640 );
}
add_action( 'after_setup_theme', 'hw21_blog_name_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hw21_blog_name_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hw21_blog_name' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
			'name'          => esc_html__( 'Sidebar contact', 'hw21_blog_name' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hw21_blog_name_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function hw21_blog_name_scripts() {
	wp_enqueue_style( 'hw21_blog_name-style', get_stylesheet_uri() );

	wp_enqueue_style( 'hw21_blog_name-flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	wp_enqueue_style( 'hw21_blog_name-styleAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'hw21_blog_name-styleAwesome', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700' );

	wp_enqueue_script( 'hw21_blog_name-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140404', true );

	wp_enqueue_script( 'hw21_blog_name-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hw21_blog_name-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'hw21_blog_name-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140401', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hw21_blog_name_scripts' );


/**
 * Pagination
 */

function pagination(){
	$pagination = get_the_posts_pagination( array(
			'mid_size' => 2,
			'prev_text' => __( '<span class="fa fa-chevron-left"></span>', 'textdomain' ),
			'next_text' => __( '<span class="fa fa-chevron-right"></span>', 'textdomain' ),
			'screen_reader_text' => __( ' ', 'textdomain' ),
	) );
	echo $pagination;
}

// Defining Settings, Controls, Etc.

function mytheme_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'mytheme_new_section_name' , array(
			'title'      => __( 'Social name by Geekhub', 'mytheme' ),
			'priority'   => 30,
	) );

	$wp_customize->add_setting( 'social_links_facebook' , array(
			'default'     => '',
			'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
			'label'        => __( 'Facebook', 'mytheme' ),
			'section'    => 'mytheme_new_section_name',
			'settings'   => 'social_links_facebook',
	) ) );

	$wp_customize->add_setting( 'social_links_inst' , array(
			'default'     => '',
			'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_inst', array(
			'label'        => __( 'Inst', 'mytheme' ),
			'section'    => 'mytheme_new_section_name',
			'settings'   => 'social_links_inst',
	) ) );

//	$wp_customize->add_setting( 'social_links_inst' , array(
//			'default'     => '',
//			'transport'   => 'refresh',
//	) );
//
//	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_links_color', array(
//			'label'        => __( 'color', 'mytheme' ),
//			'section'    => 'mytheme_new_section_name',
//			'settings'   => 'social_links_color',
//	) ) );
}

//func

add_action( 'customize_register', 'mytheme_customize_register' );


// Custom Post Type Slider
function hw21_blog_name_custom_post_type() {
	$labels = array (
			'name' => 'Slider',
			'singular_name' => 'Slide',
			'add_new' => 'Add Slide',
			'all_items' => 'All Slides',
			'add_new_item' => 'Add Slide',
			'edit_item' => 'Edit Slide',
			'new_item' => 'New Slide',
			'view_item' => 'View Slide',
			'search_item' => 'Search Slides',
			'not_found' => 'No Slides found',
			'not_found_in_trash' => 'No Slides found in trash',
			'parent_item_colon' => 'Parent Slide'
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => false,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post', // attachment?
			'hierarchical' => false,
			'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'revisions',
			),
			'new_position' => 5,
			'exclude_from_search' => false,
	);
	register_post_type('slider', $args);
}
add_action('init', 'hw21_blog_name_custom_post_type');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
