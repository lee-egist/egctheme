<?php get_header(); ?>
  <!-- Stuff will go here -->

  <!-- example of conditional tags -->
  <h1 class="archives-title"><?php
    if (is_day()) ) :
      printf(__( 'Daily Archives: %s', 'twentytwentyone'), '<span>' . get_the_date() . '</span>' );
    elseif ( is_month() ) :
      printf(__( 'Month Archives: %s', 'twentytwentyone'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'twentytwentyone') ) . '</span>' );
    elseif ( is_year() ) :
      printf( __( 'Yearly Archives: %s', 'twentytwentyone' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwentyone') ) . '</span>' );
    else :
      _e( 'Archives', 'twentytwentyone');
    endif;
    ?></h1>

<?php get_footer(); ?>
