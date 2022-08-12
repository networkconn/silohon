<?php /**
 * This Comment Template.
 * @package Silohon */
if( post_password_required() ){
    return;
} ?>
<div id="comments" class="comments-area">
    <?php if( have_comments() ) : ?>
        <h4 class="commets-title">
            <?php 
                printf(
                    esc_html( _nx('One comments on &ldquo;%2$s&rdquo;',
                        '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(),
                        'comments title', 'Silohon' ) ),
                    number_format_i18n( get_comments_number() ),
                    '<span>' . get_the_title() . '</span>'
                );
            ?>
        </h4>
        <ol class="comments-list">
            <?php 
                $args = array(
                    'walker' => null,
                    'max_depth' => '',
                    'style' => 'ol',
                    'callback' => null,
                    'end-callback' => null,
                    'type' => 'all',
                    'reply_text' => 'Reply',
                    'page' => '',
                    'per_page' => '',
                    'avatar_size' => 32,
                    'reverse_top_level' => null,
                    'reverse_children' => '',
                    'format' => 'html5',
                    'short_ping' => false,
                    'echo' => true
                );
                wp_list_comments($args); ?>
        </ol>
        <?php silohon_get_post_navigation(); ?>
        <?php if( !comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are close.', 'Silohon' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>
</div>