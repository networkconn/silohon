<?php /**
 * Main Header Silohon Theme.
 * @package Silohon */ ?>
<div class="silo_header container">
    <div id="silo_left" class="silo_left">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="silo_mid">
        <a href="<?php bloginfo('url'); ?>" class="silohon_">
            <?php $cus_logo = esc_attr( get_option('silohon_custom_logo') );
                if($cus_logo != ''): echo '<img width="100" height="60" src="'.$cus_logo.'" alt="'.get_bloginfo('name').'" />';
                else: $def_logo = SILOHON_URI . '/img/logo.png'; echo '<img width="100" height="60" src="'.$def_logo.'" alt="'.get_bloginfo('name').'" />';
            endif; ?>
        </a>
        <?php wp_nav_menu( array(
            'theme_location' => 'header',
            'container' => 'ul',
            'menu_class' => 'silo_menu_header'
        )); ?>
    </div>
    <div class="silo_right"></div>
</div>