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
		<h2 class><?php the_title() ?></h2>
		<?php the_content() 

		?>
		<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?>

		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //gutenbergtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
