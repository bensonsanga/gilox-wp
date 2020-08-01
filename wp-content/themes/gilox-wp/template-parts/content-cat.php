<?php
/**
 * Template part for     displaying page content in page.php
 * Created by Benson Ad
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>
<div class="article-grid">
<a href="<?php echo get_permalink();?>" class="article-card article-card--large-2x">
  <div class="article-card__media">
          <img alt="Just give it a sec" title="Just give it a sec" class="article-card__image lazyload" loading="lazy" 
          data-sizes="(min-width: 1920px) 736px, (min-width: 1280px) 42.5vw, (min-width: 640px) 50vw, 100vw" 
          data-srcset="<?php echo get_the_post_thumbnail_url();?>?q=75&amp;w=1680&amp;ar=3:2&amp;fit=crop&amp;auto=format 1680w" 
            data-src="<?php echo get_the_post_thumbnail_url();?>?q=75&amp;w=640&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w" 
            src="<?php echo get_the_post_thumbnail_url();?>?q=75&amp;w=640&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w" 
            sizes="(min-width: 1920px) 736px, (min-width: 1280px) 42.5vw, (min-width: 640px) 50vw, 100vw" 
            srcset="<?php echo get_the_post_thumbnail_url();?>?q=75&amp;w=320&amp;ar=3:2&amp;fit=crop&amp;auto=format 320w,
">
  </div>
  <div class="article-card__text">
    <!-- <h5 class="article-card__subtitle"><?php echo get_the_category(); ?></h5> -->
    <h4 class="article-item__title"><?php echo the_title(); ?></h4>
    <p class="article-card__description"><?php echo get_the_excerpt(); ?></p>
    <div class="article-byline">
      <div class="article-byline__icon">
        <img src="<?php bloginfo('template_directory');?>/images/logo/author-01.svg">
      </div>
      <div class="article-byline__text">
        <span class="article-byline__name"><?php echo get_the_author(); ?></span>
        <span class="article-byline__time">2</span>
      </div>
    </div>
  </div>
</a>
</div>