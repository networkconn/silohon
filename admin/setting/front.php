<?php /**
 * Silohon Front Page Settings.
 * @package Silohon */ ?>
<h1 class="silohon_title_admin">Front Page Setting</h1>
<?php settings_errors(); ?>
<form class="silohon_form" action="options.php" method="post">
    <?php settings_fields('silohon-setting-group-frontpage');
        do_settings_sections( 'silohon_front_page' );
        submit_button('Save');?>
</form>