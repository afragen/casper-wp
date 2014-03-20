<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Casper
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		    <section class="copyright">&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &bull; Inspired by <a class="icon-ghost" href="http://ghost.org">Ghost</a>.</section>
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'casper' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'casper' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'casper' ), 'Casper', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</main><!-- /#content -->

</body>
</html>