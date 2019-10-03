<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MKTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="secondary-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
			</div>
			<div class="footer-logo-container">
				<img src="<?php echo get_stylesheet_directory_uri() .'/assets/logo-white.png'; ?>" alt="Forte PR">
			</div>
			<div class="fb-wrap">
				<a href="https://www.facebook.com/fortePR/" target="_blank" title="Strona Forte PR na Facebooku">
					<i class="fab fa-facebook"></i>
				</a>
			</div>
			<?php	$url = home_url(); ?>

			<div class="copy">&copy; 2019 &nbsp;&nbsp; | &nbsp;&nbsp; Forte PR &nbsp;&nbsp; | &nbsp;&nbsp; <a href="<?php echo esc_url( $url ) . '\\/polityka-prywatnosci'; ?>" class="nav-item" target="_blank">Polityka prywatności</a></div>
		</div><!-- .site-info -->
		<button id="return-to-top" style="display: none;"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
