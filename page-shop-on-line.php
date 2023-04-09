<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<div class="taxonomy-page">
    <?php
    $page_intro = get_field('page_intro', 70);
    $title = $page_intro['title'];
    $subtitle = $page_intro['subtitle'];
    $image = $page_intro['image'];
    ?>
    <?php require_once __DIR__ . '/components/page-intro.php'; ?>
    <?php pageIntroComponent($title, $image, $subtitle); ?>
    <div class="container">
        <div class="taxonomy-page__wrap">
            <?php require_once __DIR__ . '/template-parts/taxonomy-page-sidebar.php'; ?>
            <?php require_once __DIR__ . '/template-parts/taxonomy-page-content.php'; ?>
        </div>
    </div>
</div>
<?php get_footer('simple'); ?>