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
	<header class="entry-header">
		
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			$content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...');
		?>
		 &nbsp;<a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-circle-right"></i></a>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'dnet-theme-2017' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
