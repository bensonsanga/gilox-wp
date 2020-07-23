<?php
/**
 * Template part for displaying page content in page.php
 * Created by Benson Ad
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>

    <a href="<?php echo get_permalink();?>" class="article-card article-card--small-1x" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
         <div class="article-card__media">
            <?php if ( has_post_thumbnail() ) { ?>
              
              <img alt="Artist" title="Artist" class="article-card__image lazyload" loading="lazy" data-sizes="(min-width: 1920px) 352px, (min-width: 1280px) 20vw, (min-width: 640px) 25vw, 50vw" data-src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>?q=75&amp;w=320&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w" sizes="(min-width: 1920px) 352px, (min-width: 1280px) 20vw, (min-width: 640px) 25vw, 50vw">

              <?php
              
              } else { ?>

              <img alt="Artist" title="Artist" class="article-card__image lazyload" loading="lazy" data-sizes="(min-width: 1920px) 352px, (min-width: 1280px) 20vw, (min-width: 640px) 25vw, 50vw" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg?q=75&amp;w=320&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w" sizes="(min-width: 1920px) 352px, (min-width: 1280px) 20vw, (min-width: 640px) 25vw, 50vw">

            <?php } ?>
        </div>
        <div class="">
              <?php get_the_author( '<h5 class="article-card__subtitle">', '</h5>' ); ?>
          <?php the_title( '<h3 class="article-card__title">', '</h3>' ); ?>
        </div>
        <div class="article-byline">
          <div><img src="<?php bloginfo('template_directory');?>/images/logo/author.png"> &nbsp;</div>
            <div class="article-byline__text">
              <span class="article-byline__name">Gilox</span>
              <span class="article-byline__time">9</span>
            </div>
          </div>
        </div>

    </a>


