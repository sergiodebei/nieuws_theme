<?php
/**
 * The main template file.
 * Template Name: Registreer Page
 * Description: Registreer Page
 * @package Fresh Theme
 */

get_header(); ?>

	<?php
		$values = get_field( 'page_header' );
	?>

	<script type="text/javascript">  
	    (function(d, s, id){ 
	        var js, cjs = d.getElementsByTagName(s)[0]; 
	        if (d.getElementById(id)) {return;} 
	        js = d.createElement(s); js.id = id; 
	        js.src = "//webform-console.pernod-ricard.io/sdk/iframe.min.js"; 
	        cjs.parentNode.insertBefore(js, cjs); 
	    }(document, 'script', 'pernodricard-pweb-sdk'));  

	    // This function will be called once the SDK has been successfully loaded. 
	    window.SDKpwebAsyncInit = function() { 
	        // Initialize any webform in the page. 
	        SDKpweb.init();  
	        // You can also execute any other function here. 
	        // console.log('foo'); 
	    };      
	</script>

 	<section class="single_page_header" style="background-image: url('<?php if ( $values ) { echo get_field("page_header"); } else { bloginfo( 'template_url' ); ?>/img/generic_header.jpg<?php } ?>');">
	</section>

	<div class="container">

		<article id="post-<?php the_ID(); ?>" class="single_article_view <?php post_class(); ?>">
			<h1 class="single_article_title" style="text-align: center;">
			    <?php the_title(); ?>
			</h1>
			<div class="the_content">
				<?php
					echo $post->post_content;
			        // the_content();
				?>
				<div class="loading" data-pr-webform-console-key="Netherlands-Corporate_newsletter-B2B webform" data-pr-webform-console-lang="nl">&nbsp;</div>
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

