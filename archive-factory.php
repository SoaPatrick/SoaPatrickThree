<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickthree
 */

get_header(); ?>

	<div id="primary" class="content-area row">		
		<?php
		$args = array(
			'post_type' => 'factory',
			'posts_per_page' => 200,
		);	
			
		$cat_posts = new WP_Query( $args );
		if ( $cat_posts->have_posts() ) : ?>			
		
			<main id="main-factory" class="factory-main col-xs-12" role="main">
				<header class="page-header">		
					<h1 class="page-title">Factory</h1>
				</header>	
				<div class="row">			
				
					<?php
					/* Start the Loop */
					while ( $cat_posts->have_posts() ) : $cat_posts->the_post();	
		
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-factory', get_post_format() );
		
					endwhile; ?>
					
				</div>
			</main>

		<?php else : ?>
		
			<main id="main-blog" class="site-main col-xs-12" role="main">

				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			
			</main>

		<?php endif; ?>

	</div><!-- #primary -->

<?php
get_footer();
