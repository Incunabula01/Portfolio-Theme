<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DnetTheme_2017
 */

if ( ! is_active_sidebar( 'careers-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'careers-sidebar' ); ?>
</aside><!-- #secondary -->
