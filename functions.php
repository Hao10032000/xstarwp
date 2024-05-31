<?php
/**
 * Theme functions and definitions
 *
 * @package xstar
 */

// remove_theme_mods();

define( 'THEMESFLAT_DIR', trailingslashit( get_template_directory() )) ;
define( 'THEMESFLAT_LINK', trailingslashit( get_template_directory_uri() ) );
define( 'THEMESFLAT_PROTOCOL' , (is_ssl()) ? 'https' : 'http' );


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! isset( $content_width ) ) {
	$content_width = 1200; // Pixels.
}

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

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'themesflat-blog', 1275, 750, true );

//Get thumbnail url
function themesflat_thumbnail_url($size){
    global $post;
    if( $size== '' ) {
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        return esc_url($url);
    } else {
        $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size);
        return esc_url($url[0]);
    }
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'xstar' ),
    'bottom' => esc_html__( 'Bottom Menu', 'xstar' ),
    'topbar' => esc_html__( 'TopBar Menu', 'xstar' )
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
        'aside', 'image', 'link', 'quote'
    ) );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function themesflat_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Blog', 'xstar' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar Blog Sidebar.', 'xstar' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );     

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Toggler', 'xstar' ),
        'id'            => 'aside-toggler-sidebar',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar toggler.', 'xstar' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) ); 

    //Widget footer
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'xstar' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar Footer area 1.', 'xstar' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'xstar' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar Footer area 2.', 'xstar' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 3', 'xstar' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar Footer area 3.', 'xstar' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 4', 'xstar' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar Footer widget area 4.', 'xstar' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'themesflat_widgets_init' );

// Add theme support for selective refresh for widgets.
add_theme_support('customize-selective-refresh-widgets');

/**
 * Enqueue scripts and styles.
 */

 function themesflat_scripts() {    
    // Theme stylesheet.    
    wp_enqueue_style( 'icon-xstar', THEMESFLAT_LINK . 'assets/css/all.min.css' );
    wp_enqueue_style( 'main-css', THEMESFLAT_LINK . 'assets/css/main.css' );
    wp_enqueue_style( 'themesflat-inline-css', THEMESFLAT_LINK . 'assets/css/inline-css.css' );

    
    // Load the html5 shiv..    
    wp_enqueue_script( 'html5shiv', THEMESFLAT_LINK . 'assets/js/html5shiv.js', array('jquery'), '3.7.0' ,true);   
    wp_enqueue_script( 'matchmedia', THEMESFLAT_LINK . 'assets/js/matchMedia.js', array('jquery'),'1.2',true); 

    if ( themesflat_get_opt('page_title_styles') == 'parallax' ) {   
        wp_enqueue_script( 'parallax', THEMESFLAT_LINK . 'assets/js/parallax.js', array('jquery'),'2.6.0',true);
    }
    if ( themesflat_get_opt('enable_smooth_scroll') == 1 ) {
        wp_enqueue_script( 'smoothscroll', THEMESFLAT_LINK . 'assets/js/smoothscroll.min.js', array(),'1.2.1',true);
    }

    // Load the main js    
    wp_enqueue_script( 'themesflat-main', THEMESFLAT_LINK . 'assets/js/main.js', array(),'2.0.4',true);
}

add_action( 'wp_enqueue_scripts', 'themesflat_scripts' );

// Helpers
require THEMESFLAT_DIR . 'includes/customizer/helpers.php';

// Breadcrumbs additions.
require THEMESFLAT_DIR . 'includes/breadcrumb.php';

// Customizer additions.
require THEMESFLAT_DIR . 'includes/customizer/customizer.php';

// Struct
require THEMESFLAT_DIR . 'includes/structure.php';

// Style.
require THEMESFLAT_DIR . 'includes/template-tags.php';

// Style.
require THEMESFLAT_DIR . 'includes/styles.php';

require THEMESFLAT_DIR . "includes/options/options-definition.php";
require_once( THEMESFLAT_DIR . 'includes/controls/social_icons.php');
require_once( THEMESFLAT_DIR . 'includes/controls/number.php');
require_once( THEMESFLAT_DIR . 'includes/controls/dropdown-sidebars.php');
require_once( THEMESFLAT_DIR . 'includes/controls/dropdown-pages.php');
require_once( THEMESFLAT_DIR . 'includes/controls/box-control.php');
require_once( THEMESFLAT_DIR . 'includes/controls/typography.php');
require_once( THEMESFLAT_DIR . 'includes/controls/radio-images.php');
require_once( THEMESFLAT_DIR . 'includes/controls/check-box.php');
require_once( THEMESFLAT_DIR . 'includes/controls/color_overlay.php');
require_once( THEMESFLAT_DIR . 'includes/controls/styler_slider.php');
require_once( THEMESFLAT_DIR . 'includes/controls/draganddrop-controls.php');
require_once( THEMESFLAT_DIR . 'includes/elementor-options/elementor-options.php');
require_once( THEMESFLAT_DIR . 'includes/elementor-options/elementor-functions.php');
require_once( THEMESFLAT_DIR . 'includes/less/lessc.inc.php');
require_once( THEMESFLAT_DIR . 'includes/less/wp-less.php');

function themesflat_get_style($style) {
    return str_replace('italic', 'i', $style);
}

function themesflat_fonts_url() {
    $fonts_url = '';
    $typography_body =  themesflat_get_json('typography_body');
    $typography_headings = themesflat_get_json('typography_headings');
    $typography_menu = themesflat_get_json('typography_menu');
    $typography_sub_menu =  themesflat_get_json('typography_sub_menu');
    $typography_blockquote =  themesflat_get_json('typography_blockquote');
    $typography_blog_post_title =  themesflat_get_json('typography_blog_post_title');
    $typography_blog_post_meta = themesflat_get_json('typography_blog_post_meta');
    $typography_blog_post_buttons = themesflat_get_json('typography_blog_post_buttons');
    $typography_blog_single_title = themesflat_get_json('typography_blog_single_title');
    $typography_blog_single_comment_title = themesflat_get_json('typography_blog_single_comment_title');
    $typography_sidebar_widget_title = themesflat_get_json('typography_sidebar_widget_title');
    $typography_footer_widget_title = themesflat_get_json('typography_footer_widget_title');
    $typography_page_title = themesflat_get_json('typography_page_title');
    $typography_breadcrumb = themesflat_get_json('typography_breadcrumb');
    $typography_buttons = themesflat_get_json('typography_buttons');
    $typography_pagination = themesflat_get_json('typography_pagination');
    $typography_footer = themesflat_get_json('typography_footer');
    $typography_bottom_copyright = themesflat_get_json('typography_bottom_copyright');

    $font_families = array(); 

    if ( '' != $typography_body ) {
        $font_families[] = $typography_body['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_body['style']);
    }
    if ( '' != $typography_headings ) {
        $font_families[] = $typography_headings['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_headings['style']);
    } 
    if ( '' != $typography_menu ) {
        $font_families[] = $typography_menu['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_menu['style']);
    }
    if ( '' != $typography_sub_menu ) {
        $font_families[] = $typography_sub_menu['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_sub_menu['style']);
    }
    if ( '' != $typography_blockquote ) {
        $font_families[] = $typography_blockquote['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_blockquote['style']);
    }
    if ( '' != $typography_blog_post_title ) {
        $font_families[] = $typography_blog_post_title['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_blog_post_title['style']);
    }
    if ( '' != $typography_blog_post_meta ) {
        $font_families[] = $typography_blog_post_meta['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_blog_post_meta['style']);
    }
    if ( '' != $typography_blog_post_buttons ) {
        $font_families[] = $typography_blog_post_buttons['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_blog_post_buttons['style']);
    }
    if ( '' != $typography_blog_single_title ) {
        $font_families[] = $typography_blog_single_title['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_blog_single_title['style']);
    }
    if ( '' != $typography_blog_single_comment_title ) {
        $font_families[] = $typography_blog_single_comment_title['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_blog_single_comment_title['style']);
    }
    if ( '' != $typography_sidebar_widget_title ) {
        $font_families[] = $typography_sidebar_widget_title['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_sidebar_widget_title['style']);
    }
    if ( '' != $typography_footer_widget_title ) {
        $font_families[] = $typography_footer_widget_title['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_footer_widget_title['style']);
    }
    if ( '' != $typography_page_title ) {
        $font_families[] = $typography_page_title['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_page_title['style']);
    }
    if ( '' != $typography_breadcrumb ) {
        $font_families[] = $typography_breadcrumb['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_breadcrumb['style']);
    }
    if ( '' != $typography_buttons ) {
        $font_families[] = $typography_buttons['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_buttons['style']);
    }
    if ( '' != $typography_pagination ) {
        $font_families[] = $typography_pagination['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_pagination['style']);
    }
    if ( '' != $typography_footer ) {
        $font_families[] = $typography_footer['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_footer['style']);
    }
    if ( '' != $typography_bottom_copyright ) {
        $font_families[] = $typography_bottom_copyright['family'].':100,200,300,400,500,600,700,900,'.themesflat_get_style($typography_bottom_copyright['style']);
    }   
    
    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),        
    );

    $fonts_url = add_query_arg( $query_args, THEMESFLAT_PROTOCOL . '://fonts.googleapis.com/css' );

    return esc_url_raw( $fonts_url );
}

function themesflat_scripts_styles() {
    wp_enqueue_style( 'themesflat-theme-slug-fonts', themesflat_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'themesflat_scripts_styles' );

/**
 * Enqueue Bootstrap
 */
function themesflat_enqueue_bootstrap() {
    wp_enqueue_style( 'bootstrap', THEMESFLAT_LINK . 'assets/css/bootstrap.css', array(), true );
}
add_action( 'wp_enqueue_scripts', 'themesflat_enqueue_bootstrap', 9 );

// Load Customizer Style
function themesflat_load_customizer_style() { 
    wp_enqueue_style( 'plugin-install' ); 
    wp_register_style('themesflat-customizer', THEMESFLAT_LINK .'assets/css/admin/customizer.min.css', false, '1.0.0' );
    wp_enqueue_style('themesflat-customizer' ); 
    wp_enqueue_style('themesflat-alpha-color-picker', THEMESFLAT_LINK .'assets/css/admin/alpha-color-picker.min.css', false, '1.0.0' );    
    wp_enqueue_script('jquery-ui');

    wp_enqueue_script('themesflat-alpha-color-picker', THEMESFLAT_LINK . 'assets/js/admin/alpha-color-picker.min.js', array('wp-color-picker'),'2.1.2',true);
    wp_enqueue_script('themesflat-customizer', THEMESFLAT_LINK .'assets/js/admin/customizer.min.js', array( 'jquery','customize-preview' ), '', true );
    wp_enqueue_script( 'wp-plupload' );
}
add_action( 'customize_controls_enqueue_scripts', 'themesflat_load_customizer_style' );

function load_style_admin(){
    wp_enqueue_style( 'icon-xstar', THEMESFLAT_LINK . 'assets/css/all.min.css' );
}
add_action('admin_enqueue_scripts', 'load_style_admin');

// Less Css

if (class_exists('wp_less')) {
    if (themesflat_get_opt('enable_less') == 1) :
        add_action('init', array('wp_less', 'instance'));
    endif;
}
