<?php
/**
 * The template for displaying 404 pages (not found)
 * The main template file.
 * @package Fresh Theme
 */

get_header(); ?>

<?php
	// $values = get_field( 'page_header' );
?>

<section class="single_page_header" style="background-image: url('<?php if ( $values ) { echo get_field("page_header"); } else { bloginfo( 'template_url' ); ?>/img/generic_header.jpg<?php } ?>');">
</section>

<section class="error-404 not-found">
	<div class="container">

		<h2 class="main_title">Sorry! Deze pagina is helaas niet meer beschikbaar …</h2>
		<p class="main_subtitle">Probeer één van de onderstaande links of gebruik de zoekfunctie.</p>

			<?php
				get_search_form();

				// the_widget( 'WP_Widget_Recent_Posts', array('number' => 3, 'title' => 'Recente arkilen'), $args );
			?>

		<h2 class="main_title">Recente artikelen</h2>

		<?php locate_template( 'template-parts/loop_recent_articles.php', true ); ?>

	</div>
</section><!-- .error-404 -->

<?php
get_footer();
