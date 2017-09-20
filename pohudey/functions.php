<?php
/**
 * pohudey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pohudey
 */

if ( ! function_exists( 'pohudey_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pohudey_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pohudey, use a find and replace
		 * to change 'pohudey' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pohudey', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pohudey' ),
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
		add_theme_support( 'custom-background', apply_filters( 'pohudey_custom_background_args', array(
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
add_action( 'after_setup_theme', 'pohudey_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pohudey_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pohudey_content_width', 640 );
}
add_action( 'after_setup_theme', 'pohudey_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pohudey_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Заголовок в шапке', 'pohudey' ),
		'id'            => 'title-h',
		'description'   => esc_html__( 'Add widgets here.', 'pohudey' ),
		'before_widget' => '<h1>',
		'after_widget'  => '</h1>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Адрес проведения', 'pohudey' ),
		'id'            => 'adress',
		'description'   => esc_html__( 'Add widgets here.', 'pohudey' ),
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Дата1', 'pohudey' ),
		'id'            => 'data1',
		'description'   => esc_html__( 'Add widgets here.', 'pohudey' ),
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Дата2', 'pohudey' ),
		'id'            => 'data2',
		'description'   => esc_html__( 'Add widgets here.', 'pohudey' ),
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Телефоны', 'pohudey' ),
		'id'            => 'phone',
		'description'   => esc_html__( 'Add widgets here.', 'pohudey' ),
		'before_widget' => '<div class="header__contacts">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'емайл в форму', 'pohudey' ),
		'id'            => 'mail',
		'description'   => esc_html__( 'Add widgets here.<input type="hidden" name="admin_email" value="pohydey@mail.ru">', 'pohudey' ),
		'before_widget' => '<label>',
		'after_widget'  => '</label>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Ссылка вконтакте', 'pohudey' ),
		'id'            => 'link_vk',
		'description'   => esc_html__( 'Add widgets here.<input type="hidden" name="admin_email" value="pohydey@mail.ru">', 'pohudey' ),
		'before_widget' => '<div class="social-icon vk">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Ссылка фейсбук', 'pohudey' ),
		'id'            => 'link_fb',
		'description'   => esc_html__( 'Add widgets here.<input type="hidden" name="admin_email" value="pohydey@mail.ru">', 'pohudey' ),
		'before_widget' => '<div class="social-icon fb">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Ссылка инстаграмм', 'pohudey' ),
		'id'            => 'link_in',
		'description'   => esc_html__( 'Add widgets here.<input type="hidden" name="admin_email" value="pohydey@mail.ru">', 'pohudey' ),
		'before_widget' => '<div class="social-icon in">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pohudey_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pohudey_scripts() {
	wp_enqueue_style( 'normalize-style', get_template_directory() . "/css/normalize.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'pohudey-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pohudey_scripts' );

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
