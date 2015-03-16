<?php

// enqueue styles
if( !function_exists("wp_bootstrap_theme_styles") ) {
  function wp_bootstrap_theme_styles() {

    // For child themes
    wp_register_style( 'wpbs-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'wpbs-style' );
  }
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_theme_styles' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function homepage_slider() { ?>
  <div class="ct-carousel">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php
          $counter = 0;
          while ( have_rows('ct_image') ) : the_row(); ?>
            <li data-target="#carousel"
              data-slide-to="<?php echo $counter; ?>"
              class="<?php echo $counter++ === 0 ? 'active': ''; ?>"></li>
          <?php endwhile; ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php
        if( have_rows('ct_image') ): ?>
          <?php $counter = 0;
            while ( have_rows('ct_image') ) : the_row();
              $ct_image = get_sub_field('image'); ?>
              <div class="item<?php echo $counter++ === 0 ? ' active': ''; ?>">
                <img class="img-responsive" src="<?php echo $ct_image; ?>" alt="...">
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php }
