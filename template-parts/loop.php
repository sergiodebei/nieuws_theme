<div class="row articles">
	<?php if (have_posts()) : while (have_posts()) : the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content', get_post_format() );?>

	<?php endwhile; ?>

	<?php else : ?>
		<p><?php _e( 'Helaas, er zijn geen artikelen beschikbaar binnen deze selectie.'); ?></p>

	<?php endif; ?>
</div>