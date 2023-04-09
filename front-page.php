<?php

/**
 * Template Name: Front page
 */
get_header()
?>
    <div id="site-wrapper">
        <?php require_once __DIR__ . '/template-parts/home-intro.php'; ?>
<!--        <div class="main-app">-->
<!--            --><?php //echo do_shortcode('[main-app]'); ?>
<!--        </div>-->
        <!--    --><?php //require_once __DIR__ . '/template-parts/features.php'; ?>
        <!--	--><?php //require_once __DIR__ . '/template-parts/product-categories-custom.php'; ?>
        <!--	--><?php //require_once __DIR__ . '/template-parts/about-block.php'; ?>
    </div>
<?php echo get_template_part('template-parts/home/agent');?>
<?php get_footer(); ?>

