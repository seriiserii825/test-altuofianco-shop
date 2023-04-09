# Create option in acf.php
acf_add_options_sub_page( array(
    'page_title'  => 'Privacy Policy',
    'menu_title'  => 'Privacy Policy',
    'parent_slug' => 'theme-general-settings',
) );

#import privacy-acf.json from /imports

#include shortcode /shortcodes/privacy.php in functions.php

#add content from page-privacy.html to page privacy in admin wordpress
