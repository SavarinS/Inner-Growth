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

	</header><!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	
	<div class="entry-content">

		<!-- Introduction section -->
		<!-- <div class="container-fluid"> -->
		<section class="introduction">
			<?php
				//get_template_part( 'loop-templates/content-front', 'intro' );
			?>
		</section>

		

		<!-- Private and Business button section -->
		<section class="services">
			<h2 class="text-center">Do you want program as a personal or business purpose? </h2>
				<?php get_template_part( 'loop-templates/content-front', 'sector' );?>
		</section>

		<hr>

		<!-- Offer section -->
		<section class="offers">
			<h2 class="text-center offer-title">We offer you</h2>
			<?php get_template_part( 'loop-templates/content-front', 'offers' );?>
		</section> <!--.offer -->

		<!-- Begin Mailchimp Signup Form -->
		<section class="signup">
			<?php get_template_part( 'loop-templates/content-front', 'signup' );?>
		</section>
		<hr>
		<!--End mc_embed_signup-->

		<!-- portfolio logo -->
		<section class="portfolio">
			<?php get_template_part( 'loop-templates/content-front', 'port' );?>
		</section>
		<!-- end portfolio logo -->

		

	</div><!-- .entry-content -->
	

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
