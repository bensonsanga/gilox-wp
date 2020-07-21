<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>

<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="article-header">
  <div class="article-header__text">
    <div class="article-breadcrumbs">
		<ol class="article-breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
			<?php
			ah_breadcrumb(); 
			?>
		</ol>
		</div>
		<?php gilox_wp_post_thumbnail('post-thumbnail',['class' => 'article-related__image lazyload']); ?>

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="article-header__title">', '</h1>' );
		else :
			the_title( '<h2 class="article-header__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="card-story__author">
				<?php
				gilox_wp_posted_on();
				gilox_wp_posted_by();
				?>
			</div>
		<?php endif; ?>
	</div><!-- .entry-header -->
	<section class="article-content js-article-content">
		<div class="entry-content">
		<!-- <div class="gig__tickets gig__detail-section">
			<h3>Tickets</h3>
			<p>$28-88</p>

			<a class="citation-menu__copy js-citation-copy" href="https://www.gilox.com/ticketing">Find tickets at ticketing.gilox.co</a>
		</div> -->
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gilox-wp' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gilox-wp' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	
	<div class="article-hero__text">
		<?php gilox_wp_entry_footer(); ?>
	</div><!-- .entry-footer -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->








