<?php /**
 * Silohon Menu Flexbox.
 * @package Silohon */ ?>
<div class="silohon_flex flex100" id="silohon_flex">
    <div class="silohon_flex_header">
        <a href="<?php bloginfo('url'); ?>"><h3 class="silohon_flex_title"><?php bloginfo('name'); ?></h3></a>
        <div id="silohon_flex_close" class="silohon_flex_close">
            <span></span>
            <span></span>
        </div>
    </div>
    <h3 class="silo_cat d-mobile">Categories :</h3>
    <?php wp_nav_menu( array(
        'theme_location' => 'header',
        'container' => 'ul',
        'menu_class' => 'silo_menu_flex'
    )); ?>
    <h3 class="silo_cat d-mobile">Services :</h3>
    <?php wp_nav_menu( array(
        'theme_location' => 'footer',
        'container' => 'ul',
        'menu_class' => 'silo_menu_flex d-mobile'
    )); ?>
</div>