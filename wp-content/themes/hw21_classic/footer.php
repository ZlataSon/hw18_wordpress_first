<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HW21_classic
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container-fluid">
		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			<button class="menu-toggle-f" aria-controls="footer-menu"
					aria-expanded="false"><span class="fa fa-navicon"></span></button>
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
		</nav><!-- #site-navigation -->

		<?php echo do_shortcode("[uptolike]"); ?>

		<div class="site-info">
			<p class="copy"><span class="fa fa-copyright"></span> Copyright <?php echo date('Y'); ?>
				<a href="<?php echo esc_url(__('https://wordpress.org/', 'hw21_classic')); ?>"><?php printf(esc_html__('by %s', 'hw21_classic'), 'WordPress'); ?></a>
			</p>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>