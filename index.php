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
      <?php the_content();?>
    <?php endwhile;?>
  </div>
</section>
<?php //get_sidebar();?>
<?php get_footer();?>