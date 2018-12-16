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
			//'page_id'=> array ('142, 134, 161')
			'post__in' => array(142, 134, 161)	
		]);
	
	// The Loop
	?>
	<div class="card-deck">

	<?php  
			
		if ( $pages->have_posts() ) {
			while ( $pages->have_posts() ) {
				$pages->the_post(); ?>
				<div class="card">
				

					<img class="card-img-top" src=<?php the_post_thumbnail(); ?>>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<h3><a href="<?php //echo $link; ?>"> <?php //echo $title; ?></a></h3>
						<p class="card-text"><?php  //echo $excerpt;?></p>
						<p class="card-text"><?php the_excerpt(); ?></p>
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

