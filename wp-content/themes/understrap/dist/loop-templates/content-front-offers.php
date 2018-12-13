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

<!-- Offer section -->
	<div class="row">
		<div class="col">
			<!-- mindfulness -->
				<?php
					$post_id = 113;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					$link = get_permalink($post_id);
					$feature_image = get_the_post_thumbnail($post_id, 'medium');
					$excerpt = get_the_excerpt($post_id);
				?>
				
				<div class="feature-image">
					<?php echo $feature_image; ?>
				</div>

				<div class="title-offer text-center">
					<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
				</div>

				<div class="content-offer">
					<p class="text-center"><?php  echo $excerpt;?></p>
				</div>
						
					
		</div><!-- .col -->

		<div class="col"><!-- Zen coaching -->
						
			<?php
				$post_id = 107;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				$link = get_permalink($post_id);
				$feature_image = get_the_post_thumbnail($post_id, 'medium');
				$excerpt = get_the_excerpt($post_id);
			?>

			<div class="feature-image">
				<?php echo $feature_image; ?>
			</div> 
			<div class="title-offer text-center">
				<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
			</div>
			<div class="content-offer">
				<p class="text-center"><?php  echo $excerpt;?></p>
			</div>
						
					
		</div><!-- .col -->

		<div class="col"><!-- workshops -->
					
			<?php
				$post_id = 180;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				$link = get_permalink($post_id);
				$feature_image = get_the_post_thumbnail($post_id, 'medium');
				$excerpt = get_the_excerpt($post_id);
			?>

			<div class="feature-image">
				<?php echo $feature_image; ?>
			</div>
			<div class="title-offer text-center">
				<h3><a class="text-center" href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
			</div>
			<div class="content-offer">
				<p class="text-center"><?php  echo $excerpt;?></p>
			</div>
							
		</div><!-- .col -->
</div><!-- .row -->
		
			