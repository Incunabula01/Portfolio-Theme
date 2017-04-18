<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DnetTheme_2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Source+Sans+Pro:300,400" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dnet-theme-2017' ); ?></a>

	<header id="masthead" class="site-header" role="banner" data-sticky-container>
		<div class="sticky" data-sticky data-margin-top="0">
			<div class="site-branding">
				<a href="/">
					<span class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Dnet"></span>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dnet-theme-2017' ); ?></button>
				<ul class="sub-nav">
					<li><a href="mailto:info@dnetsecurity.com"><i class="fa fa-envelope"></i> info@dnetsecurity.com</a></li>
					<li><a href="tel:1-888-638-7898"><i class="fa fa-phone"></i> 1-888-638-7898</a></li>
					<li><a href="#" target="_blank">Careers</a></li>
					<li><a href=""></a></li>
				</ul>
				
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
