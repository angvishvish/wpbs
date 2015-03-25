<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet/less" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/less/styles.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js"></script>
    <?php wp_head(); ?>

  </head>
  <body>
    
  <nav class="navbar navbar-default navbar-fixed-top navbar-wpbs">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand name</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <?php if(has_nav_menu('header-menu')) {
              wp_nav_menu( array('theme_location' => 'primary_menu', 'menu' => 'wpbs', 'container' => '', 'items_wrap' => '%3$s' ) );
            } else {
              echo '<li><a href="#">No menu assigned!</a></li>';
            }
          ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <main class="main-wrapper">
    <?php
      if ( is_front_page() ) {
        // homepage_slider();
      }?>
