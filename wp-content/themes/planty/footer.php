<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">

	<div class="section-inner">

		<div class="footer-navigation-wrapper">

			<?php if ( has_nav_menu( 'footer' ) ) { ?>

			<nav class="footer-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'footer', 'twentytwenty' ); ?>">

				<ul class="footer-menu reset-list-style">

				<?php
				if ( has_nav_menu( 'footer' ) ) {

					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'footer',
						)
					);

				} 
			}
			?>

			</ul>

			</nav> <!-- .footer-menu-wrapper -->
		
		</div>	<!-- .footer-navigation-wrappe -->

	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
