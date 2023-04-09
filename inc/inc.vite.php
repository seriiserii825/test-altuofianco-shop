<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
  exit;

/*
 * VITE  development
 * Inspired by https://github.com/andrefelipe/vite-php-setup
 *
 */

// enqueue hook
add_action('wp_enqueue_scripts', function () {

  if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {

    // insert hmr into head for live reload
    function vite_head_module_hook()
    {
      echo '<script type="module" crossorigin src="http://localhost:3000/main.js"></script>';
    }
    add_action('wp_head', 'vite_head_module_hook');
  } else {
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/main.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.js', [], null, true);
  }
});
