
<?php
/**
 * Template part for displaying page content in page.php
 * Created by Benson Ad
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>


<div class="c-video-gallery__item c-slider__item" data-slider-item="">

<article class="c-card c-card--video-thumb  t-semibold">
  <a href="<?php echo get_permalink();?>" class="c-card__wrap" data-video-gallery-thumb="" data-tag="TV" data-heading="‘The First Time’: Thomas Middleditch and Ben Schwartz" data-lead="The comedy duo have a new improv series on Netflix, 'Middleditch &amp; Schwartz'" data-permalink="<?php echo get_permalink();?>" data-tag-permalink="/tv/">

    <figure class="c-card__image" data-active-text="Now Playing">
      <div hidden="">
        <script type="text/javascript" src="https://content.jwplatform.com/libraries/zFOPDjEV.js"></script>
        <div id="jwplayer_QiQSuoWk_div" data-videoid="QiQSuoWk" data-jsonfeed="https://content.jwplatform.com/feeds/QiQSuoWk.json" data-jwplayer-id="jwplayer_QiQSuoWk_div"></div>
      </div>


      <div class="c-crop c-crop--ratio-7x4">
        <img width="1260" height="720" src="http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=300" data-src="http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=300" class="c-crop__img wp-post-image visible" alt="thomas middleditch ben schwartz" data-srcset="http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=300 300w, http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=450 450w, http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=350 350w, http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=210 210w" sizes="(max-width: 480px) 210px, (max-width: 767px) 350px,(max-width: 959px) 450px, 300px" srcset="http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=300 300w, http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=450 450w, http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=350 350w, http://i3.ytimg.com/vi/<?php echo get_the_excerpt(); ?>/maxresdefault.jpg?resize=1260,720&amp;w=210 210w"> </div><!-- .c-crop -->

    </figure><!-- .c-card__image -->

    <header class="c-card__header">

      <h3 class="c-card__heading "> <?php echo the_title(); ?> </h3><!-- .c-card__heading -->

    </header><!-- .c-card__header -->
  </a><!-- .c-card__wrap -->
</article><!-- .c-card -->
</div><!-- /.c-video-gallery__item c-slider__item -->