<?php /**
 * Page Template Silohon.
 * @package Silohon */
get_header();
if(is_front_page()) : get_template_part('template/special', 'page');
else : get_template_part('template/silohon', 'page');
endif; get_footer();