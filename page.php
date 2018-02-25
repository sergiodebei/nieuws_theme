<?php
/**
 * The main template file.
 * Template Name: Page
 * Description: Page
 * @package Fresh Theme
 */

get_header(); ?>

	<?php
		$values = get_field( 'page_header' );
	?>

 	<section class="single_page_header" style="background-image: url('<?php if ( $values ) { echo get_field("page_header"); } else { bloginfo( 'template_url' ); ?>/img/generic_header.jpg<?php } ?>');">
	</section>

	<div class="container">

		<article id="post-<?php the_ID(); ?>" class="single_article_view <?php post_class(); ?>">
			<h1 class="single_article_title">
			    <?php the_title(); ?>
			</h1>
			<div class="the_content">
				<?php
					echo $post->post_content;
			        // the_content();
				?>
			</div>

	        <div class="single_article_toolbar">
	            <div class="single_article_toolbar_prev"></div>
	            <div class="single_article_toolbar_categories">
	                <a href="<?php bloginfo('url'); ?>" class="button button_custom">Terug naar de homepagina</a>
	            </div>
	            <div class="single_article_toolbar_next"></div>

	        </div>

		</article>
		
	</div>


<?php
get_footer();

