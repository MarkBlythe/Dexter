<?php
/**
 * This is the default page template.
 * @package Dexter
 */
get_header();?>
<section id="content">
  <div class="inner">
    <?php while (have_posts()) : the_post();?>
      <?php the_content();?>
    <?php endwhile;?>
  </div>
</section>
<?php get_footer();?>