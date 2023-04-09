<div class="home-intro">
    <?php
    $home_intro = get_field('home_intro');
    $image = $home_intro['image'];
    $title = $home_intro['title'];
    $title_logged = $home_intro['title_logged'];
    $text = $home_intro['text'];
    $text_logged = $home_intro['text_logged'];
    ?>
    <img class="home-intro__img" src="<?php echo $image; ?>" alt="">
    <div class="home-intro__content">
        <h1 class="home-intro__title not-logged"><?php echo $title; ?></h1>
        <h1 class="home-intro__title logged"><?php echo $title_logged; ?></h1>
        <div class="home-intro__text not-logged"><?php echo $text; ?></div>
        <div class="home-intro__text logged"><?php echo $text_logged; ?></div>
    </div>
</div>
