<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */


?>



                    <article class="card-mythology" data-mythology="greek" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                          <a href="<?php echo get_permalink();?>" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                            <h6 class="card-mythology__kicker"><?php  echo get_query_var( "category_name" ); ?></h6>
                              <?php 
                                    get_the_category( '<h6 class="card-mythology__kicker">', '</h6>' ); 
                                ?>
                            </div>
                                  
                            <?php 
                                the_title( '<h3 class="card-mythology__title">', '</h3>' ); 
                            ?>

                            <?php
                                echo '<p class="card-mythology__description">' . get_the_excerpt() . '</p>';
                            ?>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/cover/2x/<?php  echo get_query_var( 'category_name' )?>.png""
                                alt="Greek Mythology" border="0"
                                class="card-mythology__image"
                                title="Afro beats"
                                itemprop="url">    </div>
                          </a>
                      </article>

