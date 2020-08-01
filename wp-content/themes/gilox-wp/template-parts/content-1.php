<?php


?>

<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="article-header">
  <div class="article-header__text">
    
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
			
				<img class="article-byline__icon" src="<?php bloginfo('template_directory');?>/images/logo/author-01.svg">
				<?php
				// gilox_wp_posted_on();
				gilox_wp_posted_by();
				?>
			</div>
		<?php endif; ?> 
	</div><!-- .entry-header -->
	<section class="article-content js-article-content">
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
	
	</section>
</article><!-- #post-<?php the_ID(); ?> -->








