<?php
/**
 * The main template file.
 * Template Name: Home/Blog
 * Description: Home/Blog
 * @package Fresh Theme
 */

get_header(); ?>

    <?php if ( Elementor\Plugin::$instance->editor->is_edit_mode() || Elementor\Plugin::$instance->preview->is_preview_mode() ) { ?>
    <?php } else {?>

	        <section id="theslider">
	            <div class="slider">

	                <?php
	                    $args = array( 'post_type' => 'pr_slider');
	                    $loop = new WP_Query( $args );
	                    while ( $loop->have_posts() ) : $loop->the_post();
	                ?>
	                        <div class="slide" style="background-image: url('<?php echo get_field("background"); ?>');">
	                            <div class="todark"></div>
	                            <div class="container">
	                                <div class="slider_container">
	                                    <div class="row">
	                                        <div class="col-m-6">
	                                            <div class="slider_text">
	                                                <h1><?php the_title(); ?></h1>
	                                                <p><?php the_content(); ?></p>
	                                                <a href="<?php echo get_field("link"); ?>" class="button white"><?php echo get_field("button_text"); ?></a>
	                                            </div>
	                                        </div>
	                                        <div class="col-m-6">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                <?php
	                    endwhile;
	                    wp_reset_query();
	                 ?>

	            </div>
	        </section>

	<?php }?>

	<section id="toolbar">
	    <div class="container">
	        <div class="toolbar_container">
	            <div id="toolbar_title">
	                Laatste nieuws
	            </div>
	            <div id="toolbar_tools">
	                <div class="toolbar_tools_filter">
	                	<?php wp_nav_menu(
        				     array(
        		    			'container'=> '',
        		    			'container_class'=> '',
        		    			'container_id'=> '',
        		    			'menu_class'=> '',
        		    			'menu_id'=> '',
        		    			'theme_location' => 'filter-menu'
        				     ));?>
	                </div>
	                <div class="toolbar_tools_search">
	                    <form class="search" method="get" action="" role="search" autocomplete="off">
	                        <div class="search-wrapper">
	                            <input class="search-input" type="search" name="s" placeholder="Search">
	                            <button class="search-submit" type="submit" role="button"></button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<section id="articles_home">
	    <div class="container">

        	<?php locate_template( 'template-parts/loop.php', true ); ?>

	        <?php
	        	locate_template( 'template-parts/pagination.php', true );
	        ?>
	    </div>
	</section>

<?php
get_footer();

