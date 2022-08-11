<?php /**
 * Silohon Theme General Setting.
 * @package Silohon */ ?>
<h1 class="silohon_title_admin">General Setting</h1>
<?php settings_errors(); ?>
<?php if(get_option('silohon_custom_logo') != '') :
    echo '<img class="img_preview" src="'.get_option('silohon_custom_logo').'" />';
    else : $default_logoss = SILOHON_URI . '/img/logo.png';
        echo '<img class="img_preview" src="'.$default_logoss.'" />';
    endif; ?>
<form class="silohon_form" action="options.php" method="post">
    <?php settings_fields('silohon-settings-group-general');
        do_settings_sections( 'silohon_general' );
        submit_button('Save');?>
</form>