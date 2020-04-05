<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package thaleria
 */

get_header();
?>

<main class="main-content bg-royal-blue">
  <div class="container error-page-content thaleria-default-template">
		<!-- <div class="error-page-content"> -->
			<h1>404</h1>
			<p>The content can't be found</p>
			<?php	$homeUrl = home_url(); ?>
			<a href="<?php echo esc_url( $homeUrl ); ?>">
				<img class="logo-light" src="<?php echo get_template_directory_uri(); ?>/img/logo/thaleria-logo-white.png" alt="logo">
			</a>
		<!-- </div> -->
	</div>
</div><!-- #primary -->

<?php
get_footer();
