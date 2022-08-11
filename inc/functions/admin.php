<?php /**
 * Admin Function Silohon Theme.
 * @package Silohon */
add_action('admin_menu', 'silohon_admin');
function silohon_admin(){
    $icon_url = SILOHON_URI . '/img/icon.png';
    add_menu_page( THEME_NAME, THEME_NAME, 'manage_options',
        'silohon_general', 'silohon_general', $icon_url );
    
    // Submenu General Setting
    add_submenu_page( 'silohon_general', THEME_NAME, 'General',
        'manage_options', 'silohon_general', 'silohon_general' );
    function silohon_general(){
        require_once SILOHON_DIR . '/admin/setting/general.php';
    }
    // Front page Settings
    add_submenu_page( 'silohon_general', 'Front Page Setting', 'FrontPage',
        'manage_options', 'silohon_front_page', 'silohon_front_page' );
    function silohon_front_page(){
        require_once SILOHON_DIR . '/admin/setting/front.php';
    }

    // Post Setting
    add_submenu_page( 'silohon_general', 'Silohon Posts Setting', 'Post Setting',
        'manage_options', 'silohon_posts_option', 'silohon_posts_option' );
    function silohon_posts_option(){
        require_once SILOHON_DIR . '/admin/setting/silohon-post.php';
    }

    // Add action For Admin Setting
    add_action('admin_init', 'silohon_admin_init');
    function silohon_admin_init(){
        require_once SILOHON_DIR . '/admin/options/general.php';
        require_once SILOHON_DIR . '/admin/options/front.php';
        require_once SILOHON_DIR . '/admin/options/silohon-post.php';
    }
}