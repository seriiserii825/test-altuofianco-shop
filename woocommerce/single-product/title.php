<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $product;
global $post;
$terms     = get_the_terms( $post->ID, 'product_cat' );
$term_name = '';
$term_id   = null;
foreach ( $terms as $term ) {
	$term_name = $term->name;
	$term_id   = $term->term_id;
	break;
}
?>
<?php
the_title( '<h1 class="product_title entry-title">', '</h1>' );
// vardump($post);
$short_description = apply_filters( 'woocommerce_short_description', $post->post_content );
if ( ! $short_description ) {
	return;
}
?>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>
