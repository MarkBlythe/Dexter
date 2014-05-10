<?php
/**
 * This is the template for displaying all single posts.
 * @package Dexter
 */
get_header(); ?>
<section id="content">
  <div class="inner">
    <h1><?php the_title();?></h1>
    <?php while ( have_posts() ) : the_post(); ?>
    <article class="detail">
      <?php the_post_thumbnail();?>
      <?php the_content();?>
    </article>
    <?php endwhile;?>
  </div>
</section>
<?php // Get comments template
  //if ( comments_open() || '0' != get_comments_number() ) :
  	//comments_template();
  //endif;
?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
