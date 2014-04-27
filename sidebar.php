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
  </div>
  <div id="archives">
    <h3><?php _e( 'Archives', 'dexter' ); ?></h3>
	<ul>
	  <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
	</ul>
  </div>
  <div id="meta">
    <h3><?php _e( 'Meta', 'dexter' ); ?></h3>
	<ul>
	  <?php wp_register(); ?>
	  <li><?php wp_loginout(); ?></li>
	  <?php wp_meta(); ?>
	</ul>
  </div>
<?php endif; ?>
</div>