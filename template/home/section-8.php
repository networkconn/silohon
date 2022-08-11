<?php /**
 * Special Theme Grid For 9 Box Posts.
 * @package Silohon */ ?>
<section class="silohon_sec">
    <div class="silohon_sec_title">
        <span class="sec_title"><?php echo get_option('option_section_8'); ?></span>
    </div>
    <div class="grid3">
        <div class="grid3A">
            <?php $option_section_8 = new Wp_query( array(
                'posts_per_page' => 3,
                'category_name' => get_option('option_section_8'),
            )); $count=0; ?>
            <?php while($option_section_8->have_posts()) : $option_section_8->the_post(); $count++; ?>
            <?php if($count==2 || $count==3) : ?>
            <a href="<?php the_permalink(); ?>" class="grid3A_link">
                <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="grid3A_body">
                    <span class="metas">By: <?php the_author(); ?></span>
                    <span class="metas">/</span>
                    <span class="metas">On: <?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="grid3A_title">', '</h2>'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </a>
            <?php endif; endwhile; wp_reset_query(); wp_reset_postdata(); ?>
        </div>
        <div class="grid3B">
            <?php $option_section_8 = new Wp_query( array(
                'posts_per_page' => 1,
                'category_name' => get_option('option_section_8'),
            )); while($option_section_8->have_posts()) : $option_section_8->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="grid3B_link">
                <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="grid3B_body">
                    <span class="meta">By: <?php the_author(); ?></span>
                    <span class="meta">/</span>
                    <span class="meta">On: <?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="grid3B_title">', '</h2>'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </a>
            <?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
        </div>
        <div class="grid3C">
            <?php $option_section_8 = new Wp_Query( array(
                'posts_per_page' => 9,
                'category_name' => get_option('option_section_8'),
            )); $count=0; ?>
            <?php while($option_section_8->have_posts()) : $option_section_8->the_post(); $count++; ?>
            <?php if($count==4 || $count==5 || $count==6 || $count==7 || $count==8 || $count==9) : ?>
            <a href="<?php the_permalink(); ?>" class="grid3C_link">
                <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="grid3C_body">
                    <span class="metas"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="grid3C_title">', '</h2>'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </a>
            <?php endif; endwhile; wp_reset_query(); wp_reset_postdata(); ?>
        </div>
    </div>
</section>