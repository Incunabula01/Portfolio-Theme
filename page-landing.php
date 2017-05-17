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
				<section class="landing" style="background-image: url('<?php echo $background_img[0]; ?>');">
					<!-- Updates CTA Section -->
						<div class="row">
							<div class="columns small-12">
								<div class="landing-caption">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
									the_content(); ?>
								<?php endwhile; ?>	
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Work' ) ) );  ?>">
									<span class="clear-button">View Work</span>
								</a>
								<div class="svg-center-container aligncenter">
									<a href="">
										<svg class="svg-center"  style="padding-bottom: 50%;">
											<use xlink:href="#chevronDown"></use>
										</svg>
									</a>
								</div>
								
								</div>
							</div>
						</div>
				</section>
				<!-- Display Posts with Landing category -->			
					<?php

					rewind_posts();

					$args = array(
							'category_name' => 'landing',
							'posts_per_page' => -1,
							'order' => 'ASC'
						);
					$landing_query = new WP_Query($args);

					while ( $landing_query -> have_posts() ) : $landing_query -> the_post();

						get_template_part( 'template-parts/content', 'landing' );

					endwhile; ?>
				<section class="landing-section">
						<div class="row">
							<div class="columns small-12">
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
											<a class="featured-link" href="<?php echo get_post_permalink(); ?>" style="background-image: url('<?php echo $background_img[0]; ?>');">
											<?php the_title( '<h4 class="entry-title">', '</h4>' );  ?>
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
				</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
