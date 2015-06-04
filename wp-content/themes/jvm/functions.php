<?php
/**
 * functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage jvm
 * @since jvm 1.0
 */

/**
 * Set custom post item
 *
 * @see archertroy_custom_post_item()
 *
 * @since Archer Troy 1.0
 */

function archertroy_setup(){
  /*
   * Enable support for Thumbnails.
   * See https://codex.wordpress.org/Post_Formats
   */
  add_theme_support('post-thumbnails');

  /*
   * Enable support for Automatic feed.
   * See https://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'automatic-feed-links' );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );

  /*
   * Enable support for Post Formats.
   * See https://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
  ) );
}
add_action( 'init', 'archertroy_setup' );


function archertroy_custom_post_item() {
  $labels = array(
    'name'               => _x( 'Items', 'post type general name' ),
    'singular_name'      => _x( 'Item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'item' ),
    'add_new_item'       => __( 'Add New Item' ),
    'edit_item'          => __( 'Edit Item' ),
    'new_item'           => __( 'New Item' ),
    'all_items'          => __( 'All Items' ),
    'view_item'          => __( 'View Item' ),
    'search_items'       => __( 'Search Items' ),
    'not_found'          => __( 'No items found' ),
    'not_found_in_trash' => __( 'No items found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Items'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Items customizados para la generación de contenido',
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'has_archive'   => true,
    'taxonomies' => array('post_tag'),
  );
  register_post_type( 'item', $args ); 
}
add_action( 'init', 'archertroy_custom_post_item' );


function archertroy_custom_taxonomies_item() {
  $labels = array(
    'name'              => _x( 'Item Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Item Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Item Categories' ),
    'all_items'         => __( 'All Item Categories' ),
    'parent_item'       => __( 'Parent Item Category' ),
    'parent_item_colon' => __( 'Parent Item Category:' ),
    'edit_item'         => __( 'Edit Item Category' ), 
    'update_item'       => __( 'Update Item Category' ),
    'add_new_item'      => __( 'Add New Item Category' ),
    'new_item_name'     => __( 'New Item Category' ),
    'menu_name'         => __( 'Item Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'product_category', 'item', $args );
}
add_action( 'init', 'archertroy_custom_taxonomies_item', 0 );

/**
*
* Returns if the current document is blog or news feed
*
**/

function blog_or_news_feed () {
  return strpos($_SERVER["REQUEST_URI"],'blog') !== false || strpos($_SERVER["REQUEST_URI"],'noticia') !== false;
}

function is_blog () {
  return strpos($_SERVER["REQUEST_URI"],'blog') !== false;
}

/* Get the post caption -  https://wordpress.org/support/topic/display-caption-with-the_post_thumbnail */

function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    if (blog_or_news_feed()) {
      // http://codex.wordpress.org/Formatting_Date_and_Time
      // día # (d) | mes nombre completo (F) | año completo (Y)
      // the_date();
      // 
      echo "<span class='caption-title'>" . $thumbnail_image[0]->post_excerpt . "</span>" . "<span class='caption-date'>" .  date_i18n( 'd F Y', strtotime( $thumbnail_image[0]->post_date ) )  . "</span>";
    } else {
      echo "<span>" . $thumbnail_image[0]->post_excerpt. "</span>";
    }
    
  }
}

/* Functions to retrieve custom fields to customize template */

function the_post_video($key = "Video") {
  global $post;

  print_r(get_post_meta($post->ID, $key, true));
  
}

function the_post_slider_image($key = "Imagen") {
  global $post;

  print_r(get_post_meta($post->ID, $key, false));
  
}
?>