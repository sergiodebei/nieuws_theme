<?php
/**
 * The template part for displaying single posts
 * @package Fresh Theme
 */
?>

<?php
    $new_cat = array();
    foreach(get_the_category() as $singlecat) {
        if (cat_is_ancestor_of(get_cat_ID( 'Categorieën' ), $singlecat)) {
            array_push($new_cat, $singlecat);
        }
    }
    foreach(($new_cat) as $singlecat) {
        $txt = $singlecat->slug;
    }
?>

<?php

if ( $prev = get_previous_post() ) {
   $prev_title = $prev->post_title;
}

if ( $next = get_next_post() ) {
   $next_title = $next->post_title;
}

 ?>

<div class="container">
    <article id="post-<?php the_ID(); ?>" class="single_article_view <?php post_class(); ?>">

        <h1 class="single_article_title">
            <?php the_title(); ?>
        </h1>
        <div class="single_article_date">

            <?php
                foreach(($new_cat) as $singlecat) {
                    $txt = $singlecat->slug;
                }
            ?>

            <?php echo get_the_date('d F Y'); ?> - <a class="single_article_date_cat" href="<?php get_site_url(); ?>/category/categorieen/<?php echo $txt; ?>/"><?php echo ucfirst($txt); ?></a>
        </div>
        <div class="the_content">
        	<?php
        		// echo $post->post_content;
                the_content();
        	?>
        </div>

        <div class="single_article_toolbar">
<!--             <a href="javascript:history.go(-1)" class="button button_toolbar bt_blue withicon">
                <i class="fa fa-chevron-left" aria-hidden="true"></i> Ga terug
            </a> -->
            <div class="single_article_toolbar_prev">
                <?php
                    if(get_next_post()){
                    ?>
                        <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="single_article_toolbar_link_wrapper">
                           <span class="single_article_toolbar_icon_wrapper"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                           <span class="single_article_toolbar_icon_title"><?php echo $next_title; ?></span>
                        </a>
                    <?php
                    }
                ?>
            </div>
            <div class="single_article_toolbar_categories">

                <a href="<?php bloginfo('url'); ?>" class="button button_custom">Alle artikelen</a>

            </div>
            <div class="single_article_toolbar_next">
                <?php
                    if(get_previous_post()){
                    ?>
                        <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="single_article_toolbar_link_wrapper">
                           <span class="single_article_toolbar_icon_title"><?php echo $prev_title; ?></span>
                           <span class="single_article_toolbar_icon_wrapper"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </a>
                    <?php
                    }
                ?>
            </div>

        </div>

    </article>

<!--     <a href="" class="button button_toolbar bt_blue withicon">
        <i class="fa fa-chevron-left" aria-hidden="true"></i> Alle artikelen
    </a> -->

</div>
