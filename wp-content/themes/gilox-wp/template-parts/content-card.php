<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>


<div class="article-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="article-card article-card--large-2x">
		<div class="article-card__media">
		
		<?php if ( has_post_thumbnail() ) {
        gilox_wp_post_thumbnail();
        } else { ?>
        <img sizes="(min-width: 960px) 20vw, 25vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
		
		<?php
		
		if ( is_singular() ) :
			the_title( '<h5 class="article-card__title">', '</h5>' );
		else :
			the_title( '<h3 class="article-card__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;
        
		if ( 'post' === get_post_type() ) :
			?>
			<div><img src="<?php bloginfo('template_directory');?>/images/logo/Favicon.png"> &nbsp;</div>
			<div class="article-byline__text">
				<?php
				gilox_wp_posted_on();
				gilox_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		</div>
	</a>

</div><!-- #post-<?php the_ID(); ?> -->


