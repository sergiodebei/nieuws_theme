<?php
	$the_query = new WP_Query( array(
		'posts_per_page' => 3,
		'order' => 'ASC'
	));
?>

<?php if ( $the_query->have_posts() ) : ?>

	<div class="row articles">

	  	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

	  	<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	</div>

<?php else : ?>
<?php endif; ?>