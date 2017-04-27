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
 * @package DnetTheme_2017
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
										  the_content();
									?>
								<?php endwhile; ?>	
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Services' ) ) );  ?>">
									<button class="clear-button">Learn More</button>
								</a>
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
					$the_query = new WP_Query($args);

					while ( $the_query -> have_posts() ) : $the_query -> the_post();

						get_template_part( 'template-parts/content', 'landing' );

					endwhile; ?>
			
				<section class="contact-section">
					<header>
						<div class="row">
							<div class="columns small-12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</header>
					<div class="contact-form">
						<div class="row columns">
							<div class="small-12 medium-8 medium-offset-2">
								<?php echo do_shortcode("[ninja_form id=2]") ?>
							</div>
						</div>
					</div>
				</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
