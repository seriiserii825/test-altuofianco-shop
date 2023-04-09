<?php
$green_number = get_field('green_number', 'option');
$partner_url = get_field('partner_url', 'option');
$opening_times = get_field('opening_times', 'option');
$social_links = get_field('social_links', 'option');
?>
<div class="header-info">
    <ul class="main-header__contacts">
        <li>
            <span>Vai al sito di </span>
            <a class="main-header__site" target="_blank"
               href="<?php echo $partner_url; ?>">Altuofianco</a>
        </li>
        <li>
            <span>Numero verde: </span>
            <a target="_blank"
               href="tel:<?php echo clear_phone($green_number); ?>"><?php echo $green_number; ?></a>
        </li>
        <li>
            <?php foreach ($opening_times as $item) : ?>
                <span><?php echo $item['title']; ?></span>
            <?php endforeach; ?>
        </li>
    </ul>
    <ul class="main-header__socials">
        <?php foreach ($social_links as $link) : ?>
            <?php
            $image = $link['image'];
            $url = $link['url'];
            ?>
            <li>
                <a target="_blank" href="<?php echo $url; ?>">
                    <img src="<?php echo $image; ?>" alt="">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
