<?php /**
 * Theme Name: 404
 * @package Silohon */ get_header(); ?>

<div class="container">
    <div class="pages_404">
        <div class="header_404">
            <h2 class="title_404">404</h2>
            <p class="p_404">Page Not Found</p>
        </div>
    </div>
    <?php $not_pound = new Wp_Query( array(
            'posts_per_page' => 4,
        )); if($not_pound->have_posts()) : ?>
    <div class="reslated_404_section">
        <span class="related_404_title">New Posts</span>
    </div>
    <div class="related_404">
        <?php while($not_pound->have_posts()) : $not_pound->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="link_404">
            <img width="150" height="150" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
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
        <?php endwhile;
        endif; wp_reset_query(); wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>