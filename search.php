<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package PortfolioTheme_2017
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
				<?php	if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="row">
					<div class="columns small-12">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'dnet-theme-2017' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</div>
				</div>
			</header><!-- .page-header -->
			<div class="row">
				<div class="columns small-12 medium-8">
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile; ?>
				</div>
				<div class="columns small-12 medium-4">
					<?php  get_sidebar(); ?>
				</div>
			</div>

				<?php else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
