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
		<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
			/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   		We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<div id="mc_embed_signup">
		<form action="https://facebook.us7.list-manage.com/subscribe/post?u=d6162fe49fb9484947a597aff&amp;id=54ec87575e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
			<div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL">Newsletters</label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d6162fe49fb9484947a597aff_54ec87575e" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</div>
		</form>
		</div>

<!--End mc_embed_signup-->

		

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
