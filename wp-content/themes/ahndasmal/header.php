<?php
	/**
	 * The Header for our theme.
	 *
	 * Displays all of the <head> section and everything up till <div id="main">
	 *
	 * @package WordPress
	 * @subpackage Twenty_Twelve
	 * @since Twenty Twelve 1.0
	 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<!-- Pageinfo -->
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />

		<!-- Styling -->
		<!-- **	Gooogle Fonts-->
		<link href="http://fonts.googleapis.com/css?family=Raleway:300" rel='stylesheet' type='text/css'>

		<!-- **	iPhone no scale-->
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
		<!-- **	Bootsstrap CSS-->
		<link rel="stylesheet" href="<?php echo(get_site_url()); ?>/wp-content/themes/twentytwelve/css/bootstrap.css">
		<!-- **	Style for Xpx Xpx Xpx-->
		<link rel="stylesheet" href="<?php echo(get_site_url()); ?>/wp-content/themes/twentytwelve/css/mobile.css">



		<!-- Scripts -->
		<!-- ** jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<!-- ** Bootstrap JS -->
		<script src="<?php echo(get_site_url()); ?>/wp-content/themes/twentytwelve/js/bootstrap.js"></script>

		<!-- ** WordPress JS -->
		<script src="<?php echo(get_site_url()); ?>/wp-content/themes/twentytwelve/js/wordpress-js.js"></script>

		

		<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<?php wp_head(); ?>


		
	</head>


	<body <?php body_class(); ?> >
		<div class="pageContent">
			<header id="masthead" class="site-header" role="banner">
				<div class="backgroundImg"></div>
				<hgroup>
					<h1 class="site-title"><center><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></center></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>	

				<nav id="site-navigation" class="main-navigation" role="navigation">
						<h3 class="menu-toggle navigationFont"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
						<a class="assistive-text navigationFont" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
				<?php endif; ?>
			</header><!-- #masthead -->
		<div id="page" class="hfeed site">
	<div id="main" class="wrapper">