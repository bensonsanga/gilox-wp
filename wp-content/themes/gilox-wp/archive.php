<?php
/**
 * The template for displaying archive pages
 * 
 * 
 * Created by Benson
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

get_header();
?>

<main class="body-content js-body-content">
		
	
		
			<header class="mythology-header">
				<figure class="mythology-header__hero" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
					<img alt="Home of Afro Beats" title="Home of Afro Beats" class="home-header__image" sizes="(min-width: 960px) 50vw, 100vw" src="<?php bloginfo('template_directory');?>/images/cover/2x/<?php  echo get_query_var( 'category_name' )?>.png">
				</figure>
				<div class="mythology-header__text">
					<?php
					// the_archive_title( '<h1 class="mythology-header__title">', '</h1>' );
					the_archive_description( '<h1 class="mythology-header__title">', '</h1>' );
					// the_archive_description( '<div class="mythology-header__description">', '</div>' );
					?>
				</div>
			</header>
			
				<section class="mythology-catalog">
					<div class="catalog-index">
					<ul class="catalog-index__list">
						<li class="catalog-index__item">
						<a href="<?php echo get_permalink();?>" class="catalog-index__link">          <span class="catalog-index__title">Artists</span>
							<span class="catalog-index__count"><?php $count = $GLOBALS['wp_query']->found_posts; echo $count; ?></span>
							<span class="catalog-index__arrow"></span></a>      
						</li>
							<li class="catalog-index__item">
							<a href="" class="catalog-index__link">          <span class="catalog-index__title">Articles</span>
							<span class="catalog-index__count"><?php $count = $GLOBALS['wp_query']->found_posts; echo $count; ?></span>
							<span class="catalog-index__arrow"></span></a>      
						</li>
					</ul>
					</div>
				</section>

				<?php if ( have_posts() ) : $postCount = 1; ?>
				
				<section class="mythology-collection">
					<div class="article-group article-group--grid article-group--ltr">
						<div class="article-grid">
							<?php
							/* Start the Loop Created by Benson Ad*/
							while ( have_posts() ) : 
	
										the_post();
										get_template_part( 'template-parts/content-cat', get_post_type() );
										?>
									
									<?php 

							endwhile; ?>

						</div>
					</div>


  

						<div class="article-group article-group--hero article-group--ltr">
							<div class="article-hero">
								<div class="article-hero__text">
								<h2 class="article-hero__title">
								<a href="<?php echo get_permalink();?>"><?php echo the_archive_description(); ?> Artists</a>    
								</h2>
								<a href="<?php echo get_permalink();?>" <?php echo "Discover the biggest Artist in"; echo the_archive_description(); ?></a>
								<a href="<?php echo get_permalink();?>" class="article-hero__button">        <span class="article-hero__button-title">Explore</span>
									<span class="article-hero__button-arrow"></span>
									</a>    </div>
							<div class="article-hero__bubbles">
								<?php
								$args = array(
								'posts_per_page' => 13, 
								'tag' => 'artist'
								);
								$q = new WP_Query( $args);
								$count = 0;

								if ( $q->have_posts() ) {
								while ( $q->have_posts() ) {
								$q->the_post();        
								$count++;
									get_template_part( 'template-parts/content-bubble' );
								}
								wp_reset_postdata();
								} 
								?> 
						
							</div>
							</a>
								</div>
							</div>
						</div>


							
							

							<?php
							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
				


				


			</section>
	</main><!-- #main -->

<?php
get_footer();