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
	$post_id = 138;
	// $excerpt = the_excerpt();
	$feature_image = get_the_post_thumbnail($post_id, 'medium');
	$queried_post = get_post($post_id);
	$title = $queried_post->post_title;
?>
					
	<h1 class="text-center"><?php  echo $title;?></h1>
	<div class="text-center main-feature-image">
		<?php echo $feature_image; ?>
	</div> 
		<?php //echo $excerpt; ?>
		<p><?php  echo $queried_post->post_content;?></p>
					
	
