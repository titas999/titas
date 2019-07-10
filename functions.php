<?php
/**
 * Titas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Titas
 */

if ( ! function_exists( 'titas_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function titas_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Titas, use a find and replace
         * to change 'titas' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'titas', get_template_directory() . '/languages' );

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
            'topmenu' => esc_html__( 'Primary', 'titas' ),
            'footer_menu' => esc_html__( 'Footer Menu', 'titas' ),
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
        add_theme_support( 'custom-background', apply_filters( 'titas_custom_background_args', array(
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
add_action( 'after_setup_theme', 'titas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function titas_content_width() {

    $GLOBALS['content_width'] = apply_filters( 'titas_content_width', 640 );
}
add_action( 'after_setup_theme', 'titas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function titas_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'titas' ),
        'id'            => 'blog_single_sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'titas' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s category-list">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'titas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function titas_scripts() {
    wp_enqueue_style( 'ionicons-min', get_template_directory_uri() . '/assets/fonts/ionicons/ionicons.min.css');
    wp_enqueue_style( 'fontawesome-min', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/js/lib/swiper.min.css');
    wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/js/lib/jquery.fullpage.min.css');
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'style-gradient', get_template_directory_uri() . '/assets/css/style-gradient.css');
    wp_enqueue_style( 'titas-style', get_stylesheet_uri() );


    wp_enqueue_script( 'scrolloverflow-js', get_template_directory_uri() . '/assets/js/lib/scrolloverflow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'all-js', get_template_directory_uri() . '/assets/js/lib/all.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'particles-min-js', get_template_directory_uri() . '/assets/js/lib/particlejs/particles.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'particles-init-js', get_template_directory_uri() . '/assets/js/lib/particlejs/particles-init.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'titas_scripts' );



/**
 * Plugins Activation.
 */
include_once get_template_directory() . '/inc/plugins_activation.php';

require_once(get_theme_file_path('/inc/metaboxes/services.php'));
require_once(get_theme_file_path('/inc/metaboxes/portfolio.php'));
