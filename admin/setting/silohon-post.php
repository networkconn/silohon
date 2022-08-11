<?php /**
 * Post Settings and More Option for Silohon Theme.
 * @package Silohon */ ?>
<h1 class="silohon_title_admin">Posts Options</h1>
<?php settings_errors(); ?>
<form class="silohon_form" action="options.php" method="post">
    <?php settings_fields('silohon-post-settings');
    do_settings_sections('silohon_posts_option');
    submit_button( 'Save' ); ?>
</form>