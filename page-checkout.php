<?php
get_header();
?>
<div class="page-checkout">
    <div class="container">
        <h1 class="page-checkout__title"><?php the_title(); ?></h1>
		<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
			<?php the_content(); ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
