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
	<div class="entry-content">

		<!-- Private and Business button section -->
		<div class="card">
			<div class="card-header service">
			
				<h2 class="text-center">Intreested any program? </h2>
			</div>
				<div class="card-body">
						<?php get_template_part( 'loop-templates/content-front', 'sector' );?>
				</div>	
		</div>

		<!-- Offer section -->
		<div class="card">
			<div class="card-header offers">
				<h2 class="text-center offer-title">We offer you</h2>
			</div>
			<div class="card-body">
				<?php get_template_part( 'loop-templates/content-front', 'offers' );?>
			</div> <!--.offer -->
		</div>

		<!-- Begin Mailchimp Signup Form -->
		<div class="card">
  			<div class="card-body signup">
				<?php get_template_part( 'loop-templates/content-front', 'signup' );?>
  			</div>
		</div>
		<!-- <hr> -->
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
