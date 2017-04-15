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
			<div class="row">
				<div class="columns small-12">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'landing' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; ?>
				</div>	
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
