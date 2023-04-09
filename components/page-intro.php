<?php function pageIntroComponent($title = "", $image = "", $subtitle = "", $light = false)
{ ?>
    <div class="page-intro <?php echo $light ? "page-intro--light" : ""; ?>">
        <?php if ($image): ?>
            <img class="page-intro__img" src="<?php echo $image; ?>" alt="">
        <?php endif; ?>
        <?php if ($title): ?>
            <h1 class="page-intro__title"><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if ($subtitle): ?>
            <h2 class="page-intro__subtitle"><?php echo $subtitle; ?></h2>
        <?php endif; ?>
    </div>
<?php } ?>
