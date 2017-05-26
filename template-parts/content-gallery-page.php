<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PortfolioTheme_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		
		<?php
			the_content();
		?>

		<div class="orbit" aria-label="Project Images" data-orbit data-auto-play="false" data-options="navigation_arrows:true">
			<ul class="orbit-container">
				<button class="orbit-previous">
					<i class="fa fa-2x fa-angle-left"></i>
					<span class="show-for-sr">Previous Slide</span>
				</button>
				<button class="orbit-next">
					<i class="fa fa-2x fa-angle-right"></i>
					<span class="show-for-sr">Next Slide</span>
				</button>
			<?php  $post_id = $post->ID; get_images_for_slider($post_id); ?>
			</ul>
			<nav class="orbit-bullets">
			<?php get_bullets_for_slider($post_id); ?>
			</nav>
		</div>
		
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'portfolio-theme-2017' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
