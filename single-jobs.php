<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PortfolioTheme_2017
 */

 /*
 * Template Name: Jobs
 * Template Post Type: post
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="row">
			<div class="columns small-12 medium-8">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'jobs' );

							$args = array(
									'in_same_term' => true,
									'screen_reader_text' => 'Job Navigation'
								);
							
							the_post_navigation($args);

						endwhile; // End of the loop.
						?>
			</div>
			<div class="columns small-12 medium-4">
					<?php get_sidebar('careers'); ?>
			</div>
		</div>
	
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

