<?php
/**
 * The main template file.
 * This is the vital template file in any WordPress theme.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package Dexter
 */
get_header();?>
<section id="content">
  <div class="inner">
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="clearfix">
        <div class="image">
          <?php the_post_thumbnail('thumbnail');?>
        </div>
        <div class="text">
          <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
          <?php the_excerpt();?>
          <a href="<?php the_permalink();?>">Read More</a>
        </div>
      </article>
    <?php endwhile;?>
    <?php mb_pagination();?>
  </div>
</section>
<?php //get_sidebar();?>
<?php get_footer();?>