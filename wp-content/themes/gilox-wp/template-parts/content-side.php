<?php
/**
 * Template part for displaying page content in page.php
 * Created by Benson Ad
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

?>



    <li class="article-related__item">
        <div class="article-related__text">
          <h3 class="article-related__title"><a href="<?php echo get_permalink();?>" data-category="Sidebar" data-action="Related Article (Title)"><?php echo the_title(); ?></a></h3>
          <a href="<?php echo get_permalink();?>" class="article-related__author"><?php echo get_the_author(); ?></a>
          </div>
            <a href="<?php echo get_permalink();?>" class="article-related__media" data-category="Sidebar" data-action="Related Article (Image)">      <picture>
              <source media="(min-width: 1280px)"
                      data-srcset="<?php echo get_the_post_thumbnail_url();?>?q=50&w=144&ar=1:1&fit=crop&auto=format 144w"
              >
              <img alt=""
                  class="article-related__image lazyload"
                  loading="lazy"
                  data-sizes="66.66667vw"
                  data-srcset="
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=320&ar=16:10&fit=crop&auto=format 320w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=400&ar=16:10&fit=crop&auto=format 400w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=480&ar=16:10&fit=crop&auto=format 480w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=560&ar=16:10&fit=crop&auto=format 560w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=640&ar=16:10&fit=crop&auto=format 640w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=720&ar=16:10&fit=crop&auto=format 720w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=800&ar=16:10&fit=crop&auto=format 800w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=880&ar=16:10&fit=crop&auto=format 880w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=960&ar=16:10&fit=crop&auto=format 960w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=1040&ar=16:10&fit=crop&auto=format 1040w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=1120&ar=16:10&fit=crop&auto=format 1120w,
                      <?php echo get_the_post_thumbnail_url();?>?q=50&w=1280&ar=16:10&fit=crop&auto=format 1280w"
                  data-src="<?php echo get_the_post_thumbnail_url();?>?q=50&w=320&ar=16:10&fit=crop&auto=format 320w"
              >
            </picture>
        </a>
    </li>

