<?php

/**
 * Template Name: Privacy page
 */
get_header();
?>
<div class="page-privacy">
	<div class="page-intro ">
		<img class="page-intro__img" style="transform: translate(0px, 0px); opacity: 1;" src="/wp-content/uploads/2022/04/chi-siamo.jpg" alt="" />
		<h1 class="page-intro__title" style="transform: translate(0px, 0px); opacity: 1;">Informativa sulla Privacy &amp; Cookie Policy</h1>
	</div>
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>