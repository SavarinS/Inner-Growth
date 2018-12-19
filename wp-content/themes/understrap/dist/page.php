<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
	<div class="container-fluid">
		<div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row">
				<!-- Do the left sidebar check -->

			<?php //if ( is_home() || is_page( array( 'About us', 'Contact us', 'Individual Zen Coaching', 'Workshops', 'About the founder', 'Inner Growth in media','Business References', 'Zen coaching testimonials', 'Mindfulness testimonials', 'Corporate Social Responsibility', 'From Inner Growth to business growth', 'Our mindfulness offer' ))  ) : ?>
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
			<?php //endif; ?>	

				

			
	

					<main class="site-main" id="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>

						<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->

					<!-- Do the right sidebar check -->
					<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

			</div><!-- .row -->
		

		</div><!-- Container end -->
	</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
