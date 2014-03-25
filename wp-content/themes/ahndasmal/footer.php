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
 */
?>
    	</div><!-- #main .wrapper -->
    	<footer id="colophon" role="contentinfo">
    		<div class="site-info">
    		    <?php do_action( 'twentytwelve_credits' ); ?>
    			<a href="<?php echo home_url() . "/?p=371"?>" title="Impressum>"><?php printf( __( 'Impressum', 'twentytwelve' )); ?></a>

    		</div><!-- .site-info -->
    	</footer><!-- #colophon -->
    </div><!-- #page -->
</div><!-- #pageContent -->

<?php wp_footer(); ?>
</body>
<?php include_once("analyticstracking.php") ?>
</html>