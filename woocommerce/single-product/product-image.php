<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */
defined('ABSPATH') || exit;
// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
  return;
}
global $product;
$product_image_url = get_the_post_thumbnail_url(get_the_ID());
$gallery_images = $product->get_gallery_image_ids();
$gallery_images_urls = [];
$gallery_images_urls[] = $product_image_url;
foreach ($gallery_images as $image_id) {
  $image_url = wp_get_attachment_image_url($image_id, 'full');
  $gallery_images_urls[] = $image_url;
} ?>
<div class="woocommerce-product-gallery product-gallery">
  <?php if (count($gallery_images_urls) > 1) : ?>
    <div class="product-gallery__wrap">
      <?php foreach ($gallery_images_urls as $image_url) : ?>
        <div class="product-gallery__item">
          <img src="<?php echo $image_url; ?>" alt="" />
        </div>
      <?php endforeach; ?>
    </div>
  <?php else : ?>
    <?php foreach ($gallery_images_urls as $image_url) : ?>
      <div class="product-gallery__item">
        <img src="<?php echo $product_image_url; ?>" alt="" />
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
