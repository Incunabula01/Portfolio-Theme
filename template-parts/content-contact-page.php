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
			<form action="" method="post" class="contact-form" data-abide novalidate>
				<div class="alert callout" data-abide-error style="display: none;">
					<p><i class="fa fa-exclamation-triangle"></i>There are some errors in your form</p>
				</div>
					<div class="name-field">
						<label for="name">Name 
							<input type="text" placeholder="Name" required >
						</label>
						<span class="form-error">
							<small>Name is requrired and must be letters.</small>
						</span>
					</div>
					<div class="email-field">
						<label for="email">Email 
							<input type="email" placeholder="Email" required >
						</label>
						<span class="form-error">
							<small>An email address is required.</small>
						</span>
					</div>
					<div class="phone-field">
						<label for="phone">Phone 
							<input type="tel" placeholder="Phone" required pattern="dashes_only">
						</label>
						<span class="form-error">
							<small>An phone number is required.</small>
						</span>
					</div>
					<div>
						<label for="textarea">
						How can we help you?
							<textarea placeholder="Your message here" cols="30" rows="5"></textarea>
						</label>
					</div>
					<div>
						<button class="clear-button" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					</div>				
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
