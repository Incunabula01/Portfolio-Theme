<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PortfolioTheme_2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" dir="ltr">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- add SEO content here -->
<meta name="description" content="">
<meta name="keywords" content="">
<!-- End -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900i|Raleway:500,800" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div style="display: none">
		<svg version="1.1" id="chevronDown" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="100px" height="20px" viewBox="0 0 198 27.284"  xml:space="preserve">
		<polygon fill="#FFFFFF" points="99,21.284 0,-0.284 0,5.716 99,27.284 198,5.716 198,-0.284 "/>
		</svg>
	</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dnet-theme-2017' ); ?></a>
	
		<header id="masthead" class="site-header">
			<div class="top-bar" data-topbar>
				<div class="top-bar-left">
					<div class="title-bar">
						<div class="title-bar-title">
							<a href="/">
								<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Dnet"></div>
							</a>
						</div>
						<div data-responsive-toggle="primary-menu" data-hide-for="large">
							<a class="menu-toggle" type="button" data-toggle="primary-menu"><i class="fa fa-navicon"></i></a>
						</div>
					</div>
				</div>
				<div class="top-bar-right">
					<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1',
					                           'menu_id' => 'primary-menu', 
					                           'container_class' => 'main-nav-menu',
					                           'menu_class' => 'dropdown menu',
					                           'items_wrap' => '<ul id="%1$s" class="%2$s dropdown" data-responsive-menu="large-dropdown">%3$s</ul>',
					                           'walker' => new top_bar_walker()
					                           )); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>	
		</header><!-- #masthead -->
	

	<div id="content" class="site-content">
