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
Template Name: News Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						<section class="page-header" style="background-image: url('<?php echo $background_img[0]; ?>');">
							<div class="row">
								<div class="columns small-12">
									<div class="page-caption">
										<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									</div>
								</div>
							</div>
						</section>
				
						<div class="row">
								<div class="columns small-12">
									<nav aria-label="Home:" role="navigation">
										<?php foundation_breadcrumbs(); ?>
									</nav>
										
							<?php the_content(); ?>
							<h2>News</h2>
					<?php	endwhile; // End of the loop. ?>
							<ul class="career-list">
								<?php rewind_posts();
									// Display Posts lists with Jobs category 
										$args = array(
												'category_name' => 'news',
												'posts_per_page' => -1,
												'order' => 'ASC'
											);
										$the_query = new WP_Query($args);

										while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

										<li><a href="<?php the_permalink(); ?>">
											<h4><?php the_title(); ?></h4>
											</a>
											<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 80, '...');?></p>
										</li>


									<?php endwhile; ?>
							</ul>
								</div>
						</div>
						
					
			
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
