<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>

<!--

    <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/atlas/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="http://localhost/Gilox">
              <div class="card-deity__media">
                  <img data-src="http://localhost/Gilox/wp-content/themes/gilox-wp/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format" alt="Jupiter, Roman King of the Gods" title="Great Artists" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="http://localhost/Gilox/wp-content/themes/gilox-wp/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format">
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">KSA</h4>
              <p class="card-deity__subtitle" itemprop="description">King Sunny Ade</p>
            </div>
        </a></article>
                </li> -->

<li class="card-pantheon__item">
    <article class="card-deity card-deity--small" itemscope itemtype="<?php echo get_home_url(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <a href="<?php echo get_permalink() ?>" class="card-deity__link" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
        
                        <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                                <div class="card-deity__media">

                                <?php if ( has_post_thumbnail() ) { ?>
                                
                                    <img data-src="<?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=80&amp;auto=format" alt="Jupiter, Roman King of the Gods" title="Great Artists" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="http://localhost/Gilox/wp-content/themes/gilox-wp/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format">

                                <?php
                                
                                } else { ?>
                                <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format" alt="Jupiter, Roman King of the Gods" title="Great Artists" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="http://localhost/Gilox/wp-content/themes/gilox-wp/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format">

                                <?php } ?>
                                </div>
						    </div>
						<div class="card-deity__text">
                            <?php
                            the_title( '<h4 class="card-deity__title">', '</h4>' ); ?>
                            <p class="card-deity__subtitle" itemprop="description">By <?php the_author(); ?></p>
						</div>
        </a>  

    </article>
</li>