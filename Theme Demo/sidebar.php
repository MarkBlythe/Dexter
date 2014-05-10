<?php
/**
 * The Sidebar template. This is normally where theme widgets go.
 * @package Dexter
 */
?>
<div id="sidebar">
<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
  <div id="search">
    <?php get_search_form(); ?>
    <br /><br />
  </div>
  <div id="archives">
    <h3><?php _e( 'Archives', 'dexter' ); ?></h3>
	<ul>
	  <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
	</ul>
  </div>
<?php endif; ?>
</div>