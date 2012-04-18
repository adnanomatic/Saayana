<?php
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'saayana_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'saayana' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'saayana' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'saayana' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'saayana' ), 'Saayana', '<a href="http://adnanomatic.com/" rel="designer">Adnanomatic</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>