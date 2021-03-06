<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PortfolioTheme_2017
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="row">
						<div class="columns small-12">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dnet-theme-2017' ); ?></h1>
						</div>
					</div>
				</header><!-- .page-header -->
			
				<div class="page-content">
					<div class="row">
						<div class="columns small-12 medium-8">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dnet-theme-2017' ); ?></p>

							<?php get_search_form(); ?>
							<hr>
							<?php the_widget( 'WP_Widget_Recent_Posts' );

								// Only show the widget if site has multiple categories.
								if ( portfolio_theme_2017_categorized_blog() ) :
							?>
						</div>
						<div class="columns small-12 medium-4">
							<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dnet-theme-2017' ); ?></h2>
							<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );

									endif;
								?>
								</ul>
							</div><!-- .widget -->
						</div>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
