<?php
/**
 * This is the template for displaying Comments.
 * @package Dexter
 *
 * Check post / comments aren't password protected.
 */
 
 if ( post_password_required() ) {
 	return;
 }
?>

<section id="comments-area">
<?php if ( have_comments() ) : ?>
  <h3>Comments (<?php get_comments_number();?>)</h3>

  <ol class="comments">
    <?php wp_list_comments( array('style' => 'ol', 'short_ping' => true));?>
  </ol>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav">
    <ul>
      <li class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'dexter' ) ); ?></li>
	  <li class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'dexter' ) ); ?></li>
	</ul>
  </nav>
  <?php endif; ?>
<?php endif; // have_comments() ?>

<?php // Just incase comments are closed.
  if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		echo "<p>" . _e( 'Comments are closed.', 'dexter' ) . "</p>";
  endif; 
?>
<?php comment_form(); ?>
</section>
