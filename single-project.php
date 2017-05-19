<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PortfolioTheme_2017
 */

 /*
 * Template Name: Projects
 * Template Post Type: post
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
				<section class="page-header" style="background-image: linear-gradient(rgba(19, 96, 122, 0.6), rgba(19, 96, 122, 0.8)), url('<?php echo $background_img[0]; ?>');">
					<div class="row">
						<div class="columns small-12 ">
							<div class="page-caption">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</div>
						</div>
					</div>
				</section>
		<div class="row">
			<div class="columns small-12 medium-8">
					<?php 

						get_template_part( 'template-parts/content', 'breadcrumb-page' );

							$args = array(
									'in_same_term' => true,
									'screen_reader_text' => 'Project Navigation'
								);
							
							the_post_navigation($args);

						endwhile; // End of the loop.
						?>
			</div>
			<div class="columns small-12 medium-4">
					<?php get_sidebar(); ?>
			</div>
		</div>
	
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

