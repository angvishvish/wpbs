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
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?> class="wpbs-post">
        <h3 class="wpbs-title">
          <a href="<?php the_permalink(); ?>" class="wpbs-title"><?php the_title(); ?></a>
        </h3>
        <p class="wpbs-desc">
          <?php the_content( __("Read more &raquo;","wpbs") ); ?>
        </p>
      </article>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer();
