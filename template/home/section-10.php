<?php /**
 * The Latest Section for Theme Silohon.
 * @package Silohon */ ?>
<section class="silohon_sec">
    <div class="grid_lates">
        <div class="latest_section">
            <div class="silohon_sec_title">
                <span class="sec_title"><?php echo get_option('option_section_10'); ?></span>
            </div>
            <ul class="section_10">
                <?php $option_section_10 = new Wp_Query( array(
                    'posts_per_page' => 6,
                    'category_name' => get_option('option_section_10'),
                )); while($option_section_10->have_posts()) : $option_section_10->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" class="section_10_link">
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
                <?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="silohon_sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>