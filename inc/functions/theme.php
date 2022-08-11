<?php /**
 * Silohon Theme Function.
 * @package Silohon */
add_action('after_setup_theme', 'silohon_setup');
function silohon_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );

    // Register Nav Menus
    register_nav_menus( array(
        'header' => __('Navbar Header', 'silohon'),
        'footer' => __('Navbar Footer', 'silohon'),
    ));
}

// The Excerpt Length
add_filter( 'excerpt_length', 'silohon_excerpt_length' );
function silohon_excerpt_length($length){
    if(get_option('silohon_excerpt') != ''){
        return get_option('silohon_excerpt');
    } else{
        return 45;
    }
}
add_filter( 'excerpt_more', 'silohon_excerpt_more' );
function silohon_excerpt_more(){
    return '...';
}

// Sidebar
add_action('widgets_init', 'silohon_sidebar_init');
function silohon_sidebar_init(){

    // For Home Page and Front Page
	register_sidebar( array(
		'name' => esc_html__( 'Home and Front Page Sidebar', 'Silohon' ),
		'id' => 'silohon-sidebar',
        'before_title' => '<div class="widget_title"><span class="silohon_widget_title">',
        'after_title' => '</span></div>',
	));

    // For Single Post and Page
    register_sidebar( array(
        'name' => esc_html__( 'Single Post and Page Sidebar', 'Silohon' ),
        'id' => 'silohon-single-widgets',
        'before_title' => '<div class="widget_title"><span class="silohon_widget_title">',
        'after_title' => '</span></div>',
    ) );
    
    // For Tags and Categories
    register_sidebar( array(
        'name' => esc_html__( 'Category and Tag Sidebar', 'Silohon' ),
        'id' => 'silohon-cat-widgets',
        'before_title' => '<div class="widget_title"><span class="silohon_widget_title">',
        'after_title' => '</span></div>',
    ) );
}