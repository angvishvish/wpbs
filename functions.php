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
