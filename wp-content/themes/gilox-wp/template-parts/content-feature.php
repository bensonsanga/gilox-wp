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
 
        <a href="<?php echo get_permalink(); ?>" class="card-pantheon__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
            <img alt="History" title="History" class="card-pantheon__image" sizes="(min-width: 640px) 50vw, 100vw" src="<?php echo get_the_post_thumbnail_url(); ?>">
            </a>
            <div class="card-pantheon__text">
            <h3 class="card-pantheon__title">
                <a href="<?php echo get_permalink(); ?>" class="card-pantheon__link" itemprop="url"><?php echo get_the_title(); ?></a></h3>
            <div class="card-pantheon__author" itemprop="author" itemscope itemtype="<?php echo get_permalink(); ?>">
                <a href="#" class="card-pantheon__author-name" itemprop="url">&nbsp;<?php echo get_the_author(); ?>
                </a> </div>
            <p class="card-pantheon__description" itemprop="description"><?php echo get_the_excerpt(); ?></p>
            </div>