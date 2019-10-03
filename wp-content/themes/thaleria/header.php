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
	<header id="masthead" class="site-header">
		<div class="inner-header container">
			<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img
								id="logoWhite"
								class="logo logo-white"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-white.png"/>
							<img
								id="logoColor"
								class="logo logo-color"
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-color.png"/>
						</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mktheme' ); ?></button> -->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
			<a class="mobileButton" id="navToggleMobile">
          <span class="mobileButton__stripe"></span>
          <span class="mobileButton__stripe"></span>
          <span class="mobileButton__stripe"></span>
      </a>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
