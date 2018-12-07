<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gutenbergtheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<p>content-front.php</p>
	<header class="entry-header">
	
	</header><!-- .entry-header -->

	
		<div class="entry-content">

			<!-- Introduction section -->
			<section class="introduction">
					

					<!-- get Welcome post -->
					<?php
						$post_id = 134;
						// $excerpt = the_excerpt();
						$feature_image = get_the_post_thumbnail($post_id, 'medium');
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
					?>
					
						<h1 class="center"><?php  echo $title;?></h1>
						<?php echo $feature_image; ?> 
						<?php //echo $excerpt; ?>
						<p><?php  echo $queried_post->post_content;?></p>
					
			</section>	

			<!-- Private and Business button section -->
			<section class="services">
				<div class="row">
					<div class="private col">
						<h2>For yourself</h2>
						<button type="button" class="btn btn-success">Private</button>
					
					</div>
					<div class="business col">
						<h2>For your company</h2>
						<button type="button" class="btn btn-success">Business</button>
					
					</div>
				
				
				
				</div>
			</section>

			<!-- Offer section -->
			<section class="offers">
				<div class="row">
					<div class="col">
						<!-- mindfulness -->
						<?php
							$post_id = 142;
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							$link = get_permalink($post_id);
							$feature_image = get_the_post_thumbnail($post_id, 'medium');
						?>
							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>
							<div class="content-offer">
								<p><?php  echo $queried_post->post_content;?></p>
							</div>
						
					
					</div>

					<div class="col">
						<!-- Zen coaching -->
						<?php
							$post_id = 145;
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							$link = get_permalink($post_id);
							$feature_image = get_the_post_thumbnail($post_id, 'medium');
						?>

							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>
							<div class="content-offer">
								<p><?php  echo $queried_post->post_content;?></p>
							</div>
						
					
					</div>

					<div class="col">
					<!-- workshops -->
							<?php
								$post_id = 148;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								$link = get_permalink($post_id);
								$feature_image = get_the_post_thumbnail($post_id, 'medium');
							?>

							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>
							<div class="content-offer">
								<p><?php  echo $queried_post->post_content;?></p>
							</div>
							
					
					</div>
				
				
				
				
				</div><!-- .row -->
		
			</section> <!--.offer -->

		</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //gutenbergtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
