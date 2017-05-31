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
<meta name="description" content="I am a web developer from a design background with a passion to create great user experiences for the web. I offer web design and development services for non-profit, small businesses and start-ups.">
<meta name="keywords" content="web design for startups, web design for small businesses and individuals, web design services for nonprofits, logo design services, ui-ux design services, ui-ux design, wordpress,  infographics design services, wordpress design services,  brand identity design, landing page design services, print design services, adobe photoshop, adobe illustrator">
<!-- End -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900i|Raleway:500,800" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- svg icons -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="chevronDown" viewBox="0 0 100 55" preserveAspectRatio="xMaxYMax meet">
			<polygon  points="45,12.177 0,0 0,7.859 45,20.037 90,7.859 90,0 "/>
		</symbol>
		<symbol id="chevronUp" viewBox="0 0 100 55" preserveAspectRatio="xMaxYMax meet">
			<polygon points="39.936,8.085 79.871,18.891 79.871,11.917 39.936,1.109 0,11.917 0,18.891 "/>
		</symbol>
</svg>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dnet-theme-2017' ); ?></a>
	
		<header id="masthead" class="site-header">
			<div class="top-bar" data-topbar>
				<div class="top-bar-left">
					<div class="title-bar">
						<div class="title-bar-title">
							<a href="/">
								<div class="logo">
									<svg class="logo-icon" id="logo" viewBox="0 0 135 135" preserveAspectRatio="none">
										<circle fill="#70E1FC" cx="67.5" cy="67.5" r="66.094"/>
										<path fill="#004B4D" d="M87.915,72.902c-4.128,6.839-8.016,14.497-9.213,22.481c-0.934,6.228,1.534,12.218,8.688,8.194
												c-3.357-6.711-0.549-15.397,3.504-21.119c2.116-2.989,12.025-12.466,14.461-4.989c2.248,6.907-1.701,15.825-5.933,21.122
												c4.202,6.307,12.191,3.044,15.238-2.405c1.64-2.931,2.522-6.253,3.083-9.544c0.386-2.265,0.595-4.559,0.666-6.854
												c-1.929-0.892-3.833-1.843-5.676-2.899c-4.896-2.807-11.245-8.791-8.142-15.104c4.31-8.782,12.854,0.348,14.394,5.691
												c2.209,7.666,1.774,16.352-0.442,23.955c-1.941,6.658-5.787,13.811-12.349,16.89c-2.827,1.327-6.008,1.712-9.097,1.352
												c-2.06-0.241-4.181-0.817-5.951-1.931c-2.327-1.463-1.799-3.399-4.334-1.62c-11.76,8.256-32.747,1.286-24.458-15.384
												C68.27,78.842,83.287,70.283,93.566,62.54c-6.856,0.188-13.036,10.535-19.262,8.531c-3.775-1.205-5.303-1.852-6.771,2.358
												c-0.968,1.194-0.161,2.598-2.425,1.966c1.757-5.817,3.221-16.378,11.071-16.378c4.802,0,8.941,2.551,13.916,2.061
												c1.419-0.14,4.578-0.414,5.319-1.791c0.73-1.356,1.282-1.631,2.679-0.361C94.312,63.284,90.899,67.962,87.915,72.902
												C84.941,77.829,90.889,67.978,87.915,72.902z M99.971,79.056c-2.39,4.878-3.502,12.641-1.465,17.798
												c2.752-3.996,4.627-8.727,5.04-13.581C103.742,80.969,102.827,73.211,99.971,79.056C99.269,80.489,100.672,77.623,99.971,79.056z"/>
										<path fill="#FFFFFF" d="M25.769,71.434c3.384,3.838,7.133,6.032,10.787,6.032c5.117,0,7.95-2.012,7.95-9.505V43.647H21.935v-13.16
												h38.294V69.24c0,11.881-6.031,21.751-23.126,21.751c-6.578,0-14.623-2.376-20.198-9.778L25.769,71.434z"/>
									</svg>
								</div>
							</a>
						</div>
						<div data-responsive-toggle="primary-menu" data-hide-for="large">
							<a class="menu-toggle" data-toggle="primary-menu"><i class="fa fa-navicon"></i></a>
						</div>
					</div>
				</div>
				<div class="top-bar-right">
					<nav id="site-navigation" class="main-navigation" >
					
					
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
