<div class="taxonomy-page__sidebar">
    <div class="categories-list">
        <h2 class="categories-list__title title">I nostri prodotti </h2>
        <div class="categories-list__right">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                <g>
                    <path d="M630.8,497.3l317.1-330.7c35.4-36.9,34.1-95.5-2.8-130.8c-36.8-35.4-95.4-34.1-130.8,2.8L497.2,369.2L189.3,73.9c-36.8-35.4-95.4-34.1-130.8,2.7l-0.1,0.1c-35.3,36.9-34,95.4,2.8,130.7l308,295.3L52.1,833.4c-35.4,36.9-34.1,95.5,2.8,130.8c36.9,35.4,95.5,34.1,130.8-2.7l317.1-330.7l308,295.2c36.8,35.4,95.3,34.1,130.6-2.6l0.3-0.3c35.2-36.9,33.9-95.3-2.9-130.6L630.8,497.3z" />
                </g>
            </svg>
        </div>
        <?php
        $terms = get_terms('product_cat', [
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true
        ]); ?>
        <ul class="taxonomy-page__list categories-list__list">
            <li class="categories-list__list-item">
                <a href="/shop-on-line" class="shop-on-line">
                    <h2>Tutti prodotti</h2>
                </a>
            </li>
            <?php foreach ($terms as $term) : ?>
                <?php if ($term->parent === 0) : ?>
                    <li class="categories-list__list-item">

                        <?php
                        $term_id   = $term->term_id;
                        $term_name = $term->name;
                        ?>
                        <a class="<?php echo $term->slug; ?>" href="<?php echo get_term_link($term_id, 'product_cat'); ?>">
                            <h2><?php echo $term_name; ?></h2>
                        </a>

                        <?php
                        $catChildren = get_terms(array(
                            'taxonomy' => 'product_cat',
                            'parent'    => $term_id,
                            'hide_empty'    => false
                        ));

                        if (count($catChildren) > 0) { ?>
                            <ul class="categories-list__chld">
                                <?php foreach ($catChildren as $child) : ?>
                                    <li>

                                        <a class="<?php echo $child->slug; ?>" href="<?php echo get_term_link($child->term_id, 'product_cat'); ?>">
                                            <h2><?php echo $child->name; ?></h2>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>