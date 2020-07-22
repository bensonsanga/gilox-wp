<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>



                    <article class="card-mythology" data-mythology="greek" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                          <a href="greek-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">AFROBEATS</h6>
                                  </div>
                            <h3 class="card-mythology__title" itemprop="name">WIZKID</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Wizkid latest genres, music and videos here </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/davido.png"
                                alt="Greek Mythology" border="0"
                                class="card-mythology__image"
                                title="Afro beats"
                                itemprop="url">    </div>
                          </a>
                      </article>



<li class="home-legends__item">
    <article class="card-legend" itemscope itemtype="<?php get_permalink();?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php get_permalink();?>" class="card-legend__media" itemprop="image" itemscope itemtype="<?php get_permalink();?>">
        
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
                    
                </div>
            <?php endif; ?>

        
                <?php
                    echo '<p class="card-legend__description">' . get_the_excerpt() . '</p>';
                ?>
            
        </div>

    </article>
</li>