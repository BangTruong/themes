<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Service
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-service' ); ?></a>

	<div class="header-cover">
		<header id="masthead" class="site-header" role="banner">

			<div class="become-instructor">
				<div class="instructor">
						<a href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Become an Instructor</a>
				</div>
				<div class="nav">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wp-service' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>

			<div class="logo">
				<div id="css-logo"> <a href="http://localhost:8888/wordpress/"> AA </a> </div>
			</div>

			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://localhost:8888/wordpress/wp-content/uploads/2016/12/wordpress-logo-notext-rgb.png" ></a></h1>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<div class="nav2">
				<nav id="site-navigation2" class="main-navigation2" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wp-service' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'second-primary', 'menu_id' => 'primary-menu',
					'depth' => 3,	
					'sub_menu' => true, 'direct_parent' => true, 'show_parent' => true ) ); ?>
				</nav><!-- #site-navigation -->
			</div>

			<<?php get_search_form(); ?>

		</header><!-- #masthead -->
	</div> <!-- header cover -->
