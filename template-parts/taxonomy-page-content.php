<div class="taxonomy-page__content">
    <?php
    $term = get_queried_object();
    $term_id = $term->term_id;
    $products_id = get_field('products_id', 70);
    $products_array_of_ids = explode(',', (string)$products_id);
    ?>
    <div class="taxonomy__loop">
        <?php
        if (!function_exists('wc_get_products')) {
            return;
        }

        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1; // if your custom loop is on a static front page then check for the query var 'page' instead of 'paged', see https://developer.wordpress.org/reference/classes/wp_query/#pagination-parameters
        $ordering = WC()->query->get_catalog_ordering_args();
        $ordering['orderby'] = array_shift(explode(' ', $ordering['orderby']));
        $ordering['orderby'] = stristr($ordering['orderby'], 'price') ? 'meta_value_num' : $ordering['orderby'];
        $products_per_page = apply_filters('loop_shop_per_page', wc_get_default_products_per_row() * wc_get_default_product_rows_per_page());


        $products_attributes = get_the_ID() === 70
            ?
            array(
                'status' => 'publish',
                'limit' => $products_per_page,
                'page' => $paged,
                'paginate' => true,
                'return' => 'ids',
                'orderby' => 'name',
                'order' => $ordering['order'],
                'posts_per_page' => 20,
                'exclude' => $products_array_of_ids
            )
            : array(
                'status' => 'publish',
                'limit' => $products_per_page,
                'page' => $paged,
                'paginate' => true,
                'return' => 'ids',
                'orderby' => $ordering['orderby'],
                'order' => $ordering['order'],
                'posts_per_page' => 20,
                'exclude' => $products_array_of_ids,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                        'terms' => $term_id,
                    ),
                )
            );

        $products_ids = wc_get_products($products_attributes);

        wc_set_loop_prop('current_page', $paged);
        wc_set_loop_prop('is_paginated', wc_string_to_bool(true));
        wc_set_loop_prop('page_template', get_page_template_slug());
        wc_set_loop_prop('per_page', $products_per_page);
        wc_set_loop_prop('total', $products_ids->total);
        wc_set_loop_prop('total_pages', $products_ids->max_num_pages);

        if ($products_ids) {
            do_action('woocommerce_before_shop_loop');
            woocommerce_product_loop_start();
            foreach ($products_ids->products as $featured_product) {
                //                $product = wc_get_product();
                //                vardump($product->get_type());
                //                $product = new WC_Product_Variable($featured_product);
                //                vardump($product);
                //                vardump($product->get_type());
                //                vardump($product->getType());
                //                $product = new WC_Product($featured_product);
                //                vardump($product->get_type());
                //                $type = $product->get_type();

                $post_object = get_post($featured_product);
                setup_postdata($GLOBALS['post'] = &$post_object);
                wc_get_template_part('content', 'product');
            }
            wp_reset_postdata();
            woocommerce_product_loop_end();
            do_action('woocommerce_after_shop_loop');
        } else {
            do_action('woocommerce_no_products_found');
        } ?>
    </div>
</div>