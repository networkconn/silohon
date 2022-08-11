<?php /**
 * Single Post Silohon Theme.
 * @package Silohon */ get_header(); ?>
<?php silohon_save_post_veiws( get_the_ID() ); ?>
<div class="container">
    <div class="silohon_single_post">
        <article class="silohon_article">
            <div class="silohon_article_top">
                <div class="single_cat">
                    <?php the_category(); ?>
                </div>
                <?php the_title('<h2 class="single_post_title">', '</h2>'); ?>
                <div class="post_meta">
                    <?php $defaut_author_image = SILOHON_URI . '/img/favicon.png';
                    if( get_option('author_meta_image') == '' ) :
                        echo '<img width="50" height="50" src="'.$defaut_author_image.'" alt="'.get_the_author().'">';
                    else :
                        $the_author_image = esc_attr( get_option('author_meta_image') );
                        echo '<img width="50" height="50" src="'.$the_author_image.'" alt="'.get_the_author().'">';
                    endif; ?>
                    <div class="post_meta_r">
                        <span class="author_names">The Author</span>
                        <span class="date_publis"><?php the_time('F d, Y'); ?></span>
                    </div>
                </div>
                <?php if(get_option('silohon_single_post_thumbnail') == '' ||
                    get_option('silohon_single_post_thumbnail') == 'true' ) :
                    if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
                    <img width="150" height="150" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php endif; 
                    endif; ?>
            </div>
            <div class="silohon_the_content">
                <?php the_content(); ?>
            </div>
            <?php if( get_option('silohon_next_prev') == 'true' ) :
                    get_template_part('template/aside/next', 'prev'); endif;
                if( get_option('silohon_related_post') == true ||
                get_option('silohon_related_post') == '' ) :
                    get_template_part('template/aside/post', 'related'); endif; ?>
        </article>
        <div class="silohon_sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>