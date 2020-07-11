<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gilox-wp
 */

get_header();
?>

<main class="body-content js-body-content">

		<?php if ( have_posts() ) : ?>

			<figure class="mythology-header__hero" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        
				<img alt="Home of Afro Beats"
				title="Home of Afro Beats"
				class="home-header__image"
				sizes="(min-width: 960px) 50vw, 100vw"
				src=    ../media.mythopedia.com/assets/images/bongoflava.png>
            </figure>
			<header class="mythology-header">
				<?php
				the_archive_title( '<h1 class="mythology-header__title">', '</h1>' );
				the_archive_description( '<div class="mythology-header__description">', '</div>' );
				?>
			</header><!-- .page-header -->

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
			
			<section class="mythology-collection">
				<div class="article-group article-group--grid article-group--ltr">
					
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content-card', get_post_type() );

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
get_sidebar();
get_footer();
