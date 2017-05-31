<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PortfolioTheme_2017
 */

/*
Template Name: Full Width Page
*/

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						<section class="page-header" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(19, 96, 122, 0.8), rgba(19, 96, 122, 1)), url('<?php echo $background_img[0]; ?>');">
							<div class="row">
								<div class="columns small-12 ">
									<div class="page-caption">
										<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									</div>
								</div>
							</div>
						</section>
							<div class="row">
								<div class="columns small-12 ">

							<?php get_template_part( 'template-parts/content', 'breadcrumb-page' ); ?>

								</div>
							</div>

					<?php endwhile; // End of the loop.?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
