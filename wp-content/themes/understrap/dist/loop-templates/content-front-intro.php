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


<!-- get Welcome post -->


<?php 
	// The Query
		$pages = new WP_Query([
			'post_type' => 'page',
			//'page_id'=> array ('142, 134, 161')
			'p' => 138	
		]);
	
	// The Loop
	?>
	<div class="row">
	<?php  
			
			if ( $pages->have_posts() ) {
				while ( $pages->have_posts() ) {
					$pages->the_post(); ?>
					<div class="col-4"><?php the_post_thumbnail('medium'); ?></div>
  					<div class="col-8">
					  <h1 class="text-center"><?php the_title(); ?></h1>
					  <?php the_content(); ?>
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
	
  	
					
	
