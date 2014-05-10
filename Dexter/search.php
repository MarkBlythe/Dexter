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
      <article>
        <div class="image">
          <?php the_post_thumbnail('thumbnail');?>
        </div>
        <div class="text">
          <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
          <?php the_excerpt();?>
          <a href="<?php the_permalink();?>">Read More</a>
        </div>
        <div class="clear"></div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
<?php //get_sidebar();?>
<?php get_footer();?>