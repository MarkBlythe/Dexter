<?php
/**
 * This is the template for displaying Archive pages.
 * @package Dexter
 */
get_header(); ?>
<section id="content">
  <div class="inner">
    <?php if ( have_posts() ) :?>
      <h1>
		<?php
		  if ( is_category() ) :
		  	single_cat_title();
		  elseif ( is_tag() ) :
		  	single_tag_title();
		  elseif ( is_author() ) :
		  	printf( __( 'Author: %s', 'dexter' ), get_the_author());
		  elseif ( is_day() ) :
		  	printf( __( 'Day: %s', 'dexter' ), get_the_date());
		  elseif ( is_month() ) :
		  	printf( __( 'Month: %s', 'dexter' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'dexter' )));
		  elseif ( is_year() ) :
		  	printf( __( 'Year: %s', 'dexter' ), get_the_date( _x( 'Y', 'yearly archives date format', 'dexter' )));
		  elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
		  	_e( 'Asides', 'dexter' );
		  elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
		  	_e( 'Galleries', 'dexter');
		  elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
		  	_e( 'Images', 'dexter');
		  elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
		  	_e( 'Videos', 'dexter' );
		  elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
		  	_e( 'Quotes', 'dexter' );
		  elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
		  	_e( 'Links', 'dexter' );
		  elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
		  	_e( 'Statuses', 'dexter' );
		  elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
		  	_e( 'Audios', 'dexter' );
		  elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
		  	_e( 'Chats', 'dexter' );
		  else :
		  	_e( 'Archives', 'dexter' );
		  endif;
		?>
	  </h1>
	  <?php while ( have_posts() ) : the_post(); ?>
  	    <?php the_content();?>
	  <?php endwhile;?>
	<?php endif;?>
  </div>
</section>
<?php //get_sidebar();?>
<?php get_footer();?>