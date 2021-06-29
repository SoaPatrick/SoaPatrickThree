<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickthree
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	
	<header id="masthead" class="site-header row" role="banner">
		<div class="col-xs-12">
			<h1 class="hidden"><?php bloginfo('name'); ?></h1>
			<h2 class="hidden"><?php bloginfo('description'); ?></h2>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div class="logo">					
					<svg class="sp-logo version-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 532.9 532.9" style="enable-background:new 0 0 532.9 532.9;" xml:space="preserve">
					
						<circle class="circle" cx="266.5" cy="266.5" r="266.5"/>
					
						<path class="letter-s" d="M167,375.1c-2.1,0-4.8-0.1-5-0.1c-10.2-0.5-18.4-2.8-24.4-6.9c-7-4.8-10.5-12.7-10.7-24.3
							c-0.1-7.8,1.5-17.6,4.8-29l5.7-19.8c0,0,0,0,0,0l41.8,0l-3.9,12.8c-1.4,5.4-2.1,9.3-2.1,12.2c0.1,6.1,3.5,9.6,9.3,9.6l0.3,0
							c1.7,0,3.3-0.2,4.7-0.5l0.2-0.1c2.6-0.9,4.9-2.4,6.8-4.6c2.8-3.4,5.3-8.5,7.6-15.8c1.5-5.5,2.2-10.3,2.2-14.6
							c0-7.5-1.8-14.1-5.4-19.4c-3.4-5-7.1-10.1-11.2-15.1c-2.6-3-5.2-6.3-7.8-9.7c-2.5-3.3-4.8-7-6.7-11c-2-4-3.6-8.4-4.8-13.1
							c-1.2-4.6-1.9-10-1.9-16c0-9.5,1.9-20.6,5.6-33.2c3.5-11.4,7.5-21.4,11.9-29.7c4.4-8.1,9.6-14.9,15.5-20
							c5.9-5.1,12.9-8.9,20.7-11.3c7.9-2.4,17.2-3.6,27.7-3.6c14.2,0,24.9,2.5,32,7.4c6.9,4.8,10.3,12.8,10.3,24.5
							c0,7.8-1.8,17.5-5.2,28.9l-6,19.7c0,0,0,0,0,0h-42.2l4.5-13.4c1.5-5.3,2.3-9.3,2.3-12.1c0-6.2-3.4-9.7-9.4-9.7
							c-4.7,0-8.7,1.8-11.7,5.4c-2.9,3.4-5.2,8.6-7.2,16.1c-0.7,2.2-1.2,4.3-1.5,6c-0.3,1.7-0.4,3.5-0.4,5.3c0,6.6,1.7,12.4,5,17.3
							c3.1,4.6,6.8,9.3,10.8,14.1c2.5,3,5.1,6.3,7.8,9.7c2.5,3.3,4.8,7.1,6.9,11.2c2.1,4.1,3.8,8.8,5.2,13.8c1.4,5,2.1,10.7,2.1,16.9
							c0,4.6-0.4,9.7-1.2,15.2c-0.8,5.5-2.2,11.4-4,17.7c-4,13.4-8.3,24.6-12.8,33.5c-4.5,8.7-9.8,15.9-15.7,21.3
							c-5.9,5.3-12.8,9.1-20.6,11.3c-8,2.2-17.4,3.3-28.1,3.3C168.2,375.1,167.6,375.1,167,375.1z"/>
						<path class="letter-p" d="M229.2,420l76.4-253.8c0,0,0,0,0,0H360c15.9,0,27.6,2,34.6,6c6.7,3.8,9.9,10.7,9.9,21
							c0,8.3-1.9,18.5-5.6,30.4l-14.6,48.6c-3.5,11.4-7.3,21-11.4,28.5c-4,7.3-8.8,13.2-14.4,17.5c-5.5,4.3-12.2,7.4-19.8,9.2
							c-7.7,1.9-17.2,2.8-28.2,2.8l-10.8,0l-27,89.9c0,0,0,0,0,0H229.2z M325.3,284.6c2.5,0,4.8-0.5,6.9-1.5c2.2-1,4.1-2.9,5.9-5.6
							c1.6-2.5,3.3-5.9,5-10.2c1.7-4.2,3.5-9.7,5.4-16.5c2.6-8.2,4.5-15,5.7-20.1c1.2-5.2,1.8-9.1,1.8-11.9c0-3.4-1.1-5.5-3.2-6.4
							c-1.5-0.6-3.5-0.9-6.2-0.9l-11.7,0.1l-20.4,67.9l-1.5,5L325.3,284.6z"/>
					</svg>	
					
					<svg class="soapatrick-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 207.6 61.7" style="enable-background:new 0 0 207.6 61.7;" xml:space="preserve">
						 
						<path class="letter-k" d="M186.8,0.1h6.6v35.4l7.1-20.5h7.1l-8.8,23l8.8,23h-7.1l-7.1-20.4V61h-6.6V0.1z"/>
						<path class="letter-c" d="M181.6,52c0,6.4-3.2,9.7-9.5,9.7c-6.3,0-9.5-3.2-9.5-9.7V23.9c0-6.4,3.2-9.7,9.5-9.7c6.4,0,9.5,3.2,9.5,9.7v6.2H175
							v-6.2c0-2.1-1-3.1-2.9-3.1h0c-1.9,0-2.9,1-2.9,3.1V52c0,2.1,1,3.1,2.9,3.1c1.9,0,2.9-1,2.9-3.1v-6.2h6.6V52z"/>
						<path class="letter-i" d="M150.5,2.6h7.2v7.2h-7.2V2.6z M150.8,15h6.6v46h-6.6V15z"/>
						<path class="letter-r" d="M137.4,23.9c0-6.4,3.2-9.7,9.5-9.7h0.1v6.5h-0.1c-1.9,0-2.9,1-2.9,3.1V61h-6.6V23.9z"/>
						<path class="letter-t" d="M129.2,15h5.1v6.5h-5.1V61h-6.6V21.5h-4.8V15h4.8V0.1h6.6V15z"/>
						<path class="letter-a" d="M109.3,23.9c0-2.1-1-3.1-2.9-3.1h0c-1.9,0-2.9,1.1-2.9,3.1v6.2h-6.6v-6.2c0-6.4,3.2-9.7,9.5-9.7
							c6.3,0,9.5,3.2,9.5,9.7V52c0,6.5-3.2,9.7-9.5,9.7c-6.4,0-9.5-3.2-9.5-9.7v-7.7c0-6.4,2.4-9.7,7.3-9.7c2.1,0,3.8,0.5,5.1,1.5V23.9z
							 M103.5,52c0,2.1,1,3.1,2.9,3.1c1.9,0,2.9-1,2.9-3.1v-7.7c0-2.1-1-3.1-2.9-3.1c-1.9,0-2.9,1-2.9,3.1V52z"/>
						<path class="letter-p" d="M91.7,37.8c0,6.4-2.4,9.7-7.3,9.7c-2.1,0-3.8-0.5-5.1-1.5v15.7h-6.6v-52c0-6.4,3.2-9.7,9.5-9.7
							c6.3,0,9.5,3.2,9.5,9.7V37.8z M79.3,37.8c0,2.1,1,3.1,2.9,3.1c1.9,0,2.9-1,2.9-3.1V9.7c0-2.1-1-3.1-2.9-3.1c-1.9,0-2.9,1-2.9,3.1
							V37.8z"/>
						<path class="letter-a" d="M60.8,9.7c0-2.1-1-3.1-2.9-3.1h0c-1.9,0-2.9,1.1-2.9,3.1v6.2h-6.6V9.7C48.4,3.2,51.6,0,58,0c6.3,0,9.5,3.2,9.5,9.7
							v28.1c0,6.5-3.2,9.7-9.5,9.7c-6.4,0-9.5-3.2-9.5-9.7v-7.7c0-6.4,2.4-9.7,7.3-9.7c2.1,0,3.8,0.5,5.1,1.5V9.7z M55.1,37.8
							c0,2.1,1,3.1,2.9,3.1c1.9,0,2.9-1,2.9-3.1V30c0-2.1-1-3.1-2.9-3.1c-1.9,0-2.9,1-2.9,3.1V37.8z"/>
						<path class="letter-o" d="M43.3,37.8c0,6.4-3.2,9.7-9.5,9.7c-6.3,0-9.5-3.2-9.5-9.7V9.7c0-6.4,3.2-9.7,9.5-9.7c6.4,0,9.5,3.2,9.5,9.7V37.8z
							 M36.6,9.7c0-2.1-1-3.1-2.9-3.1h0c-1.9,0-2.9,1-2.9,3.1v28.1c0,2.1,1,3.1,2.9,3.1c1.9,0,2.9-1,2.9-3.1V9.7z"/>
						<path class="letter-s" d="M0,9.7C0,3.2,3.2,0,9.5,0c6.4,0,9.5,3.2,9.5,9.7v6.2h-6.6V9.7c0-2.1-1-3.1-2.9-3.1h0c-1.9,0-2.9,1-2.9,3.1v4.2
							c0,2,2.1,4.6,6.2,7.5c4.1,3,6.2,6.5,6.2,10.6v5.8c0,6.5-3.2,9.7-9.5,9.7c-6.4,0-9.5-3.2-9.5-9.7v-6.2h6.6v6.2c0,2.1,1,3.1,2.9,3.1
							c1.9,0,2.9-1,2.9-3.1v-5.2c0-2.2-2.1-4.8-6.2-7.8C2.1,21.8,0,18.2,0,14V9.7z"/>
					</svg>
				</div>						
			</a>
		</div>	
	</header><!-- #masthead -->

	<div id="content" class="site-content row">				
		<div class="col-sm-8">