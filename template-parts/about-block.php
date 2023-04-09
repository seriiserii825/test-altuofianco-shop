<?php
$about_block = get_field('about_us_group', 'option');
$title = $about_block['titolo'];
$image = $about_block['immagine'];
$image_bg = $about_block['immagine_for_content'];
$text = $about_block['testo'];
?>
<div class="about-block">
    <div class="line"></div>
    <div class="about-block__img">
        <img src="<?php echo $about_block['immagine']; ?>" alt="">
    </div>
    <div class="about-block__content">
        <h2 class="about-block__title title"><?php echo $about_block["titolo"]; ?></h2>
        <div class="about-block__body">
            <img src="<?php echo $image_bg; ?>" alt="">
            <div class="about-block__text"><?php echo $about_block["testo"]; ?></div>
        </div>
    </div>
</div>

