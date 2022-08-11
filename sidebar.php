<?php /**
 * Sidebar Silohon Theme.
 * @package Silohon */

// For Home page and Front Page Sidebar
if(is_home() || is_front_page( ) || is_page()){
    if(is_active_sidebar( 'silohon-sidebar' )){
        dynamic_sidebar( 'silohon-sidebar' );
    }
}

// For Single Post and Page
if(is_single()){
    if(is_active_sidebar( 'silohon-single-widgets' )){
        dynamic_sidebar( 'silohon-single-widgets' );
    }
}

// For Category and Tag Widgets
if( is_category() || is_tag( )){
    if(is_active_sidebar( 'silohon-cat-widgets' )){
        dynamic_sidebar( 'silohon-cat-widgets' );
    }
}