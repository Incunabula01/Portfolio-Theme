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
Template Name: Portfolio Page
*/

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						<section class="page-header" style="background-image: linear-gradient(rgba(30, 151, 191, 0.5), rgba(19, 96, 122, 0.9)), url('<?php echo $background_img[0]; ?>');">
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
						<section>
							<div class="row">
									<div class="columns small-12">
										<div id="gallery-container" class="gallery">
									
											<?php
												global $post;
												$tmp_post = $post;
												$args = array( 'category_name' => 'identiy, print, type, ui-ux, web', 'numberposts' => -1);
												$myposts = get_posts( $args );
												foreach( $myposts as $post ) :	setup_postdata($post); 
													$post_thumbnail_id = get_post_thumbnail_id();
													$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'medium' );
											?>

											<div class="item <?php $category = get_the_category(); if( in_category( 'Featured') ){
													 echo $category[1]->cat_name; 
												}else {
													 echo $category[0]->cat_name; 
												} ?>">
												<a href="<?php echo get_permalink(); ?>" >
													<div class="item-title">
														<i class="fa <?php if( in_category( 'Featured') ){
																 echo $category[1]->cat_name; 
															}else {
																 echo $category[0]->cat_name; 
															} ?>"></i>
														<h2><?php echo get_the_title(); ?></h2>
													</div>
													<img src="<?php echo $featured_src[0]; ?>"/>
												</a>
											</div>

											<?php endforeach; ?>

									</div>
								</div>
							</div>
							
						</section>

					<?php endwhile; // End of the loop.?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
