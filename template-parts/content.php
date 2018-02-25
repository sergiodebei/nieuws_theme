<?php
/**
 * Template part for displaying posts.
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

<!-- <div class="col-m-4"> -->
    <article id="post-<?php the_ID(); ?>" class="col-m-4 single_article <?php post_class(); ?>">
        <a href="<?php echo get_permalink( $post->ID ); ?>" class="article_image" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>');"></a>
        <div class="article_details">
            <a class="article_category article_category_<?php echo $txt; ?>" href="<?php get_site_url(); ?>/category/categorieen/<?php echo $txt; ?>/">
                <?php echo ucfirst($txt); ?>
            </a>
            <div class="article_date"><?php echo get_the_date('F Y'); ?></div>
        </div>
        <div class="article_summary_content">
            <div class="article_summary_title">
                <a href="<?php echo get_permalink( $post->ID ); ?>"><h2><?php the_title(); ?></h2></a>
            </div>
            <div class="article_summary_shortly">
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
        <div class="article_summary_button_container">
            <a href="<?php echo get_permalink( $post->ID ); ?>" class="button article_summary_link">Bekijk bericht</a>
        </div>
    </article>
<!-- </div> -->