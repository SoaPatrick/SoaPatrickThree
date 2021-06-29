<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatrickthree
 */

?>

<?php if (get_field( "instagram" )) : $instagram_class = "format-instagram"; endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array(get_field( "background_color" ), $instagram_class)); ?>>
	
	<div class="review-bar hidden"><?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?></div>	
	
    <?php if (has_post_format('quote') || has_post_format('link') || has_post_format('status')) : ?>

    	<div class="entry-wrapper">  
	    	
	    	<?php if (has_post_format('quote')) : ?>  
	    	   
			    <i class="fa fa-quote-right"></i>
			    <?php the_title( '<blockquote class="quote">', '</blockquote>' ); ?>
				<p class="author">
					<?php echo get_post_meta($post->ID, '_format_quote_source_name', true); ?><?php edit_post_link('Edit', ' - ', ''); ?>	
				</p>
				
			<?php elseif (has_post_format('link')) : ?>
			
		    	<div class="entry-wrapper">        
				    <i class="fa fa-link"></i>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php $link_url = get_post_meta($post->ID, '_format_link_url', true); ?>
					<?php echo '<a href="'.$link_url.'" class="link" target="_blank">' .$link_url. '</a>'; ?>
					<?php edit_post_link('Edit', ' - ', ''); ?>
		    	</div>	
		    			
		    <?php elseif (has_post_format('status') && !get_field( "instagram" )) : ?>
     
			    	<?php if (get_field( "font-awesome_icon" )) : ?>
					    <i class="fa <?php echo get_field( "font-awesome_icon" ) ?>"></i>
					<?php else : ?>
						<i class="fa fa-hand-pointer-o"></i>
					<?php endif; ?>
					<?php the_content( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="posted-on"><?php the_date(); ?><?php edit_post_link('Edit', ' - ', ''); ?></div>
					
		    <?php elseif (has_post_format('status') && get_field( "instagram" )) : ?>	
		    

		    	<div class="entry-header-instagram-image">
			    	<a href="<?php the_post_thumbnail_url('full'); ?>" data-lity>
						<?php the_post_thumbnail( 'full-width', array( 'class'  => 'img-responsive' ) ); ?>	
			    	</a>
		    	</div>
				<header class="entry-header-instagram">
					<i class="fa fa-instagram"></i>
					<?php the_content(); ?>
					<div class="posted-on"><?php the_date(); ?><?php edit_post_link('Edit', ' - ', ''); ?></div>
				</header>	
								
			<?php endif; ?>
			
    	</div>
    	
    <?php endif; ?>	
	
	<?php if (has_post_format(array( 'gallery', 'image', 'video' ) ) || ! get_post_format()  ) : ?>	
	
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
				
			<?php elseif (has_post_format('video')) : ?>		    
			
			    <div class="entry-header-video">
				    <?php echo get_post_meta($post->ID, '_format_video_embed', true); ?>					        
				</div>			
					
			<?php elseif (has_post_format('image')) : ?>
		
				<div class="entry-header-image">
					<a href="<?php the_post_thumbnail_url('full'); ?>" data-lity>
						<?php the_post_thumbnail( 'full-width', array( 'class'  => 'img-responsive' ) ); ?>							
					</a>
				</div>	
				
			<?php else : ?>					
			
				<?php if( has_post_thumbnail() ) : ?>
					<div class="entry-header-image">
						<?php the_post_thumbnail( 'full-width', array( 'class'  => 'img-responsive' ) ); ?>								
						<header class="entry-header hidden-xs hidden-sm">
						    <?php if ( is_single() ) : ?>
					        	<?php the_title( '<h1 class="entry-title">', '</h1>'); ?>	
							<?php else : ?>	
								<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>			        	
					        <?php endif; ?>
						</header>							
					</div>				
				<?php endif; ?>	
				
			<?php endif; ?>
	
			<aside class="entry-meta hidden-xs hidden-sm">
				<?php if ( 'post' === get_post_type() ) : ?>
				
					<div class="posted-on-wrapper">
						<span class="title">Written on: </span>
						<?php soapatrickthree_posted_on(); ?>
					</div>
					<?php the_tags('<div class="tag-wrapper"><span class="title">Filed in: </span><span class="tags">',', ','</span></div>'); ?>
					<?php edit_post_link('Edit', '<p class="edit-link">', '</p>'); ?>					
					
				<?php endif; ?>
			</aside>
							
			<div class="entry-wrapper">		
				
				<header class="entry-header<?php if (! get_post_format() &&  has_post_thumbnail() ) : ?> hidden-md hidden-lg<?php endif; ?>">
				    <?php if ( is_single() ) : ?>
			        	<?php the_title( '<h1 class="entry-title">', '</h1>'); ?>	
					<?php else : ?>	
						<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>			        	
			        <?php endif; ?>
				</header>
				
				<aside class="entry-meta hidden-md hidden-lg">
					<?php if ( 'post' === get_post_type() ) : ?>
					
						<div class="posted-on-wrapper">
							<span class="title">Written on: </span>
							<?php soapatrickthree_posted_on(); ?>
						</div>
						<?php the_tags('<div class="tag-wrapper"><span class="title">Filed in: </span><span class="tags">',', ','</span></div>'); ?>					
						<?php edit_post_link('Edit', '<p class="edit-link">', '</p>'); ?>					

					<?php endif; ?>
				</aside>				
				
				<div class="entry-content">					
					<?php $lead = get_field( "lead" ); ?>
					<?php if( $lead ) : ?>
						<div class="lead">
							<?php echo $lead; ?>
						</div>
					<?php endif; ?>					
					<?php the_content(); ?>
					<div class="review-wrap">
						<?php echo do_shortcode('[wp-review]'); ?>
					</div>
				</div>
			
			</div>
			
		</div>

	<?php endif; ?>

</article>