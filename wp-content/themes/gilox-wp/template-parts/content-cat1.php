<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 * get_the_post_thumbnail_url(
 */

?>




    <a href="<?php get_permalink();?>" class="article-card article-card--large-2x"  id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
         <div class="article-card__media">
                <?php if ( has_post_thumbnail() ) { ?>
                    <img sizes="(min-width: 960px) 20vw, 25vw" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="<?php the_title(); ?>" />
                    <img alt="Artist" title="Artist" class="article-card__image lazyload" loading="lazy" data-sizes="(min-width: 1920px) 736px, (min-width: 1280px) 42.5vw, (min-width: 640px) 50vw, 100vw" data-srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=320&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=360&amp;ar=3:2&amp;fit=crop&amp;auto=format 360w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=375&amp;ar=3:2&amp;fit=crop&amp;auto=format 375w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=480&amp;ar=3:2&amp;fit=crop&amp;auto=format 480w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=540&amp;ar=3:2&amp;fit=crop&amp;auto=format 540w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=576&amp;ar=3:2&amp;fit=crop&amp;auto=format 576w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=640&amp;ar=3:2&amp;fit=crop&amp;auto=format 640w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=720&amp;ar=3:2&amp;fit=crop&amp;auto=format 720w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=750&amp;ar=3:2&amp;fit=crop&amp;auto=format 750w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=768&amp;ar=3:2&amp;fit=crop&amp;auto=format 768w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=800&amp;ar=3:2&amp;fit=crop&amp;auto=format 800w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=960&amp;ar=3:2&amp;fit=crop&amp;auto=format 960w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1024&amp;ar=3:2&amp;fit=crop&amp;auto=format 1024w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1080&amp;ar=3:2&amp;fit=crop&amp;auto=format 1080w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1160&amp;ar=3:2&amp;fit=crop&amp;auto=format 1160w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1280&amp;ar=3:2&amp;fit=crop&amp;auto=format 1280w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1360&amp;ar=3:2&amp;fit=crop&amp;auto=format 1360w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1440&amp;ar=3:2&amp;fit=crop&amp;auto=format 1440w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1472&amp;ar=3:2&amp;fit=crop&amp;auto=format 1472w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1536&amp;ar=3:2&amp;fit=crop&amp;auto=format 1536w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1600&amp;ar=3:2&amp;fit=crop&amp;auto=format 1600w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1680&amp;ar=3:2&amp;fit=crop&amp;auto=format 1680w" data-src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=640&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=640&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w" sizes="(min-width: 1920px) 736px, (min-width: 1280px) 42.5vw, (min-width: 640px) 50vw, 100vw" srcset="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=320&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=360&amp;ar=3:2&amp;fit=crop&amp;auto=format 360w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=375&amp;ar=3:2&amp;fit=crop&amp;auto=format 375w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=480&amp;ar=3:2&amp;fit=crop&amp;auto=format 480w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=540&amp;ar=3:2&amp;fit=crop&amp;auto=format 540w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=576&amp;ar=3:2&amp;fit=crop&amp;auto=format 576w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=640&amp;ar=3:2&amp;fit=crop&amp;auto=format 640w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=720&amp;ar=3:2&amp;fit=crop&amp;auto=format 720w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=750&amp;ar=3:2&amp;fit=crop&amp;auto=format 750w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=768&amp;ar=3:2&amp;fit=crop&amp;auto=format 768w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=800&amp;ar=3:2&amp;fit=crop&amp;auto=format 800w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=960&amp;ar=3:2&amp;fit=crop&amp;auto=format 960w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1024&amp;ar=3:2&amp;fit=crop&amp;auto=format 1024w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1080&amp;ar=3:2&amp;fit=crop&amp;auto=format 1080w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1160&amp;ar=3:2&amp;fit=crop&amp;auto=format 1160w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1280&amp;ar=3:2&amp;fit=crop&amp;auto=format 1280w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1360&amp;ar=3:2&amp;fit=crop&amp;auto=format 1360w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1440&amp;ar=3:2&amp;fit=crop&amp;auto=format 1440w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1472&amp;ar=3:2&amp;fit=crop&amp;auto=format 1472w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1536&amp;ar=3:2&amp;fit=crop&amp;auto=format 1536w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1600&amp;ar=3:2&amp;fit=crop&amp;auto=format 1600w,
                       <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=1680&amp;ar=3:2&amp;fit=crop&amp;auto=format 1680w">
                    <?php  } else { ?>
                    
                    <img sizes="(min-width: 960px) 20vw, 25vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
                    
                <?php } ?>
        </div>
        <div class="">
              <?php get_the_author( '<h5 class="article-card__subtitle">', '</h5>' ); ?>
          <?php the_title( '<h3 class="article-card__title">', '</h3>' ); ?>
              <?php echo '<p class="article-card__description">' . get_the_excerpt() . '</p>'; ?>
        </div>
        <div class="">
          <div><img src="<?php bloginfo('template_directory');?>/images/logo/author.png"> &nbsp;</div>
          <div class="">
            <span class="article-byline__name">Gilox</span>
            <span class="article-byline__time">7</span>
          </div>
        </div>

    </a>
 