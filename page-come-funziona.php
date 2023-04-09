<?php
get_header();
?>
<?php
$page_intro = get_field('page_intro');
$title = $page_intro['title'];
$subtitle = $page_intro['subtitle'];
$image = $page_intro['image'];
$features = get_field('features', 'options');
?>
<div class="page-how-it-works">
    <?php require_once __DIR__ . '/components/page-intro.php'; ?>
    <?php pageIntroComponent($title, $image, $subtitle); ?>
    <div class="container">
        <div class="features-works">
            <?php foreach ($features as $item): ?>
                <?php
                $background_color = $item['background_color'];
                ?>
                <div class="features-works__item <?php echo $background_color; ?>">
                    <h2 class="features-works__title"><?php echo $item['titolo']; ?></h2>
                    <div class="features-works__wrap">
                        <?php
                        $image = $item['image'];
                        $text = $item['text'];
                        ?>
                        <div class="features-works__img">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="features-works__content"><?php echo $text; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (have_rows('accordion')): ?>
            <h2 class="accordion__main-title">Domande Frequenti</h2>
            <div class="accordion">
                <?php $i = 1;
                while (have_rows('accordion')) : the_row(); ?><?php $class = ($i === 1) ? 'active' : ''; ?>
                    <div class="accordion__item <?php echo $class; ?>">
                        <h3 class="accordion__header">
                            <span><?php the_sub_field('title'); ?></span>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 1L11 11L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </h3>
                        <div class="accordion__content">
                            <?php echo get_sub_field('text'); ?>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
<?php get_footer(); ?>
