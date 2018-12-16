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
			<?php

				/*
				* Get content introduction
				*/
				get_template_part( 'loop-templates/content-front', 'intro' );
			?>
		</section>

		<!-- Private and Business button section -->
		<section class="services">
			<h2 class="text-center">Do you want program as a personal or business purpose? </h2>
				<?php

					/*
					* Get content private sector and business sector
					*/
					get_template_part( 'loop-templates/content-front', 'sector' );
				?>
		</section>

		<hr>

		<!-- Offer section -->
		<section class="offers">
			<h2 class="text-center offer-title">We offer you</h2>
			<?php

					/*
					* Get content offers
					*/
					get_template_part( 'loop-templates/content-front', 'offers' );
				?>
				
		</section> <!--.offer -->

		<!-- Begin Mailchimp Signup Form -->
		<?php

			/*
			* Get content offers
			*/
			get_template_part( 'loop-templates/content-front', 'signup' );
		?>

		<hr>
		<!--End mc_embed_signup-->

		

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
