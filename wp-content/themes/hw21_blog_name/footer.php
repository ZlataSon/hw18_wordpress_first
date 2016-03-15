<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HW21_blog_name
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">

			<div class="site-info">
				<p class="copy"><span class="fa fa-copyright"></span> Copyright <?php echo date('Y'); ?></p>
			</div><!-- .site-info -->

			<div class="social">

			<?php echo do_shortcode("[ishare_buttons]"); ?>

			</div>

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
