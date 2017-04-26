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
					<!-- Updates CTA Section -->
						<div class="row">
							<div class="columns small-12">
								<div class="landing-caption">
									<?php while ( have_posts() ) : the_post(); ?>
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
					<form action="" method="post" class="contact-form" data-abide novalidate>
						<div class="row">
							<div class="columns small-12 medium-8 medium-offset-2">
								<div class="alert callout" data-abide-error style="display: none;">
									<p><i class="fa fa-exclamation-triangle"></i>There are some errors in your form</p>
								</div>
								<div class="name-field">
									<label for="name">Name 
										<input type="text" placeholder="Name" required >
									</label>
									<span class="form-error">
										<small>Name is requrired and must be letters.</small>
									</span>
								</div>
								<div class="email-field">
									<label for="email">Email 
										<input type="email" placeholder="Email" required >
									</label>
									<span class="form-error">
										<small>An email address is required.</small>
									</span>
								</div>
								<div class="phone-field">
									<label for="phone">Phone 
										<input type="tel" placeholder="Phone" required pattern="dashes_only">
									</label>
									<span class="form-error">
										<small>An phone number is required.</small>
									</span>
								</div>
								<div>
									<label for="textarea">
									How can we help you?
										<textarea placeholder="Your message here" cols="30" rows="5"></textarea>
									</label>
								</div>
								<div>
									<button class="clear-button" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								</div>		
							</div>
						</div>
					</form>
				</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
