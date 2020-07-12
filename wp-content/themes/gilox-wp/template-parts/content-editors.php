<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>



<li class="home-stories__item">
    <article class="card-story" itemscope="" itemtype="<?php echo get_home_url(); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php echo get_home_url(); ?>" class="card-story__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
        
            <?php if ( has_post_thumbnail() ) { ?>
                <img class="card-story__image" sizes="(min-width: 960px) 25vw, (min-width: 640px) 33.33333vw, 100vw" src="get_the_post_thumbnail_url()" alt="<?php the_title(); ?>" />
                <?php
            } else { ?>
                <img class="card-story__image" sizes="(min-width: 960px) 25vw, (min-width: 640px) 33.33333vw, 100vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>
        </a>  
        <div class="card-legend__text">
            <?php
                the_title( '<h4 class="card-legend__title">', '</h4>' ); 
            

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="card-legend__author">
                    
                    By <?php the_author(); ?><br />
                    
                </div>
            <?php endif; ?>

        
                <?php
                    echo '<p class="card-legend__description">' . get_the_excerpt() . '</p>';
                ?>
            
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->
</li>
