<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PortfolioTheme_2017
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<div class="row">
						<div class="columns small-12">
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</div>
					</div>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="columns small-12 medium-8">
					<?php  /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation(); ?>
				</div>
				<div class="columns small-12 medium-4">
					<?php  get_sidebar(); ?>
				</div>
			</div>
			<?php  else : ?>
				<div class="row">
					<div class="columns small-12">
						<?php  get_template_part( 'template-parts/content', 'none' ); ?>
					</div>
				</div>
			<?php endif; ?>
				

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
