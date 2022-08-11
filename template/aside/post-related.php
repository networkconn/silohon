<?php 
$related_count = ( !empty( get_option( 'silohon_related_post' ) )
    ? get_option( 'silohon_related_post' )
    : 4 ); $related = get_posts( 
        array( 'category__in' => wp_get_post_categories($post->ID),
        'numberposts' => $related_count,
        'post__not_in' => array($post->ID) )
    );
if( $related ) foreach( $related as $post ) {
    setup_postdata($post); ?>
    <ul> 
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </li>
    </ul>   
<?php }
wp_reset_postdata(); ?>