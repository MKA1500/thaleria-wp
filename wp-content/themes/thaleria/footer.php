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

<!-- Footer -->
<footer class="footer bg-royal-blue">
	<div class="container text-white">
		<div class="row gap-y align-items-center">
			<div class="col-md-3 text-center text-md-left">
				<a href="<?php echo esc_url( $homeUrl ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/thaleria-logo-white.png" alt="logo"></a>
			</div>
			<div class="col-md-6">
				<div class="nav nav-center footer-menu">
					<?php wp_nav_menu( array( 'menu' => 'menu2' ) ); ?>
				</div>
			</div>
			<div class="col-md-3 text-center text-md-right">
				<small>Thaleria™ 2019. All rights reserved.</small>
			</div>
		</div>
	</div>
</footer><!-- /.footer -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
