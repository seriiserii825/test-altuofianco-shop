<?php
get_header();
    $home_intro = get_field('home_intro');
?>
<div class="page-about">
    <?php
    $page_intro = get_field('page_intro');
    $title = $page_intro['title'];
    $subtitle = $page_intro['subtitle'];
    $image = $page_intro['image'];
    ?>
    <div class="page-about__intro">
        <?php require_once __DIR__ . '/components/page-intro.php'; ?>
        <?php pageIntroComponent($title, $image, $subtitle, true); ?>
    </div>
</div>
<?php get_footer(); ?>
