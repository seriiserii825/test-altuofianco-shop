<?php

/**
 * bsv-eccommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bsv-eccommerce
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}


$vite_dev = true;

define('IS_VITE_DEVELOPMENT', $vite_dev);

include "inc/inc.vite.php";
require_once __DIR__ . '/src/vue/vue-functions.php';

require_once __DIR__ . '/inc/class-tgm-plugin-activation.php';
require_once __DIR__ . '/inc/tgm_example.php';
require_once __DIR__ . '/inc/bs-setup.php';
require_once __DIR__ . '/inc/acf.php';
require_once __DIR__ . '/inc/func.php';
require_once __DIR__ . '/inc/bs-widgets.php';
require_once __DIR__ . '/inc/bs-styles.php';
require_once __DIR__ . '/shortcodes/short_company_name.php';
require_once __DIR__ . '/shortcodes/full_company_name.php';
require_once __DIR__ . '/shortcodes/full_address.php';
require_once __DIR__ . '/shortcodes/vat.php';
require_once __DIR__ . '/shortcodes/phone_number.php';
require_once __DIR__ . '/shortcodes/email.php';
require_once __DIR__ . '/shortcodes/privacy.php';
require_once __DIR__ . '/woocommerce/functions/wc-functions.php';
require_once __DIR__ . '/src/vue/vue-functions.php';

// require_once __DIR__ . '/woocommerce/functions/wc-add-to-cart-quantity-in-loop.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
  require get_template_directory() . '/inc/woocommerce.php';
}
