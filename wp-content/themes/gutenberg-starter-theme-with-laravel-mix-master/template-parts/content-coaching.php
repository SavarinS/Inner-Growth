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
	<header class="entry-header">
	<h1>content-coaching.php from single-post.php</h1>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php gutenbergtheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="content-private-business"></div>
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gutenbergtheme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gutenbergtheme' ),
					'after'  => '</div>',
				) );
			?>
		</div>

		<!-- get zen coaching prices and package -->
		<div class="content-zen-prices">
			<?php  
			$my_postid = 111;//This is page id or post id
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$title = $content_post->post_title;
			?>
			<h2><?php echo $title; ?></h2>
			<?php echo  $content; ?>
		
		</div>

		<div class="row">
			<!-- get zen coaching information about the benefits of having zen coaching -->
			<div class="coaching col">
				<div class="content-zen-benefits">
					<?php  
					$my_postid = 107;//This is page id or post id
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$title = $content_post->post_title;
					?>
					<h2><?php echo $title; ?></h2>
					<?php echo  $content; ?>
				
				</div>
			</div><!-- .col -->
			<div class="coaching col">
				<div class="content-zen-benefits">
					<?php  
					$my_postid = 109;//This is page id or post id
					$content_post = get_post($my_postid);
					$content = $content_post->post_content;
					$title = $content_post->post_title;
					?>
					<h2><?php echo $title; ?></h2>
					<?php echo  $content; ?>
				
				</div>
			</div><!-- .col -->
		</div><!-- .row -->

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //gutenbergtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
