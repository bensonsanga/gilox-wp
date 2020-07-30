<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


$newValue = get_query_var('my_var_name');
if ( $newValue ) {
?>


    <a href="<?php echo get_permalink(); ?>" class="article-bubble" data-id="<?php echo 0, $newValue; ?>">
        <div class="article-bubble__media">
            <?php if (has_post_thumbnail()) { ?>

                <img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy"
                data-sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" 
                data-srcset="<?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
                                                        
                                                        <?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w" 
                                                        data-src="<?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" 
                                                        src="<?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" 
                                                        sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" 
                                                        srcset="<?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
                                                        <?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
                                                        <?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
                                                        <?php echo the_post_thumbnail_url(); ?>?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w">
            <?php

            } else { ?>
            
                <img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" 
                data-sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" 
                                                        data-srcset="<?php bloginfo('template_directory'); ?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" 
                                                        data-src="<?php bloginfo('template_directory'); ?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" 
                                                        src="<?php bloginfo('template_directory'); ?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" 
                                                        sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" 
                                                        srcset="<?php bloginfo('template_directory'); ?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
                                                        <?php bloginfo('template_directory'); ?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w">
                                                        <?php } ?>
        </div>
    </a> 
            <?php } ?>

