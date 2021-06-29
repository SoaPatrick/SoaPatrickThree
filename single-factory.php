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
		
			<div class="archive-nav">
				<div class="archive-link-back">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/factory/"><i class="fa fa-angle-left"></i>Factory</a>				
				</div>
				<div class="archive-current">
					<span><?php the_title();?></span>
				</div>					
			</div>	

			<?php get_template_part( 'template-parts/content-factory-single', get_post_format() ); ?>

		<?php endwhile; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();