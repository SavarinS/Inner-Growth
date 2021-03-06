<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php 
	// The Query
	

		$pages = new WP_Query([
			'post_type' => 'page',
			//'page_id'=> array (107, 180, 113)
			'post__in' => array(107, 180, 113)	
		]);
	
	// The Loop
	?>
	<div class="card-deck">

	<?php  
			
		if ( $pages->have_posts() ) {
			while ( $pages->have_posts() ) {
				$pages->the_post(); ?>
				<div class="card">
				
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        			<?php the_post_thumbnail(); ?>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5></a>
						<p class="card-text"><?php //the_excerpt(); ?></p>
					</div>
				</div>
			<?php  
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		}
?>
	
	</div>
	

