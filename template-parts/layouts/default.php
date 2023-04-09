<?php
$home = get_field('home');
$title = $home['title'];
$subtitle = $home['subtitle'];
$text = $home['text'];
$items = $home['items'];
$btn_text = $home['btn_text'];
$btn_url = $home['btn_url'];
$image = $home['image'];
?>

<div class="home">
  <h2 class="home__title"><?php echo $title; ?></h2>
  <h3 class="home__subtitle"><?php echo $subtitle; ?></h3>
  <div class="home__text"><?php echo $text; ?></div>
  <a href="<?php echo $btn_url; ?>" class="home__btn"><?php echo $btn_text; ?></a>
  <div class="home__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
</div>
