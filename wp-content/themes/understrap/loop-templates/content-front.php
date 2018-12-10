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

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<!-- <p>content-front.php</p> -->

	<header class="entry-header">

		<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		// '</a></h2>' ); ?>

		<?php //if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php //understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php //endif; ?>

	</header><!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

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
					
						<h1 class="text-center"><?php  echo $title;?></h1>
						<div class="text-center feature-image">
							<?php echo $feature_image; ?>
						</div> 
						<?php //echo $excerpt; ?>
						<p><?php  echo $queried_post->post_content;?></p>
					
			</section>	

			<!-- Private and Business button section -->
			<section class="services">
				<h2 class="text-center">Do you want program as a personal or business purpose? </h2>
				<div class="row">
					<!-- for private sector -->
					<div class="private col">
						<?php
							$post_id = 119;
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							$link = get_permalink($post_id);
							$feature_image = get_the_post_thumbnail($post_id, 'large');
							$exceprt = get_the_excerpt($post_id);
						?>

							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>

							<div class="title-offer">
							 	<a href="<?php echo $link; ?>"><h1 class="text-center">Private</h1></a>
							</div>

							<div class="excerpt">
								<a href="<?php echo $link; ?>"><?php echo  $exceprt; ?></a>
							</div>
							
						
					
					</div>

					<!-- for business sector -->
					<div class="business col">
					<?php
							$post_id = 128;
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							$link = get_permalink($post_id);
							$feature_image = get_the_post_thumbnail($post_id, 'large');
							$exceprt = get_the_excerpt($post_id);
						?>
							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div>
								<h1>Business</h1>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>

							<div class="excerpt">
								<?php echo  $exceprt; ?>
							</div>
						
					
					</div>
				
				
				
				</div>
			</section>

			<!-- Offer section -->
			<section class="offers">
			<h2 class="text-center offer-title">We offer you</h2>
				<div class="row">
					<div class="col">
						<!-- mindfulness -->
						<?php
							$post_id = 142;
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							$link = get_permalink($post_id);
							$feature_image = get_the_post_thumbnail($post_id, 'medium');
							$excerpt = get_the_excerpt($post_id);
						?>
							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>
							<div class="content-offer">
								<p><?php  echo $excerpt;?></p>
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
							$excerpt = get_the_excerpt($post_id);
						?>

							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>
							<div class="content-offer">
								<p><?php  echo $excerpt;?></p>
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
								$excerpt = get_the_excerpt($post_id);
							?>

							<div class="feature-image">
								<?php echo $feature_image; ?>
							</div>
							<div class="title-offer">
								<h3><a href="<?php echo $link; ?>"> <?php echo $title; ?></a></h3>
							</div>
							<div class="content-offer">
								<p><?php  echo $excerpt;?></p>
							</div>
							
					
					</div>
				
				
				
				
				</div><!-- .row -->
		
			</section> <!--.offer -->

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
