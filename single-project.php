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
				<section id="heroImage" class="page-header" style="background-image: linear-gradient(rgba(19, 96, 122, 0.6), rgba(19, 96, 122, 0.8)), url('<?php echo $background_img[0]; ?>');">
					<div class="row">
						<div class="columns small-12 ">
							<div class="page-caption">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</div>
						</div>
					</div>
				</section>
				<div class="svg-container">
						<div class="svg-center">
							<a href="#belowFold">
								<svg class="icon" height="40px" width="60px">
									<use class="chevron-icon" xlink:href="#chevronDown"></use>
								</svg>
							</a>
						</div>
				</div>
		<div id="belowFold" class="row">
			<div class="column small-12">
				<nav aria-label="Home:" role="navigation">
					<?php foundation_breadcrumbs(); ?>
				</nav>
			</div>
			<div class="columns small-12 medium-3">
				<div class="meta-sidebar">
					<h2 class="widget-title">Info</h2>
					<?php the_meta(); ?>
				</div>
			</div>
			<div class="columns small-12 medium-9">
				
					<?php 
						get_template_part( 'template-parts/content', 'gallery-page' );

							$args = array(
									'in_same_term' => true,
									'screen_reader_text' => 'Project Navigation'
								);
							
							 ?>

					<?php endwhile; // End of the loop. ?>
				
			</div>
		</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

