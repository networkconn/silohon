    <footer>
        <div class="silohon_footop">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer',
                'container' => 'ul',
                'menu_class' => 'silo_fotop_menu container'
            )); ?>
        </div>
        <div class="silohon_foobot">
            <div class="flx justy container">
                <div class="get_left">
                    &copy; Copyright <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> <?php the_time('Y'); ?>
                </div>
                <div class="get_right">
                    Designe By: <a rel="nofollow, noindex" target="_blank" href="<?php echo DESIGNER_URI ?>"><?php echo DESIGNER ?></a>
                </div>
            </div>
        </div>
    </footer>
    <?php if(get_option('silohon_back_top') == 'active' || get_option('silohon_back_top') == ''){
        get_template_part( 'template/aside/backtop' );
    } ?>
    <?php wp_footer(); ?>
</body>
</html>