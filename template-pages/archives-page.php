<?php
/*
Template Name: Archives Page
*/

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-xs-12" role="main">
			<header class="page-header">		
				<h1 class="page-title">Storage</h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php
			    $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
			    FROM $wpdb->posts WHERE post_status = 'publish'
			    AND post_type = 'post' ORDER BY post_date DESC");
			 
			    foreach($years as $year): ?>
			        <h2><?php echo $year; ?></h2>
			        <ul class="list-inline archive-month-list">
				        <?php
				            $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
				            FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post'
				            AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
				 
				            foreach($months as $month): ?>
						        <li><a href="<?php echo get_month_link($year, $month); ?>">
						            <?php echo date('F', mktime(0, 0, 0, $month));?></a>
						        </li>
							<?php endforeach;?>
			        </ul>
				<?php endforeach; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php
get_footer();
