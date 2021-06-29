<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage soapatrickthree
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
<!--	<div id="secondary" class="secondary hidden-xs" data-spy="affix" data-offset-top="225" data-offset-bottom="423"> -->
	<div id="secondary" class="secondary hidden-xs">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">				
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
				
				<?php if ( is_user_logged_in() ) : ?>
					<ul>
						<li><a href="<?php echo admin_url(); ?>">Admin</a></li>
					</ul>
				<?php endif; ?>						
			</nav><!-- .main-navigation -->
		<?php endif; ?>
					
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>	
			
		<a href="#top" class="btn btn-light-grey btn-lg btn-block btn-back-to-top">Back to Top</a>
	
	</div><!-- .secondary -->


	<div class="cd-primary-nav visible-xs">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>
	</div>

<?php endif; ?>
