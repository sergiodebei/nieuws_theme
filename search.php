<?php
/**
 * The template for displaying search results pages
 * Template Name: Search
 * Description: Search 
 * @package Fresh Theme
 */

get_header(); ?>

<?php
	// $values = get_field( 'page_header' );
?>

<section class="single_page_header" style="background-image: url('<?php if ( $values ) { echo get_field("page_header"); } else { bloginfo( 'template_url' ); ?>/img/generic_header.jpg<?php } ?>');">
</section>

<section class="searchpage">
	<div class="container">
		<?php
			if ( have_posts() ) : ?>

				<h2 class="main_title"><?php printf( esc_html__( 'Zoekresultaten: %s', 'freshtheme' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

				<div class="row articles">

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						 // get_template_part( 'template-parts/content', 'search' );
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					?>

				</div>

				<?php 
					else :
					// get_template_part( 'template-parts/content', 'none' );
				?>

				<h2 class="main_title"><?php printf( esc_html__( 'Zoekresultaten: %s', 'freshtheme' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				<p class="main_subtitle">Helaas, wij hebben geen resultaten kunnen vinden. Probeer een ander zoekwoord, of ontdek een van de onderstaande artikelen.</p>

				<?php

				endif;
				wp_reset_postdata();

				get_search_form();

				// the_widget( 'WP_Widget_Recent_Posts', array('number' => 3, 'title' => 'Recente artikelen'), $args );
				// the_widget( 'WP_Widget_Recent_Posts');
				?>

				<h2 class="main_title">Recente artikelen</h2>

				<?php locate_template( 'template-parts/loop_recent_articles.php', true ); ?>

	</div>
</section>

<?php
get_footer();
