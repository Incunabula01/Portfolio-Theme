<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PortfolioTheme_2017
 */

if ( ! is_active_sidebar( 'Contact-Sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'Contact-Sidebar' ); ?>
</aside><!-- #secondary -->
