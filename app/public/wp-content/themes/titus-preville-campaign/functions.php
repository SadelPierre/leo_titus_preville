<?php
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'TPC_VERSION', '1.0.0' );
define( 'TPC_DIR', get_template_directory() );
define( 'TPC_URI', get_template_directory_uri() );

// ─── Theme Setup ────────────────────────────────────────────────────────────
function tpc_setup() {
    load_theme_textdomain( 'titus-preville-campaign', TPC_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
    add_theme_support( 'custom-background', array(
        'default-color' => 'FFFBEA',
    ) );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'titus-preville-campaign' ),
        'footer'  => esc_html__( 'Footer Navigation', 'titus-preville-campaign' ),
    ) );

    add_image_size( 'tpc-hero', 800, 900, true );
    add_image_size( 'tpc-card', 600, 400, true );
    add_image_size( 'tpc-thumb', 400, 300, true );
}
add_action( 'after_setup_theme', 'tpc_setup' );

// ─── Content Width ───────────────────────────────────────────────────────────
function tpc_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'tpc_content_width', 0 );

// ─── Enqueue Scripts & Styles ────────────────────────────────────────────────
function tpc_enqueue_assets() {
    wp_enqueue_style(
        'tpc-main',
        TPC_URI . '/assets/css/main.css',
        array(),
        TPC_VERSION
    );

    wp_enqueue_script(
        'tpc-main',
        TPC_URI . '/assets/js/main.js',
        array(),
        TPC_VERSION,
        true
    );

    wp_localize_script( 'tpc-main', 'tpcData', array(
        'homeUrl'   => esc_url( home_url( '/' ) ),
        'ajaxUrl'   => esc_url( admin_url( 'admin-ajax.php' ) ),
        'menuLabel' => esc_html__( 'Menu', 'titus-preville-campaign' ),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'tpc_enqueue_assets' );

// ─── Widgets ─────────────────────────────────────────────────────────────────
function tpc_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'titus-preville-campaign' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widgets', 'titus-preville-campaign' ),
        'id'            => 'footer-widgets',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'tpc_widgets_init' );

// ─── Fallback Nav Menu ────────────────────────────────────────────────────────
function tpc_fallback_menu() {
    $home = esc_url( home_url( '/' ) );
    echo '<ul id="primary-menu" class="nav-menu">';
    echo '<li><a href="' . $home . '">' . esc_html__( 'Home', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#about">' . esc_html__( 'About Titus', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#babonneau">' . esc_html__( 'Babonneau', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#priorities">' . esc_html__( 'Priorities', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#news">' . esc_html__( 'News', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#events">' . esc_html__( 'Events', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#volunteer">' . esc_html__( 'Volunteer', 'titus-preville-campaign' ) . '</a></li>';
    echo '<li><a href="' . $home . '#contact">' . esc_html__( 'Contact', 'titus-preville-campaign' ) . '</a></li>';
    echo '</ul>';
}

// ─── Excerpt ──────────────────────────────────────────────────────────────────
function tpc_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'tpc_excerpt_length', 999 );

function tpc_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'tpc_excerpt_more' );

// ─── Body Classes ─────────────────────────────────────────────────────────────
function tpc_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'singular';
    }
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'tpc_body_classes' );

// ─── Security: Remove WordPress version ──────────────────────────────────────
remove_action( 'wp_head', 'wp_generator' );

// ─── SEO: Document title ──────────────────────────────────────────────────────
function tpc_document_title_parts( $title ) {
    if ( is_front_page() ) {
        $title['title']   = esc_html__( 'Leo Titus Preville | UWP Candidate for Babonneau, Saint Lucia', 'titus-preville-campaign' );
        $title['tagline'] = '';
    }
    return $title;
}
add_filter( 'document_title_parts', 'tpc_document_title_parts' );

// ─── Contact Form Shortcode (basic, if no plugin) ────────────────────────────
function tpc_contact_form_shortcode( $atts ) {
    ob_start();
    get_template_part( 'template-parts/section', 'contact-form' );
    return ob_get_clean();
}
add_shortcode( 'tpc_contact', 'tpc_contact_form_shortcode' );
