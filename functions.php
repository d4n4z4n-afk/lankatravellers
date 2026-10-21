<?php

add_action( 'after_setup_theme', 'tourism_guide_after_setup_theme' );
function tourism_guide_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'tourism-guide-featured-image', 2000, 1200, true );
    add_image_size( 'tourism-guide-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

}

// Add function after setup:
function tourism_guide_conditional_editor_styles() {
    
    add_editor_style( array( 'assets/css/editor-style.css') );
}
add_action( 'after_setup_theme', 'tourism_guide_conditional_editor_styles', 11 );

/**
 * Register widget area.
 */
function tourism_guide_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'tourism-guide' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'tourism-guide' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'tourism-guide' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'tourism-guide' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'tourism-guide' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'tourism-guide' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'tourism-guide' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'tourism_guide_widgets_init' );

// enqueue styles for child theme
function tourism_guide_enqueue_styles() {

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'tourism-guide-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'tourism-guide-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('adventure-travelling-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('adventure-travelling-child-style', get_stylesheet_directory_uri() .'/style.css', array('adventure-travelling-style'));

    require get_theme_file_path( '/tp-theme-color.php' );
    wp_add_inline_style( 'adventure-travelling-child-style',$adventure_travelling_tp_theme_css );

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );

    $adventure_travelling_body_font_family = get_theme_mod('adventure_travelling_body_font_family', '');

    $adventure_travelling_heading_font_family = get_theme_mod('adventure_travelling_heading_font_family', '');

    $adventure_travelling_menu_font_family = get_theme_mod('adventure_travelling_menu_font_family', '');

    $adventure_travelling_tp_theme_css = '
        body{
            font-family: '.esc_html($adventure_travelling_body_font_family).' !important;
        }
        .more-btn a{
            font-family: '.esc_html($adventure_travelling_body_font_family).'!important;
        }
        h1,.logo h1{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        h2{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        h3{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        h4{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        h5{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        h6{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        #theme-sidebar .wp-block-search .wp-block-search__label{
            font-family: '.esc_html($adventure_travelling_heading_font_family).'!important;
        }
        .menubar{
            font-family: '.esc_html($adventure_travelling_menu_font_family).'!important;
        }
    ';
    wp_add_inline_style('adventure-travelling-child-style', $adventure_travelling_tp_theme_css);
}
add_action('wp_enqueue_scripts', 'tourism_guide_enqueue_styles');

function tourism_guide_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'tourism-guide-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'tourism_guide_admin_scripts' );


function tourism_guide_theme_setup() {

    require get_stylesheet_directory() . '/customizer/customizer.php';

    require get_theme_file_path( '/customizer/customize-control-toggle.php' );

    if ( ! defined( 'ADVENTURE_TRAVELLING_PRO_THEME_NAME' ) ) {
        define( 'ADVENTURE_TRAVELLING_PRO_THEME_NAME', esc_html__( 'Tourism Guide Pro', 'tourism-guide' ));
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_PRO_THEME_URL' ) ) {
        define( 'ADVENTURE_TRAVELLING_PRO_THEME_URL', esc_url('https://www.themespride.com/products/travel-tour-wordpress-theme'));
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_FREE_THEME_URL' ) ) {
    	define( 'ADVENTURE_TRAVELLING_FREE_THEME_URL', 'https://www.themespride.com/products/free-tourism-wordpress-theme' );
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_DEMO_THEME_URL' ) ) {
    	define( 'ADVENTURE_TRAVELLING_DEMO_THEME_URL', 'https://page.themespride.com/tourism-guide-pro/' );
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_DOCS_THEME_URL' ) ) {
        define( 'ADVENTURE_TRAVELLING_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/tourism-guide/' );
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_DOCS_URL' ) ) {
        define( 'ADVENTURE_TRAVELLING_DOCS_URL', 'https://page.themespride.com/demo/docs/tourism-guide/' );
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_RATE_THEME_URL' ) ) {
        define( 'ADVENTURE_TRAVELLING_RATE_THEME_URL', 'https://wordpress.org/support/theme/tourism-guide/reviews/#new-post' );
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_SUPPORT_THEME_URL' ) ) {
        define( 'ADVENTURE_TRAVELLING_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/tourism-guide' );
    }
    if ( ! defined( 'ADVENTURE_TRAVELLING_CHANGELOG_THEME_URL' ) ) {
        define( 'ADVENTURE_TRAVELLING_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
    }

    define('TOURISM_GUIDE_CREDIT',__('https://www.themespride.com/products/free-tourism-wordpress-theme','tourism-guide') );
    if ( ! function_exists( 'tourism_guide_credit' ) ) {
        function tourism_guide_credit(){
            echo "<a href=".esc_url(TOURISM_GUIDE_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('adventure_travelling_footer_text',__('Tourism WordPress Theme','tourism-guide')))."</a>";
        }
    }

}
add_action( 'after_setup_theme', 'tourism_guide_theme_setup' );

// Remove customizer settings
function tourism_guide_remove_custom($wp_customize) {
    
    $wp_customize->remove_setting('adventure_travelling_slider_excerpt_length');
    $wp_customize->remove_control('adventure_travelling_slider_excerpt_length');

}
add_action('customize_register', 'tourism_guide_remove_custom', 1000);