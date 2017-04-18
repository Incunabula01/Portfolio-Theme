<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DnetTheme_2017
 */

?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header landing">
		<div class="row">
				<div class="columns small-12">
		<?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>	
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dnet-theme-2017' ),
						'after'  => '</div>',
					) );
				?>
				<div class="section contact-section">
					<header>
						<div class="row">
							<div class="columns small-12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</header>
					<div class="row">
						<div class="columns small-12 medium-offset-2">
							<form action="" class="form-group">
								<input type="text">
								<input type="text">
								<input type="text">
								<input type="textarea">
								<button><input type="submit"></button>
							</form>
						</div>
					</div>
				</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dnet_theme_2017_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

