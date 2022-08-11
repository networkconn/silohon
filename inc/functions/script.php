<?php /**
 * Setup Scrip and Css For Silohon Theme.
 * @package Silohon */
// For Front End
add_action('wp_enqueue_scripts', 'silohon_front_end_scripts');
function silohon_front_end_scripts(){
    wp_enqueue_style( 'silohon-style', get_stylesheet_uri() , [], fileatime( SILOHON_DIR . '/style.css'), 'all' );
    if(is_home() || is_front_page()){
        wp_enqueue_style( 'silohon-front', SILOHON_URI . '/inc/css/front.css' , [],
            fileatime( SILOHON_DIR . '/inc/css/front.css'), 'all' );
    } if( is_category( ) ){
        wp_enqueue_style( 'silohon-cat', SILOHON_URI . '/inc/css/cat.css', [],
            fileatime( SILOHON_DIR . '/inc/css/cat.css'), 'all' );
    } if(is_404()){
        wp_enqueue_style( 'silohon-404', SILOHON_URI . '/inc/css/404.css', [],
            fileatime( SILOHON_DIR . '/inc/css/404.css'), 'all' );
    } if(is_single()){
        wp_enqueue_style( 'silohon-single', SILOHON_URI . '/inc/css/single.css', [],
            fileatime( SILOHON_DIR . '/inc/css/single.css' ), 'all' );
    } if(is_search()){
        wp_enqueue_style( 'silohon-search', SILOHON_URI . '/inc/css/search.css', [],
            fileatime( SILOHON_DIR . '/inc/css/search.css'), 'all' );
    }

    wp_enqueue_script( 'main-js', SILOHON_URI . '/inc/js/main.js', [], fileatime( SILOHON_DIR . '/inc/js/main.js'), true );
}

// For Admin Asset
add_action( 'admin_enqueue_scripts', 'silohon_admin_scripts' );
function silohon_admin_scripts( ){
    // if( 'toplevel_page_silohon_general' || 'silohon_page_silohon_front_page' != $hook ){ return; }
    wp_enqueue_style( 'silohon-admin', SILOHON_URI . '/admin/css/silohon-admin.css', [], fileatime( SILOHON_DIR . '/admin/css/silohon-admin.css' ) );
    wp_enqueue_media( );
    wp_enqueue_script( 'silohon-admin', SILOHON_URI . '/admin/js/silohon-admin.js', array('jquery'), fileatime( SILOHON_DIR . '/admin/js/silohon-admin.js' ), true );
}