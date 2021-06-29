<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package soapatrickthree
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>


	    	<div class="nav-links text-center">
				<div class="btn-group btn-group-lg btn-group-justified" role="group">
					<?php previous_post_link( '%link', '<span aria-hidden="true" class="meta-nav-prev"><i class="fa fa-angle-left fa-lg"></i>Previous</span>'  );?>
					<?php next_post_link( '%link', '<span aria-hidden="true" class="meta-nav-next">Next<i class="fa fa-angle-right fa-lg"></i></span>' );?>
				</div>		    	
	    	</div>	

		<?php endwhile; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();