<?php /**
 * All Setting for General FUnction Settings.
 * @package Silohon */

//  Custom Logo
register_setting( 'silohon-settings-group-general', 'silohon_custom_logo' );
add_settings_section( 'silohon-logo-settings', '', 'silohon_logo_settings', 'silohon_general' );
    function silohon_logo_settings(){
        echo '';
    }
add_settings_field( 'silohon-logo', 'Custon Logo', 'silohon_logo', 'silohon_general', 'silohon-logo-settings' );
    function silohon_logo(){
        $silohon_logo = esc_attr( get_option('silohon_custom_logo') );
        echo '<input id="upload-logo" class="button button-primary" type="button" value="Upload Logo" />
        <input id="silohon-custom-logo" type="hidden" name="silohon_custom_logo" value="'.$silohon_logo.'" />';
    }

// Backto Top
register_setting( 'silohon-settings-group-general', 'silohon_back_top' );
add_settings_field( 'silohon-backtop', 'Back to Top', 'silohon_back_to_top', 'silohon_general', 'silohon-logo-settings' );
    function silohon_back_to_top(){?>
        <select name="silohon_back_top" id="silohon_back_top">
            <option value="" <?php if(get_option('silohon_back_top') == '') : echo 'selected'; endif; ?>>Chose</option>
            <option value="active" <?php if(get_option('silohon_back_top') == 'active') : echo 'selected'; endif; ?>>Active</option>
            <option value="false" <?php if(get_option('silohon_back_top') == 'false') : echo 'selected'; endif; ?>>Non Active</option>
        </select>
    <?php }