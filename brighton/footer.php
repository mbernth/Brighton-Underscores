<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brighton
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        
        <?php if ( is_active_sidebar( 'footer-1' ) && is_active_sidebar( 'footer-2' ) ) : ?>
        		<p>Footer 1 and 2 active</p>
            <?php elseif ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ) : ?>
            	<p>Footer 1 or 2 is active</p>
            <?php else : ?>
            	<p>Footer 1 and 2 are not active</p>
        <?php endif; ?>
        
    	<?php dynamic_sidebar( 'footer-1' ); ?>
        
        <?php dynamic_sidebar( 'footer-2' ); ?>
        
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brighton' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'brighton' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'brighton' ), 'brighton', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
