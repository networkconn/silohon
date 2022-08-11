<?php /**
 * Theme Function Silohon Theme.
 * @package Silohon */
define('THEME_NAME', 'Silohon');
define('DESIGNER', 'Nur Akbar');
define('DESIGNER_URI', 'https://github.com/silohon');
define('SILOHON_DIR', get_template_directory() );
define('SILOHON_URI', get_template_directory_uri() );

require SILOHON_DIR . '/inc/functions/theme.php';
require SILOHON_DIR . '/inc/functions/admin.php';
require SILOHON_DIR . '/inc/functions/script.php';
require SILOHON_DIR . '/inc/functions/widgets.php';