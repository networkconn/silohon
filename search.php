<?php /**
 * Theme Name: search
 * @package Silohon */ get_header(); ?>

<div class="container">
    <?php if(have_posts()) : ?>
    <div class="silohon_search_result">You Search For: <span class="span_search_result"><?php the_search_query(); ?></span></div>
    <div class="related_404">
        <?php while(have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="link_404">
            <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php else : ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="body_404">
                <span class="metas">
                    <?php $cat_counter = count( get_the_terms( $post->ID, 'category') );
                        $i = 0; foreach( (get_the_category()) as $category ){
                            $i = $i + 1;
                            while( $i < $cat_counter){
                                echo $category->cat_name . ' ';
                                break;
                            }
                        } echo $category->cat_name; ?>
                </span>
                <span class="metas">/</span>
                <span class="metas"><?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="the_404_title">', '</h2>') ?>
            </div>
        </a>
        <?php endwhile; ?>
    </div>
    <?php else : get_template_part('template/empty', 'search' );
endif; ?>
</div>

<?php get_footer(); ?>