<?php get_header(); ?>
  <!-- Stuff will go here -->
  <?php
/**
* Front to the Wordpress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/

/**
* Tells WordPress to load the WordPress Theme and output it.
*
* @var bool
*/
define('WP_USE_THEM', true);

// Loads the WordPress Enviroment and Template

/**
*
* Loads the WordPress enviroment and template.
*
* @package WordPress
*/
if ( !isset( $wp_did_header) ) {
  // code...
  $wp_did_header = true;

  require_once( dirname(__FILE__) . '/wp-load.php' );

  wp();

  require_once(ABSPATH . WPINC . '/template-loader.php' );
}
?>

<?php get_footer(); ?>
