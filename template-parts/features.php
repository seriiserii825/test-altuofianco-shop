<?php if (have_rows('features', 'option')): ?>
    <div class="features">
        <?php $features_bg_img = get_field('features_background_image', 'option'); ?>
        <div class="line"></div>
        <div class="line line--short"></div>
        <div class="line"></div>
        <div class="line line--short"></div>
        <div class="line"></div>
        <div class="line line--short"></div>
        <div class="features__wrap">
            <?php while (have_rows('features', 'option')) : the_row(); ?>
                <div class="features__item">
                    <h2 class="features__title title"> <?php the_sub_field('titolo'); ?> </h2>
                    <div class="features__text">
                        <?php the_sub_field('testo'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php else: ?>
    <h3>Add features from Admin -> Acf Settings -> Features</h3>
<?php endif; ?>

