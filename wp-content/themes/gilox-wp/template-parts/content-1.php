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
		<li class="article-breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a href="../../index.html" class="article-breadcrumbs__link" data-category="Navigation" data-action="Article Breadcrumb" itemprop="item" itemtype="https://schema.org/CollectionPage">
			<span class="article-breadcrumbs__title" itemprop="name">Gilox</span>
			</a>
			<meta itemprop="position" content="1">
		</li>
		<li class="article-breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a href="#" class="article-breadcrumbs__link" data-category="Navigation" data-action="Article Breadcrumb" itemprop="item" itemtype="https://schema.org/CollectionPage">
			<span class="article-breadcrumbs__title" itemprop="name"> Artist</span>
			</a>
			<meta itemprop="position" content="2">
		</li>
		</ol>
		</div>
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
		<?php gilox_wp_post_thumbnail('post-thumbnail',['class' => 'article-related__image lazyload']); ?>

		<div class="entry-content">
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








