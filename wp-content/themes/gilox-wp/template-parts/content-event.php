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
    <article class="card-deity card-deity--small" itemscope itemtype="<?php echo get_home_url(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo get_permalink() ?>" class="card-deity__link" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
        
                        <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                                <div class="card-deity__media">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <img data-src="<?php echo the_post_thumbnail_url(); ?>" alt="Zeus, Greek King of the Gods" title="Zeus, Greek King of the Gods" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="https://media.mythopedia.com/assets/images/greek-mythology/gods/zeus/zeus-greek-king-of-the-gods--avatar.jpg?q=75&amp;w=80&amp;auto=format">
                                    <?php
                                } else { ?>
                                    <img class="card-story__image" sizes="(min-width: 960px) 25vw, (min-width: 640px) 33.33333vw, 100vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
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