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
    <?php get_sidebar();?>
    <div id="container">
      <h1>News</h1>
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
      <?php endwhile;?>
    </div>
    <div class="clear"></div>
  </div>
</section>
<?php get_footer();?>