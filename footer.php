<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Service
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http//aber.vn/', 'wp-service' ) ); ?>"><?php printf( esc_html__( '&copy; 2016 by %s', 'wp-service' ), 'Aber Academy' ); ?></a>
			<!-- <span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wp-service' ), 'wp-service', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
