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
	<h1>content-test.php from single-posts.php</h1>
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gutenbergtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
