<?php /**
 * Special Theme Grid For 6 Box.
 * @package Silohon */ ?>
<section class="silohon_sec">
    <div class="silohon_sec_title">
        <span class="sec_title"><?php echo get_option('option_section_5'); ?></span>
    </div>
    <div class="grid2">
        <?php $option_section_5 = new Wp_query( array(
            'posts_per_page' => 2,
            'category_name' => get_option('option_section_5'),
        )); while($option_section_5->have_posts()) : $option_section_5->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="link_grid2">
            <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php else : ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="body_grid2">
                <span class="meta">By: <?php the_author(); ?></span>
                <span class="meta">/</span>
                <span class="meta">On: <?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="title_grid2">', '</h2>'); ?>
                <?php the_excerpt(); ?>
            </div>
        </a>
        <?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
    </div>
    <div class="grid4">
        <?php $option_section_5 = new Wp_query( array(
            'posts_per_page' => 6,
            'category_name' => get_option('option_section_5'),
        )); $count=0; ?>
        <?php while($option_section_5->have_posts()) : $option_section_5->the_post(); $count++; ?>
        <?php if($count==3 || $count==4 || $count==5 || $count==6) : ?>
        <a href="<?php the_permalink(); ?>" class="link_grid4">
            <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php else : ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="body_grid4">
                <span class="metas">By: <?php the_author(); ?></span>
                <span class="metas">/</span>
                <span class="metas">On: <?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="title_grid4">', '</h2>'); ?>
                <?php the_excerpt(); ?>
            </div>
        </a>
        <?php endif; endwhile; wp_reset_query(); wp_reset_postdata(); ?>
    </div>
</section>