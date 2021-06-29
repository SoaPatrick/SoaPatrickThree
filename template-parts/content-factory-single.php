<?php
/**
 * Template part for displaying factory items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickthree
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="flex-wrapper">			

		<?php if (has_post_format('gallery')) : ?>
		
			<div class="entry-header-gallery">
			    <?php $images = get_post_meta($post->ID, '_format_gallery_images', true); ?>
				<div id="carousel-<?php the_ID(); ?>" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
				        <?php $first = true; foreach ($images as $image) { ?>
						    <div class="item<?php if ($first) : ?> active<?php endif; ?>"> 
						        <?php echo wp_get_attachment_image( $image, 'full-width' ); ?>		        	
						    </div>  	        	
							<?php $first = false; ?>
					    <?php } ?>
			    	</div>
					<a class="left carousel-control" href="#carousel-<?php the_ID(); ?>" role="button" data-slide="prev">
						<i class="fa fa-prev fa-angle-left"></i>				
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-<?php the_ID(); ?>" role="button" data-slide="next">
						<i class="fa fa-next fa-angle-right"></i>				
						<span class="sr-only">Next</span>
					</a>				    	
				</div>
			</div>	
			
		<?php endif; ?>

		<aside class="entry-meta hidden-xs hidden-sm">
			<?php if ( 'factory' === get_post_type() ) : ?>
			
				<div class="posted-on-wrapper">
					<span class="title">Written on: </span>
					<?php soapatrickthree_posted_on(); ?>
				</div>
				<?php the_tags('<div class="tag-wrapper"><span class="title">Filed in: </span><span class="tags">',', ','</span></div>'); ?>
				<?php edit_post_link('Edit', '<p class="edit-link">', '</p>'); ?>					
				
			<?php endif; ?>
		</aside>
						
		<div class="entry-wrapper">		
			
			<header class="entry-header">
		        <?php the_title( '<h1 class="entry-title">', '</h1>'); ?>	
			</header>
			
			<aside class="entry-meta hidden-md hidden-lg">
				<?php if ( 'factory' === get_post_type() ) : ?>
				
					<div class="posted-on-wrapper">
						<span class="title">Written on: </span>
						<?php soapatrickthree_posted_on(); ?>
					</div>
					<?php the_tags('<div class="tag-wrapper"><span class="title">Filed in: </span><span class="tags">',', ','</span></div>'); ?>						
					<?php edit_post_link('Edit', '<p class="edit-link">', '</p>'); ?>					

				<?php endif; ?>
			</aside>				
			
			<div class="entry-content">									
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article>