<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brighton
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="images/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="images/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="images/widetile.png" />
	<meta name="msapplication-square310x310logo" content="images/largetile.png" />
    
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brighton' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
        
        	<?php brighton_the_custom_logo(); ?>
            
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<h2 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brighton' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
