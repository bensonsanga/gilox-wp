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
					the_archive_title( '<h1 class="mythology-header__title">', '</h1>' );
					the_archive_description( '<div class="mythology-header__description">', '</div>' );
					?>
				</div>
			</header>
			
				<section class="mythology-catalog">
					<div class="catalog-index">
					<ul class="catalog-index__list">
						<li class="catalog-index__item">
						<a href="gods/index.html" class="catalog-index__link">          <span class="catalog-index__title">Artists</span>
							<span class="catalog-index__count">14</span>
							<span class="catalog-index__arrow"></span></a>      
						</li>
							<li class="catalog-index__item">
							<a href="texts/index.html" class="catalog-index__link">          <span class="catalog-index__title">Articles</span>
							<span class="catalog-index__count">2</span>
							<span class="catalog-index__arrow"></span></a>      
						</li>
					</ul>
					</div>
				</section>

				<?php if ( have_posts() ) : $postCount = 1; ?>
				
				<section class="mythology-collection">
					<div class="article-group article-group--grid article-group--ltr">
						
							<?php
							/* Start the Loop Created by Benson Ad*/
							while ( have_posts() ) : 
								$postCount++;

								if($postCount == 2) { ?>
								<div class="article-grid">
								<?php

									the_post();
									get_template_part( 'template-parts/content-cat1', get_post_type() );
									?>
									</div>
								<?php }

								else { ?>
									<div class="article-grid">
										<?php
	
										the_post();
										get_template_part( 'template-parts/content-cat', get_post_type() );
										?>
									</div>
									<?php }

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					
				</div>
			</section>
	</main><!-- #main -->

<?php
get_footer();