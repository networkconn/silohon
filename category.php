<?php /**
 * Categoriy section Silohon Theme.
 * @package Silohon */ get_header();

if(have_posts()) : ?>
<section class="silohon_sec container">
    <div class="grid_lates">
        <div class="latest_section">
            <div class="widget_title">
                <span class="silohon_widget_title">
                    <?php $cat_counter = count( get_the_terms( $post->ID, 'category') );
                        $i = 0; foreach( (get_the_category()) as $category ){
                            $i = $i + 1;
                            while( $i < $cat_counter){
                                echo $category->cat_name . ' ';
                                break;
                            }
                        } echo $category->cat_name; ?>
                </span>
            </div>
            <ul class="section_10" style="margin-top:10px;">
                <?php while(have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="section_10_link">
                        <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
                        <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                        <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="section_10_body">
                            <span class="metas">By: <?php the_author(); ?></span>
                            <span class="metas">/</span>
                            <span class="metas"><?php the_time('F d, Y'); ?></span>
                            <?php the_title('<h2 class="section_10_title">', '</h2>') ?>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <div class="silohon_pagination">
                <?php echo paginate_links( array(
                    'mid_size' => 1
                )); ?>
            </div>
        </div>
        <div class="silohon_sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php else :

    get_template_part('template/empty');

endif; get_footer(); ?>