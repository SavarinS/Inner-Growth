<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gutenbergtheme
 */

get_header(); ?>

	<main id="primary" class="site-main">
	<h1>single-post test with if.php</h1>
	<div class="container">
	<?php
	while ( have_posts() ) : the_post();
		
		//get_template_part( 'template-parts/content-single', get_post_type() );

	endwhile; // End of the loop.
	?>

	<!--start if statment to show specific content in specific page-->
	<?php 
	if(is_single('148')){           //workshop page
		get_template_part( 'template-parts/content-workshops', get_post_type() );
	} elseif (is_single('145')){    //zen coaching page
		get_template_part( 'template-parts/content-coaching', get_post_type() );
	} else {
		get_template_part( 'template-parts/content-single', get_post_type() );
	}
	
	?>
	</div> <!-- .container -->

	</main><!-- #primary -->

<?php
get_footer();
