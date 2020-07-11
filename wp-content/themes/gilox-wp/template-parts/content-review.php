<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>

<article class="card-legend" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header">
    
	<?php gilox_wp_post_thumbnail(); ?>

		<?php
			the_title( '<h4 class="card-legend__title">', '</h4>' );
		

		if ( 'post' === get_post_type() ) :
			?>
			<div class="card-legend__author">
				<?php
				gilox_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="card-legend__text">
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

		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->








<!--

		<article class="card-story" itemscope itemtype="https://schema.org/CreativeWork">
			<a href="greek-mythology/articles/article1.html" class="card-story__media" itemprop="image" itemscope itemtype="https://schema.org/ImageObject"><img alt="Duduke video" title="News and Entertainment Gists" class="card-story__image" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg">
            </a>
            <div class="card-story__text">
                <h4 class="card-story__title" itemprop="name">
                    <a href="greek-mythology/articles/article1.html" class="card-story__link" itemprop="url">Latest Article 1</a>
                </h4>
                <div class="card-story__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <a href="#" class="card-story__author-name" itemprop="url">          <span itemprop="name">Simisola</span></a>
                </div>
                <p class="card-story__description" itemprop="description">This music video was release by Simisola to celebrate her unborn baby. A challenge has been initiated on Twitter regarding this via the hashtag #dudukechallenge.</p>
            </div>
      </article><!-- #post-<?php the_ID(); ?> -->