<div id="footer">
<div class="left">
<a href="<?php echo get_bloginfo('url'); ?>">Home</a>
<?php
  $args = array(
    'container' => false,
    'echo' => false,
    'items_wrap' => '%3$s',
    'depth' => 0,
    'before' => '&nbsp;&nbsp;|&nbsp;&nbsp;'
  );
  echo strip_tags(wp_nav_menu($args),'<a>');
?>

</div>
<div class="right">	
&copy;2013 All Rights Reserved <span class="blue">The Kosher Gourmet</span> &nbsp;&nbsp;l&nbsp;&nbsp; 416.781.9900 &nbsp;&nbsp;l&nbsp;&nbsp; Site Credits: <a href="http://www.parkmg.com">ParkMG</a>
</div>
  </div>
</div>
</body>
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
 * 
 * 
 */
?>