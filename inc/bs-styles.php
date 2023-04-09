<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function bs_altuofianco_shop_scripts()
{
    wp_enqueue_style('bs_altuofianco_shop-leaflet-css', get_template_directory_uri() . '/assets/libs/leaflet/leaflet.css');
    wp_enqueue_style('bs_altuofianco_shop-style', get_stylesheet_uri());
    wp_enqueue_style('bs_altuofianco_shop-form-styler-css', get_template_directory_uri() . '/assets/libs/jquery-form-styler/jquery.formstyler.css');
    wp_enqueue_style('bs_altuofianco_shop-form-styler-css-theme', get_template_directory_uri() . '/assets/libs/jquery-form-styler/jquery.formstyler.theme.css');
    wp_enqueue_style('bs_altuofianco_shop-my', get_template_directory_uri() . '/assets/css/my.css');

    wp_enqueue_script('bs_altuofianco_shop-form-styler-js', get_template_directory_uri() . '/assets/libs/jquery-form-styler/jquery.formstyler.min.js', ['jquery'], null, true);
    wp_enqueue_script('bs_altuofianco_shop-leaflet-js', get_template_directory_uri() . '/assets/libs/jquery-stick/jquery.sticky-scroll.js', ['jquery'], null, true);
    wp_enqueue_script(
        'bs_altuofianco_shop-leaflet-js',
        get_template_directory_uri() . '/assets/libs/leaflet/leaflet.js',
        ['jquery'],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'bs_altuofianco_shop_scripts');
