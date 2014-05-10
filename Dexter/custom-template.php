<?php
/**
 * Template Name: Custom Template
 * @package Dexter
 * Use this template for any custom page layouts. Remember to change the Template Name for each.
 * You can add as much content as you like to this basic example.
 */
get_header(); ?>
<section id="content">
  <div class="inner">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content();?>
    <?php endwhile;?>
  </div>
</section>
<?php get_footer(); ?>
