<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>

<!-- 
<li class="home-domains__item">
            <article class="card-deity card-deity--small">
<a href="greek-mythology/discoveries/d4.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
      <div class="card-deity__media">
          <img data-src="media.mythopedia.com/assets/images/chinese-mythology/gods/chang-e/chang-e-chinese-goddess-of-the-moon--avatar8bef8bef.jpg?q=75&amp;w=80&amp;auto=format" alt="Chang’e, Chinese Goddess of the Moon" title="Chang’e, Chinese Goddess of the Moon" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="media.mythopedia.com/assets/images/chinese-mythology/gods/chang-e/chang-e-chinese-goddess-of-the-moon--avatar8bef8bef.jpg?q=75&amp;w=80&amp;auto=format">
      </div>
    </div>
    <div class="card-deity__text">
      <h4 class="card-deity__title" itemprop="name">Aduke Silencer</h4>
      <p class="card-deity__subtitle" itemprop="description">Best Director 2017 (AMVCA)</p>
    </div>
</a></article>
          </li> -->


<li class="home-domains__item">
    <article class="card-deity card-deity--small" itemscope itemtype="<?php echo get_home_url(); ?>" id="" <?php post_class(); ?>>

        <a href="<?php echo get_permalink() ?>" class="card-deity__link" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">

            <div class="card-deity__icon" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                <div class="card-deity__media">

                    <?php if (has_post_thumbnail()) { ?>

                        <img data-src="<?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=80&amp;auto=format" alt="Jupiter, Roman King of the Gods" title="Great Artists" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="http://localhost/Gilox/wp-content/themes/gilox-wp/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format">

                    <?php

                    } else { ?>
                        <img data-src="<?php bloginfo('template_directory'); ?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format" alt="Jupiter, Roman King of the Gods" title="Great Artists" class="card-deity__image lazyload" itemprop="url" loading="lazy" src="http://localhost/Gilox/wp-content/themes/gilox-wp/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format">

                    <?php } ?>
                </div>
            </div>
            <div class="card-deity__text">
                <?php
                the_title('<h4 class="card-deity__title">', '</h4>'); ?>
                <p class="card-deity__subtitle" itemprop="description">By <?php the_author(); ?></p>
            </div>
        </a>

    </article>
</li>