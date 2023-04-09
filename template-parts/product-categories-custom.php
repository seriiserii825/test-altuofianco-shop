<div class="product-categories-custom">
    <?php
    $product_categories = get_terms('product_cat', [
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => true
    ]);
    ?>

    <div class="container">
        <ul>
            <li>
                <h2 class="product-categories-custom__main-title title">I nostri prodotti </h2>
                <div class="line"></div>
            </li>
            <?php foreach ($product_categories as $key => $category): ?>
                <?php $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true); ?>
                <li>
                    <a href="<?php echo get_term_link($category) ?>" class="product-categories-custom__link">
                        <?php imgR($thumbnail_id, '495'); ?>
                        <div class="product-categories-custom__footer">
                            <h3><?php echo $category->name; ?></h3>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
