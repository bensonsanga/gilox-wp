<?php
/**
 * Template part for displaying page content in page.php
 * Created by Benson Ad
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>

    <a href="<?php get_permalink();?>" class="article-card article-card--small-1x" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
         <div class="article-card__media">
            <?php if ( has_post_thumbnail() ) {
              gilox_wp_post_thumbnail();
              } else { ?>
              <img sizes="(min-width: 960px) 20vw, 25vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>
              </div>
        <div class="">
              <?php get_the_author( '<h5 class="article-card__subtitle">', '</h5>' ); ?>
          <?php the_title( '<h3 class="article-card__title">', '</h3>' ); ?>
        </div>
          <div class="">
            <div><img src="<?php bloginfo('template_directory');?>/images/logo/author.png"> &nbsp;</div>
            <div class="article-byline__text">
              <span class="article-byline__name">Gilox</span>
              <span class="article-byline__time">7</span>
            </div>
          </div>

    </a>


