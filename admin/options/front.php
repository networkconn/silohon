<?php /**
 * Frontpage Option for Admin Settings.
 * @package Silohon */

// For Hero
register_setting( 'silohon-setting-group-frontpage', 'option_for_hero' );
add_settings_section( 'options-hero', '', 'show_tips', 'silohon_front_page' );
function show_tips(){ ?>
<p>Agar setingan front page bisa berjalan, silahkan buat PAGE kosong terlebih dahulu, lalu jadikan sebagai halaman HomePage di Settings => Reading => lalu ganti "Latest Posts" ke "Static Page".</p>
<?php }
add_settings_field( 'silohon-options-hero', 'Hiro Active?', 'silohon_options_hiro', 'silohon_front_page', 'options-hero' );
    function silohon_options_hiro(){ ?>
        <select name="option_for_hero" id="option_for_hero">
            <option value="" <?php if(get_option('option_for_hero') == '') : echo 'selected'; endif; ?>> Choose </option>
            <option value="active" <?php if(get_option('option_for_hero') == 'active') : echo 'selected'; endif; ?>> Active </option>
            <option value="false" <?php if(get_option('option_for_hero') == 'false') : echo 'selected'; endif; ?>> Non Active </option>
        </select>
    <?php }

// Section 1
register_setting( 'silohon-setting-group-frontpage', 'option_section_1' );
add_settings_field( 'silohon-section-1', 'Section 1', 'silohon_section_1', 'silohon_front_page', 'options-hero' );
    function silohon_section_1(){ ?>
        <select name="option_section_1" id="option_section_1">
            <option value="" <?php if(get_option('option_section_1') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_1') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 2
register_setting( 'silohon-setting-group-frontpage', 'option_section_2' );
add_settings_field( 'silohon-section-2', 'Section 2', 'silohon_section_2', 'silohon_front_page', 'options-hero' );
    function silohon_section_2(){ ?>
        <select name="option_section_2" id="option_section_2">
            <option value="" <?php if(get_option('option_section_2') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_2') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 3
register_setting( 'silohon-setting-group-frontpage', 'option_section_3' );
add_settings_field( 'silohon-section-3', 'Section 3', 'silohon_section_3', 'silohon_front_page', 'options-hero' );
    function silohon_section_3(){ ?>
        <select name="option_section_3" id="option_section_3">
            <option value="" <?php if(get_option('option_section_3') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_3') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 4
register_setting( 'silohon-setting-group-frontpage', 'option_section_4' );
add_settings_field( 'silohon-section-4', 'Section 4', 'silohon_section_4', 'silohon_front_page', 'options-hero' );
    function silohon_section_4(){ ?>
        <select name="option_section_4" id="option_section_4">
            <option value="" <?php if(get_option('option_section_4') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_4') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 5
register_setting( 'silohon-setting-group-frontpage', 'option_section_5' );
add_settings_field( 'silohon-section-5', 'Section 5', 'silohon_section_5', 'silohon_front_page', 'options-hero' );
    function silohon_section_5(){ ?>
        <select name="option_section_5" id="option_section_5">
            <option value="" <?php if(get_option('option_section_5') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_5') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 6
register_setting( 'silohon-setting-group-frontpage', 'option_section_6' );
add_settings_field( 'silohon-section-6', 'Section 6', 'silohon_section_6', 'silohon_front_page', 'options-hero' );
    function silohon_section_6(){ ?>
        <select name="option_section_6" id="option_section_6">
            <option value="" <?php if(get_option('option_section_6') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_6') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 7
register_setting( 'silohon-setting-group-frontpage', 'option_section_7' );
add_settings_field( 'silohon-section-7', 'Section 7', 'silohon_section_7', 'silohon_front_page', 'options-hero' );
    function silohon_section_7(){ ?>
        <select name="option_section_7" id="option_section_7">
            <option value="" <?php if(get_option('option_section_7') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_7') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 8
register_setting( 'silohon-setting-group-frontpage', 'option_section_8' );
add_settings_field( 'silohon-section-8', 'Section 8', 'silohon_section_8', 'silohon_front_page', 'options-hero' );
    function silohon_section_8(){ ?>
        <select name="option_section_8" id="option_section_8">
            <option value="" <?php if(get_option('option_section_8') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_8') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 9
register_setting( 'silohon-setting-group-frontpage', 'option_section_9' );
add_settings_field( 'silohon-section-9', 'Section 9', 'silohon_section_9', 'silohon_front_page', 'options-hero' );
    function silohon_section_9(){ ?>
        <select name="option_section_9" id="option_section_9">
            <option value="" <?php if(get_option('option_section_9') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_9') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }

// Section 10
register_setting( 'silohon-setting-group-frontpage', 'option_section_10' );
add_settings_field( 'silohon-section-10', 'Section 10', 'silohon_section_10', 'silohon_front_page', 'options-hero' );
    function silohon_section_10(){ ?>
        <select name="option_section_10" id="option_section_10">
            <option value="" <?php if(get_option('option_section_10') == '') : echo 'selected'; endif; ?>>False</option>
            <?php $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                <?php if(get_option('option_section_10') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                    echo 'selected';} ?>><?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                </option>
            <?php } ?>
        </select>
    <?php }
