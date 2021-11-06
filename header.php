<?php
/**
* Erick's theme
*/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset=<?php bloginfo( 'charset' ); ?> />
    <meta name="viewport" content="width-device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- HTML5 SHIV for IE --><!-- If using Modernizr you can remove this script -->
    <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5"></script>
    <![endif]-->

    <?php wp_head(); ?> <!-- mandatory for WP & always locaed before </head> -->
  </head>
  <body <?php body_class(); ?>>

    <header class="site-header">
      <h1>
      <a href="<?php echo home_url(); ?>"> Ericks WP Theme Development
    </h1>
    </header>
