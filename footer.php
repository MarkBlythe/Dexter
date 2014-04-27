<?php
/**
 * This is the footer template for all pages.
 * @package Dexter
 */
?>
<footer class="footer">
  <div class="inner">
    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dexter' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dexter' ), 'WordPress' ); ?></a>
	<span class="sep"> | </span>
	<?php printf( __( 'Theme: %1$s by %2$s.', 'dexter' ), 'Dexter', '<a href="http://markblythe.co.uk" rel="designer">Mark Blythe</a>' ); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
