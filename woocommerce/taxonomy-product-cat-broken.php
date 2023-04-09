<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>
<div class="taxonomy-page">
    <div class="taxonomy-page__wrap">
        <div class="taxonomy-page__sidebar">
            <div class="categories-list">
                <div class="categories-list__right"></div>
				<?php
				$terms = get_terms( 'product_cat', [ 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => true ] ); ?>
                <ul class="taxonomy-page__list categories-list__list">
					<?php foreach ( $terms as $term ): ?>
						<?php if ( $term->parent === 0 ): ?>
                            <li>
								<?php
								$term_id   = $term->term_id;
								$term_name = $term->name;
								?>
                                <a class="<?php echo $term->slug; ?>" href="<?php echo get_term_link( $term_id, 'product_cat' ); ?>">
                                    <h2><?php echo $term_name; ?></h2>
                                </a>
                            </li>
						<?php endif; ?>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="taxonomy-page__content">
			<?php $term = get_queried_object(); ?>

            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a class="breadcrumb__link" href="<?php echo get_page_link( 72 ); ?>">
                        <h2 class="breadcrumb__title"><?php echo get_the_title( 72 ); ?></h2>
                    </a>
                </li>
                <li class="breadcrumb__item">
                    <h2 class="breadcrumb__title"><?php echo $term->name; ?></h2>
                </li>
            </ul>

            <h1 class="taxonomy-page__title"><?php echo $term->name; ?></h1>

            <div class="taxonomy__loop">
				<?php
				if ( woocommerce_product_loop() ) {
					/**
					 * Hook: woocommerce_before_shop_loop.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
					woocommerce_product_loop_start();
					?>
					<?php
					$term_id = $term->term_id;
					$args    = array(
						'post_type'      => 'product',
						'post_status'    => 'publish',
						//	                'ignore_sticky_posts' => 1,
						'posts_per_page' => - 1,
						'tax_query'      => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id', //This is optional, as it defaults to 'term_id'
								'terms'    => $term_id,
							),
						)
					); ?>
					<?php $products = new WP_Query( $args ); ?>
					<?php if ( $products->have_posts() ): ?>
						<?php while ( $products->have_posts() ): ?>
							<?php $products->the_post(); ?>
							<?php
							/**
							 * Hook: woocommerce_shop_loop.
							 */
							//							do_action( 'woocommerce_shop_loop' );
							wc_get_template_part( 'content', 'product' );
							?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<?php woocommerce_product_loop_end();
					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}
				/**
				 * Hook: woocommerce_after_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				//				do_action( 'woocommerce_after_main_content' ); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
