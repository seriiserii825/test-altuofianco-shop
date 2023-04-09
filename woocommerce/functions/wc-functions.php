<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
function woocommerce_get_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0)
{
	global $product;
	//	$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
	//	return $product ? $product->get_image( $image_size ) : '';
	if (has_post_thumbnail()) {
		return '<div class="product__image">
					<img class="img-responsive img--desktop" src="' . kama_thumb_src('w=495 &h=495') . '" alt=""/>
					<img class="img-responsive img--mobile" src="' . kama_thumb_src('w=400 &h=400') . '" alt=""/>
				</div>';
	}
	return '<div class="product__image">
				<img class="img-responsive img--desktop" src="' . kama_thumb_src('w=495 &h=495 &attach_id=154') . '" alt=""/>
				<img class="img-responsive img--mobile" src="' . kama_thumb_src('w=400 &h=400 &attach_id=154') . '" alt=""/>
			</div>';
}
function woocommerce_template_loop_product_title()
{
	echo '<div class="product__footer"><h2 class="' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

add_filter('woocommerce_dropdown_variation_attribute_options_html', 'filter_dropdown_option_html', 12, 2);
function filter_dropdown_option_html($html, $args)
{
	$show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __('Choose an option', 'woocommerce');
	$show_option_none_html = '<option value="">' . esc_html($show_option_none_text) . '</option>';

	$html = str_replace($show_option_none_html, '', $html);

	return $html;
}

function woocommerce_widget_shopping_cart_button_view_cart()
{
	echo '<a href="/cart" class="button wc-forward">' . esc_html__('View cart', 'woocommerce') . '</a>';
}

function woocommerce_widget_shopping_cart_proceed_to_checkout()
{
	echo '<a href="/checkout" class="button checkout wc-forward">' . esc_html__('Checkout', 'woocommerce') . '</a>';
}

//add_filter('woocommerce_available_variation', function($available_variations, \WC_Product_Variable $variable, \WC_Product_Variation $variation) {
//    if (empty($available_variations['price_html'])) {
//        $available_variations['price_html'] = '<span class="price">' . $variation->get_price_html() . '</span>';
//    }
//
//    return $available_variations;
//}, 10, 3);
add_filter('woocommerce_show_variation_price',      function() { return TRUE;});
