<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickthree
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-6'); ?>>
		
	<?php if( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full-width', array( 'class'  => 'img-responsive' ) ); ?></a>				
	<?php endif; ?>				
	<header class="entry-header">			
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<div class="posted-on"><?php the_date(); ?></div>
	</header><!-- .entry-header -->

</article><!-- #post-## -->	