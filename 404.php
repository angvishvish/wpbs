<?php
/**
 * Template Name: Home page
 *
 * @package wpbs
 *
 * @since wpbs
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>Page not found</h1>
      <h4><a href="<?php echo get_home_url(); ?>">Go back to home</a></h4>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>

<?php get_footer();
