<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>

<article class="article-card article-card--small-1x" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php
		if ( is_singular() ) :
			the_title( '<h5 class="article-card__title">', '</h5>' );
		else :
			the_title( '<h3 class="article-card__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;
        gilox_wp_post_thumbnail();
		if ( 'post' === get_post_type() ) :
			?>
			<div class="article-card__subtitle">
				<?php
				gilox_wp_posted_on();
				gilox_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->


