<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header">
		<?php the_title( '<h4 class="article-card__title">', '</h4>' ); ?>
	</header><!-- .entry-header -->

	<?php gilox_wp_post_thumbnail(); ?>

	<section class="">
		<?php
		echo '<p class="article-header__description">' . get_the_excerpt() . '</p>';

		
		?>
	</section><!-- .entry-content -->

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
</article><!-- #post-<?php the_ID(); ?> -->
