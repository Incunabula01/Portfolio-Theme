<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DnetTheme_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<nav aria-label="Home:" role="navigation">
			<?php foundation_breadcrumbs(); ?>
		</nav>
		
		<?php
			the_content();
		?>
		<div class="contact-wrapper">
			<form action="" class="contact-form">
						
					<label>Name
						<input type="text" placeholder="Name">
					</label>
					<label>Email
						<input type="text" placeholder="Email">
					</label>
					<label>Phone
						<input type="text" placeholder="Phone">
					</label>
					<label>
						How can we help you?
						<textarea placeholder="Your message here" cols="30" rows="5"></textarea>
					</label>
									
					<button class="clear-button" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						
				</form>
		</div>
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
