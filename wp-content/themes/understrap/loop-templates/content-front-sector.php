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



<!-- Private and Business button section -->
	<div class="row">
		<!-- for private sector -->
			<div class="private col-sm">
				<?php //while ( have_posts() ) : the_post(); ?>
					<?php
						$post_id = 119;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						$link = get_permalink($post_id);
						//$feature_image = get_the_post_thumbnail($post_id, 'large');
						$exceprt = get_the_excerpt($post_id);
					?>

					<div class="feature-image">
						<?php //echo $feature_image; ?>
					</div>

					<div class="title-offer">
						<h1 class="text-center"><a href="<?php echo $link; ?>"> Private</a></h1>
								 
					</div>

					<div class="excerpt">
						<a href="<?php echo $link; ?>"><?php echo  $exceprt; ?></a>
					</div>
							
					<?php //endwhile; ?>
					
			</div><!-- .private col-sm -->

			<!-- for business sector -->
			<div class="business col-sm">
				<?php
					$post_id = 128;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					$link = get_permalink($post_id);
					$feature_image = get_the_post_thumbnail($post_id, 'large');
					$exceprt = get_the_excerpt($post_id);
				?>
				
				<div class="feature-image">
					<?php //echo $feature_image; ?>
				</div>
				<div class="title-offer">
					<h1 class="text-center"><a href="<?php echo $link; ?>">Business</a></h1>
									
				</div>

				<div class="excerpt">
					<a href="<?php echo $link; ?>"><?php echo  $exceprt; ?></a>
				</div>
								
							
			</div><!-- .business col-sm -->
				
	</div><!-- .row -->
				


			