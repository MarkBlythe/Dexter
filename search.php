<?php
/**
 * The template for displaying Search Results.
 * @package Dexter
 */
get_header();?>
<section id="content">
  <div class="inner">
  <h1><?php printf( __( 'Search Results for: %s', 'dexter' ), get_search_query()); ?></h1>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'search' ); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
<?php //get_sidebar();?>
<?php get_footer();?>