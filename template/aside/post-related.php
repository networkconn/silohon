<?php 
$related_count = ( !empty( get_option( 'silohon_related_post' ) )
    ? get_option( 'silohon_related_post' )
    : 4 ); $related = get_posts( 
        array( 'category__in' => wp_get_post_categories($post->ID),
        'numberposts' => $related_count,
        'post__not_in' => array($post->ID) )
    );
echo '<div class="reslated_404_section">
        <span class="related_404_title">Related Post</span>
    </div>
    <div class="related_404">';
    if( $related ) foreach( $related as $post ) {
        setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="link_404">
            <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php else : ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="body_404">
                <span class="metas"><?php the_author(); ?></span>
                <span class="metas">/</span>
                <span class="metas"><?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="the_404_title">', '</h2>') ?>
            </div>
        </a>
    <?php }
wp_reset_postdata();
echo '</div>'; ?>