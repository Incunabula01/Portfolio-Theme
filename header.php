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
	<div class="sticky-container" data-sticky-container>
		<header id="masthead" class="site-header sticky" role="banner"  data-sticky data-margin-top="0" data-options="stickyOn:small;">
			<div class="top-bar" data-topbar>
				<div class="top-bar-left">
					<div class="site-branding">
						<a href="/">
							<span class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Dnet"></span>
						</a>
					</div><!-- .site-branding -->
					<div class="title-bar" data-responsive-toggle="primary-menu" data-hide-for="large">
						<div class="title-bar-title">
							<a href="/">
								<span class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Dnet"></span>
							</a>
						</div>
						<button class="menu-toggle" type="button" data-toggle="primary-menu"><i class="fa fa-navicon"></i></button>
					</div>
				</div>
				<div class="top-bar-right">
					<nav id="site-navigation" class="main-navigation" role="navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-navicon"></i></button> -->
					<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 
											  'menu_id' => 'secondary-menu',
											  'menu_class' => 'menu', 
											  'container_class' => 'sub-nav-menu') ); ?>
					
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
	</div>
	

	<div id="content" class="site-content">
