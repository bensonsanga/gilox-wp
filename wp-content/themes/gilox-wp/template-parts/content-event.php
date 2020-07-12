<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>




                <li class="menu-collection__item">
					<article class="card-deity card-deity--small">
                    <a href="../../events/atlas/index.html" class="card-deity__link" itemprop="url">    
                        <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                                <div class="card-deity__media">
                                </div>
						    </div>
						<div class="card-deity__text">
                            <?php
                            the_title( '<h4 class="card-legend__title">', '</h4>' ); ?>
                            <p class="card-deity__subtitle" itemprop="description">By <?php the_author(); ?></p>
						</div>
					</a></article>
				</li>


<li class="menu-collection__item">
    <article class="card-deity card-deity--small" itemscope itemtype="<?php echo get_home_url(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo get_home_url(); ?>" class="card-deity__link" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
        
                        <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                                <div class="card-deity__media">
                                </div>
						    </div>
						<div class="card-deity__text">
                            <?php
                            the_title( '<h4 class="card-legend__title">', '</h4>' ); ?>
                            <p class="card-deity__subtitle" itemprop="description">By <?php the_author(); ?></p>
						</div>
        </a>  

    </article><!-- #post-<?php the_ID(); ?> -->
</li>

<?php the_ID(); ?> -->