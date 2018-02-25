<?php

/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );

/* Add svg image support */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Extend WordPress search to include custom fields
 
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

// Modify the search query with posts_where

function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

// Prevent duplicates

function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/**
 * Get first paragraph from a WordPress post. Use inside the Loop.
 *
 * @return string
 */
function get_first_paragraph(){
    global $post;
    
    $str = wpautop( get_the_content() );
    $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
    $str = strip_tags($str, '<a><strong><em>');
    return '<p>' . $str . '</p>';
}

/**
 * Enqueue scripts and styles.
 */
function freshtheme_scripts() {

	// wp_enqueue_style( 'freshtheme-custom-style', get_template_directory_uri(). '/css/css_vendor/custom.css');
    wp_enqueue_style( 'freshtheme-css-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'freshtheme-css-slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
    wp_enqueue_style( 'freshtheme-css-fslick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css' );
	wp_enqueue_style( 'freshtheme-style', get_stylesheet_uri() );

	// name-of-the-script, url-of-the-script, array-of-script-the-script-depends-on, script-version-number, if-the-script-needs-to-be-placed-before-the-end-of-the-body
	wp_enqueue_script( 'freshtheme-js-jquery', get_template_directory_uri() . '/js/js_vendor/jquery-1.11.2.min.js', array(), '', '' );
    // wp_enqueue_script( 'freshtheme-js-blazy', 'https://cdn.jsdelivr.net/blazy/latest/blazy.min.js', null, null, true );
    wp_enqueue_script( 'freshtheme-js-slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', null, null, true );
    wp_enqueue_script( 'freshtheme-js-slider', get_template_directory_uri() . '/js/js_resources/bp_slider.js', array(), '', '' );
    // wp_enqueue_script( 'freshtheme-js-lazyload', get_template_directory_uri() . '/js/js_resources/bp_lazyload_settings.js', array(), '', '' );
    // wp_enqueue_script( 'freshtheme-js-fixheader', get_template_directory_uri() . '/js/js_resources/bp_fix_header.js', array(), '', '' );
	wp_enqueue_script( 'freshtheme-main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'freshtheme_scripts' );

// Add a Custom Dashboard Logo
function wpb_custom_logo() {
echo '
    <style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item{
        background-color: #f0f0f0;
    }
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
        background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/favicon.png) !important;
        background-position: center;
        background-repeat: no-repeat;
        color:rgba(0, 0, 0, 0);
        background-size: cover;
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
        background-position: 0 0;
    }
    </style>
';
}
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

//to add extra menus
function register_my_menus() {
    register_nav_menus(
        array(
          'primary-menu' => __( 'Primary menu' ),
          'filter-menu' => __( 'Filter Menu' ),
          'links-menu' => __( 'Links Menu' ),
          'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function create_post_type() {
  register_post_type( 'pr_slider',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'slide' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-image-flip-horizontal',
      'can_export' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

//to avoid the research to be also in custom post type
function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post','page'));
    }
 
  return $query;
}
 
add_filter('pre_get_posts','searchfilter');

//to add excerpts to pages
add_post_type_support( 'page', 'excerpt' );