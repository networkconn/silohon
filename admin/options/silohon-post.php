<?php /**
 * Post Settings and More Option for Silohon Theme.
 * @package Silohon */

// The Post Thumbnail Option
register_setting( 'silohon-post-settings', 'silohon_single_post_thumbnail' );
add_settings_section( 'silohon-single-post-thumb', '', 'all_settings_post', 'silohon_posts_option' );
    function all_settings_post(){
        echo '<p>Pilih Beberapa Opsi, atau biarkan saja untuk tampilan default</p>';
    }
add_settings_field( 'silohon-show-thumbnail', 'The Post Thumbnail',
    'silohon_show_post_thumbnail', 'silohon_posts_option', 'silohon-single-post-thumb');
    function silohon_show_post_thumbnail(){ ?>
        <select name="silohon_single_post_thumbnail" id="silohon_single_post_thumbnail">
            <option value="" <?php if(get_option('silohon_single_post_thumbnail') == '') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silohon_single_post_thumbnail') == 'true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silohon_single_post_thumbnail') == 'false') : echo 'selected'; endif; ?>>Hiden</option>
        </select>
    <?php }

// For sosial Shares posts
register_setting( 'silohon-post-settings', 'silo_shares' );
add_settings_field( 'siloh-shares', 'Share Button', 'sosial_share_silohon',
    'silohon_posts_option', 'silohon-single-post-thumb' );
    function sosial_share_silohon(){ ?>
        <select name="silo_shares" id="silo_shares">
            <option value="" <?php if(get_option('silo_shares') == '') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silo_shares') == 'true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silo_shares') == 'false') : echo 'selected'; endif; ?>>Hiden</option>
        </select>
    <?php }

// The Next & Prev Posts
register_setting( 'silohon-post-settings', 'silohon_next_prev' );
add_settings_field( 'silo-next-prev', 'Next & Prev', 'silo_next_prev',
    'silohon_posts_option', 'silohon-single-post-thumb' );
    function silo_next_prev(){ ?>
        <select name="silohon_next_prev" id="silohon_next_prev">
            <option value="" <?php if(get_option('silohon_next_prev') == '') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silohon_next_prev') == 'true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silohon_next_prev') == 'false') : echo 'selected'; endif; ?>>Hiden</option>
        </select>
    <?php }

// The Related Single Posts
register_setting( 'silohon-post-settings', 'silohon_related_post' );
add_settings_field( 'silo-related-post', 'Related Post', 'silo_related_post',
    'silohon_posts_option', 'silohon-single-post-thumb' );
    function silo_related_post(){ ?>
        <input type="number" name="silohon_related_post" id="silohon_related_post" placeholder="Default 4" value="<?php echo get_option('silohon_related_post'); ?>" />
    <?php }

// The Excerpt Length
register_setting( 'silohon-post-settings', 'silohon_excerpt' );
add_settings_field( 'silo-excerpt', 'The Excerpt', 'silo_excerpt',
    'silohon_posts_option', 'silohon-single-post-thumb' );
    function silo_excerpt() { ?>
        <input type="number" name="silohon_excerpt" id="silohon_excerpt" placeholder="Default 45" value="<?php echo get_option('silohon_excerpt'); ?>" />
    <?php }