<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PortfolioTheme_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="landing-section">
		<header class="entry-header">
			<div class="row">
					<div class="columns small-12">
			<?php the_title( '<h2 class="entry-title">', '</h2>' );  ?>	
				</div>
			</div>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<div class="row">
				<div class="columns small-12">
					<?php
						the_content();
					?>
				</div>
			</div>	
		</div><!-- .entry-content -->
	</section>
</article><!-- #post-## -->

