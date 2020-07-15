<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>



<div class="article-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php get_permalink();?>" class="article-card article-card--large-2x">
         <div class="article-card__media">
	        <?php gilox_wp_post_thumbnail(); ?>
        </div>
	<div class="article-card__text">
        <?php get_the_author( '<h5 class="article-card__subtitle">', '</h5>' ); ?>
		<?php the_title( '<h3 class="article-card__title">', '</h3>' ); ?>
        <?php echo '<p class="article-card__description">' . get_the_excerpt() . '</p>'; ?>
	</div>
    <div class="article-byline">
      <div><img src="<?php bloginfo('template_directory');?>/images/Avatars/avatar.jpg"> &nbsp;</div>
      <div class="article-byline__text">
        <span class="article-byline__name">Gilox</span>
        <span class="article-byline__time">7</span>
      </div>
    </div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'gilox-wp' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<h4 class="card-legend__title">',
				'</h4>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
    </a>
</div>
