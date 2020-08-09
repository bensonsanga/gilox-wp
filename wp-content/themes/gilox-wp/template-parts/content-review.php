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
    <article class="card-legend" itemscope itemtype="<?php echo get_permalink();?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo get_permalink();?>" class="card-legend__media" itemprop="image" itemscope itemtype="<?php echo get_permalink();?>">
        
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
                
			<div class="article-byline">
			<div class="article-byline__icon">
				<img width="24px" src="<?php bloginfo('template_directory');?>/images/logo/author-01.svg">
			</div>
			<div class="article-byline__text">
				<span class= "article-byline__name">
				<?php
					// gilox_wp_posted_on();
					gilox_wp_posted_by();
					?>
				</span>
				<span class="article-byline__time">2</span>
			</div>
			</div>
            <?php endif; ?>

        
                <?php
                    echo '<p class="card-legend__description">' . get_the_excerpt() . '</p>';
                ?>
            
        </div>

    </article>
</li>


