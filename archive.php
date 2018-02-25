<?php
/**
 * Template Name: Archive
 * Description: Archive
 * The template for displaying archive pages
 * @package Fresh Theme
 */

get_header(); ?>

	<section id="toolbar">
	    <div class="container">
	        <div class="toolbar_container">
	            <div id="toolbar_title">
	                Nieuws <?php echo str_replace("Year: ", "", get_the_archive_title()); ?>
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