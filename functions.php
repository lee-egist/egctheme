<?php
/**
* Ericks Theme functions and definitions
*
* @package egctheme
*/

if( ! function_exists( 'egctheme_setup' ) ) :

  function egctheme_setup() {

    /**
    * Add default posts and comments RSS feed links to head
    */
    add_theme_support( 'automatic-feed-links' );

    /**
    * Enable support for Post Thumbnails
    */
    add_theme_support( 'post-thumbnails' );

    /**
    * Enable support for post formats
    */
    add_theme_support( 'post-formats', array( 'image', 'gallery', 'video') );

}

endif; //egctheme_setup
add_action( 'after_setup_theme', 'egctheme_setup' );

/**
* Enqueue script and styless
*/
function egctheme_script_and_styles() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'egctheme_script_and_styles');
