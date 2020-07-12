<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>
<li class="home-legends__item">
    <article class="card-legend" itemscope itemtype="<?php echo get_home_url(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo get_home_url(); ?>" class="card-legend__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
        
        <?php if ( has_post_thumbnail() ) {
        gilox_wp_post_thumbnail();
        } else { ?>
        <img sizes="(min-width: 960px) 20vw, 25vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
        </a>  
        <div class="card-legend__text">
            <?php
                the_title( '<h4 class="card-legend__title">', '</h4>' ); 
            

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="card-legend__author">
                    
                    By <?php the_author(); ?><br />
                    
                </div><!-- .entry-meta -->
            <?php endif; ?>

        
                <?php
                    echo '<p class="card-legend__description">' . get_the_excerpt() . '</p>';
                ?>
            
        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->
</li>







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