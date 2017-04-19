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
				<section class="landing">
					
						<div class="row">
							<div class="columns small-12">
								<?php while ( have_posts() ) : the_post(); ?>
									<?php the_title( '<h1 class="entry-title">', '</h1>' );  
										  the_content();
									?>
								<?php endwhile; ?>	
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Services' ) ) );  ?>"><button class="clear-button">Learn More</button></a>
							</div>
						</div>
					
				</section>			
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
				<section class="microsoft-section">
					<div class="row">
						<div class="columns small-12 medium-6 large-4">
							<img src="" alt="">
						</div>
						<div class="columns small-12 medium-6 large-8">
								<p>Dnet is a Microsoft certified reseller.  In addition, we also maintain partnership agreements with Splunk and Tech Data that afford us the opportunity to offer our clients a suite of security products.</p>
						</div>
					</div>
				</section>
				<section class="contact-section">
					<header>
						<div class="row">
							<div class="columns small-12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</header>
					<div class="row">
						<div class="columns small-12 medium-offset-2">
							<form action="" class="form-group">
								<input type="text">
								<input type="text">
								<input type="text">
								<input type="textarea">
								<button><input type="submit"></button>
							</form>
						</div>
					</div>
				</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
