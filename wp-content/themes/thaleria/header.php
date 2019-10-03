<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MKTheme
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header
		class="navbar navbar-expand-lg navbar-light navbar-stick-light bg-royal-blue"
		data-navbar="smart">
		<div class="container">
			<div class="navbar-left mr-4">
				<button class="navbar-toggler" type="button">&#9776;</button>
				<?php	$homeUrl = home_url(); ?>
				<a class="navbar-brand" href="<?php echo esc_url( $homeUrl ); ?>">
					<img class="logo-dark" src="assets/img/logo/thaleria-logo-blue.png" alt="logo">
					<img class="logo-light" src="assets/img/logo/thaleria-logo-white.png" alt="logo">
				</a>
			</div>
			<section class="navbar-mobile">
				<nav class="nav nav-navbar mr-auto">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav>
			</div>
		</header><!-- /.navbar -->

		<div id="content" class="site-content">
