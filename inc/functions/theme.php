<?php /**
 * Silohon Theme Function.
 * @package Silohon */

/**=======================================
 * Setup Theme ===========================
=========================================*/
add_action('after_setup_theme', 'silohon_setup');
function silohon_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'comment-list', 'comment-form',
        'search-form',
        'gallery', 'caption',
        'style', 'script' ) );

    // Register Nav Menus
    register_nav_menus( array(
        'header' => __('Navbar Header', 'silohon'),
        'footer' => __('Navbar Footer', 'silohon'),
    ));
}

/**===========================
 * The Meta ==================
=============================*/
// Category
function silohon_meta_cat(){
    $categories = get_the_category();
    $sparator = ', ';
    $output = '';
    $i=1;
    if( !empty($categories) ) :
        foreach( $categories as $category ) :
            if($i > 1 ) : $output .= $sparator; endif;
            $output = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 'Post On%s', $category->name ) . '">' . esc_html( $category->name ) . '</a>';
            $i++;
        endforeach;
    endif;
    echo $output;
}

// The Category Without link
function silohon_meta_cat__(){
    $categories = get_the_category();
    $sparator = ', ';
    $output = '';
    $i=1;
    if( !empty($categories) ) :
        foreach( $categories as $category ) :
            if($i > 1 ) : $output .= $sparator; endif;
            $output = $category->name;
            $i++;
        endforeach;
    endif;
    echo $output;
}

// Time Format
function silohon_the_time(){
    $times = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
    echo $times . ' Ago';
}

/**=======================================
 * The Excerpt ===========================
=========================================*/
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

/**=======================================
 * Sidebar Register ======================
=========================================*/
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

/**=======================================
 * Sosial Share Button ===================
=========================================*/
add_filter( 'the_content', 'silohon_sosial_share' );
function silohon_sosial_share( $content ){
    if( is_single() ){
        if( get_option('silo_shares') == 'true' ){
            // Include Before Sosial Share.
        $content .= '<div class="silohon_sosial_share">
        <span class="silo_sosial_shares">Share This: </span>';

            // The Variabel for title and link The post
            $title = get_the_title();
            $permalink = get_permalink();
            // Get Twitter User
            $silo_tw = ( get_option( 'silo_tw' ) ? '&amp;via='.esc_attr( get_option( 'silo_tw' ) ) : '' );
            // Share Variable Twitter, Facebook, and Google Plus.
            $twitter = 'https://twitter.com/intent/tweet?=text' .$title. '&amp;url=' .$permalink. $silo_tw. '';
            $fb = 'https://facebook.com/sharer/sharer.php?=' .$permalink;
            $google = 'https://plus.google.com/share?url=' .$permalink;

            // Output Sosial Share...
            $content .= '<a href="'.$twitter.'" target="_blank" rel="nofollow" class="silo_sosial_share">Twitter</a>';
            $content .= '<a href="'.$fb.'" target="_blank" rel="nofollow" class="silo_sosial_share">Facebook</a>';
            $content .= '<a href="'.$google.'" target="_blank" rel="nofollow" class="silo_sosial_share">Google Plus</a>';

        // Insert after sosial share The post.
        $content .= '</div>';
        }
        return $content;
    } else{
        return $content;
    }
}

/**===========================
 * The Posts Navigation ======
=============================*/
function silohon_get_post_navigation(){
    if( get_comment_pages_count() > 1 && get_option('page_comments') ) :
        require ( SILOHON_DIR . '/inc/functions/comment-navigation.php');
    endif;
}