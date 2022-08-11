<?php /**
 * Silohon Header Theme.
 * @package Silohon */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <?php $silohon_site_icon = SILOHON_URI . '/img/favicon.png';
        if(!has_site_icon()) { ?>
    <link rel="shortcut icon" href="<?php echo $silohon_site_icon; ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo $silohon_site_icon; ?>">
    <?php } ?>
</head>
<body <?php body_class(); ?>>
<?php if(function_exists('wp_body_open')){
    wp_body_open();
} ?>
<!-- Menu Header -->
<header class="silohon_header">
    <?php get_template_part('template/header/nav'); ?>
</header>
<?php get_template_part('template/header/flex'); ?>