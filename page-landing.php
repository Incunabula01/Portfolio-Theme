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
Template Name: Landing Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
				<section id="heroImage" class="landing" style="background-image: linear-gradient(rgba(19, 96, 122, 0.6), rgba(19, 96, 122, 0.8), rgba(19, 96, 122, 1)), url('<?php echo $background_img[0]; ?>');">
					<!-- Updates CTA Section -->
						<div class="row">
							<div class="columns small-12">

								<div class="landing-caption">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
									the_content(); ?>
			<?php endwhile; ?>
		
								</div>
							</div>
						</div>
				</section>
				<div class="svg-container">
						<div class="svg-center">
							<a href="#section1">
								<svg class="icon" height="40px" width="80px">
									<use class="chevron-icon" xlink:href="#chevronDown"></use>
								</svg>
							</a>
						</div>
				</div>
				<!-- Display Posts with Landing category -->			
					<?php

					rewind_posts();

					$args = array(
							'category_name' => 'landing',
							'posts_per_page' => -1,
							'order' => 'ASC'
						);
					$landing_query = new WP_Query($args);

					while ( $landing_query -> have_posts() ) : $landing_query -> the_post(); ?>

					<div id="section1">

							<?php  get_template_part( 'template-parts/content', 'landing' ); ?>	

					</div>

					<?php endwhile; ?>
				<div class="svg-container">
						<div class="svg-center">
							<a href="#section2">
								<svg class="icon" height="40px" width="80px">
									<use class="chevron-icon" xlink:href="#chevronDown"></use>
								</svg>
							</a>
						</div>
				</div>
				<section id="section2" class="landing-section featured">
						<div class="row">
							<div class="columns small-12">
								<h2 class="entry-title">Featured Projects</h2>
								<ul class="menu vertical">
									<?php rewind_posts(); 

									$args = array(
											'category_name' => 'featured',
											'posts_per_page' => -1,
											'order' => 'ASC'
										);
									$featured_query = new WP_Query($args);

									while ( $featured_query -> have_posts() ) : $featured_query -> the_post(); ?>
										<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
										<li>
											<a class="featured-link" href="<?php echo get_post_permalink(); ?>" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6),rgba(255, 255, 255, 0.6)), url('<?php echo $background_img[0]; ?>');">
											<?php the_title();  ?>
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
				</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="svg-container-bottom">
			<div class="svg-center">
				<a href="#page">
					<svg class="icon" height="40px" width="80px">
						<use class="chevron-icon" xlink:href="#chevronUp"></use>
					</svg>
				</a>
			</div>
		</div>

<?php

get_footer(); ?>
