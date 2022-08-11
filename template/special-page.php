<?php /**
 * Static Front Page Template Silohon.
 * @package Silohon */
if(get_option('option_for_hero') != '' && get_option('option_for_hero') != 'false'){ ?>
<?php $hero = new Wp_query( array(
    'posts_per_page' => 5
)); $count=0; ?>
<?php if($hero->have_posts()) : ?>
    <section class="silohon_hero">
        <?php while($hero->have_posts()) : $hero->the_post(); $count++; ?>
        <?php if($count==1){ ?>
        <a href="<?php the_permalink(); ?>" class="hero_link">
            <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php else : ?>
            <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="silohon_hero_body">
                <span class="meta"><?php $cat_counter = count( get_the_terms( $post->ID, 'category') );
                    $i = 0; foreach( (get_the_category()) as $category ){
                        $i = $i + 1;
                        while( $i < $cat_counter){
                            echo $category->cat_name . ' ';
                            break;
                        }
                    } echo $category->cat_name; ?>
                </span> <span class="meta">/</span> <span class="meta"><?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="hero_title">', '</h2>'); ?>
                <?php the_excerpt(); ?>
            </div>
        </a>
        <div class="silohon_hiro_child container">
        <?php } else { ?>
            <a href="<?php the_permalink(); ?>" class="hero_child_link">
                <?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                <img width="150" height="150" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="silohon_hiro_child_body">
                    <span class="metas"><?php $cat_counter = count( get_the_terms( $post->ID, 'category') );
                        $i = 0; foreach( (get_the_category()) as $category ){
                            $i = $i + 1;
                            while( $i < $cat_counter){
                                echo $category->cat_name . ' ';
                                break;
                            }
                        } echo $category->cat_name; ?>
                    </span> <span class="metas">/</span> <span class="metas"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="child_hero_title">', '</h2>'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </a>
        <?php } ?>
        <?php endwhile; 
            wp_reset_query(); wp_reset_postdata(); ?>
        </div>
    </section>
<?php else :
get_template_part('template/empty'); endif; ?>
<?php } echo '<div class="container">';
if( get_option('option_section_1') != '' ){
    get_template_part('template/home/section', '1');
} if( get_option('option_section_2') != ''){
    get_template_part('template/home/section', '2');
} if( get_option('option_section_3') != ''){
    get_template_part('template/home/section', '3');
} if( get_option('option_section_4') != ''){
    get_template_part('template/home/section', '4');
} if( get_option('option_section_5') != ''){
    get_template_part('template/home/section', '5');
} if( get_option('option_section_6') != ''){
    get_template_part('template/home/section', '6');
} if( get_option('option_section_7') != ''){
    get_template_part('template/home/section', '7');
} if( get_option('option_section_8') != ''){
    get_template_part('template/home/section', '8');
} if( get_option('option_section_9') != ''){
    get_template_part('template/home/section', '9');
} if( get_option('option_section_10') != ''){
    get_template_part('template/home/section', '10');
}
echo '</div>';