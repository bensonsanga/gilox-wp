<?php
/**
 * The template for displaying 404 pages (not found)
 *	Created by Benson Ad
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gilox-wp
 */

get_header();
?>

<main id="primary" class="body-content js-body-content">


<header class="home-header">
    <div class="home-header__text">
      <h1 class="home-header__title" itemprop="name"><span>Afrobeats to the world</span></h1>
      <div class="home-header__block">

        <div class="home-header__description">
          <p class="home-header__description-text">404</p>
          <a href="#mythologies" class="home-header__description-link">Explore<span class="home-header__description-arrow"></span></a>
        </div>
      </div>
    </div>
    <figure class="home-header__hero">
      <img alt="Home of Afro Beats" title="Home of Afro Beats" class="home-header__image" sizes="(min-width: 960px) 50vw, 100vw" src="<?php bloginfo('template_directory'); ?>/images/cover/afrobeat.png">
    </figure>
  </header>


	<article class="article">
		<section class="article-content">
		<div class="article-breadcrumbs">
		<ol class="article-breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
			<?php
			ah_breadcrumb(); 
			?>
		</ol>
		</div>
			<header class="article-header">
				<h1 class="article-header__title"><?php esc_html_e( 'This page is missing', 'gilox-wp' ); ?></h1>
			</header><!-- .page-header -->

			<div class="article-grid">
				<!-- <p class="article-hero__description"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gilox-wp' ); ?></p> -->

					<?php
					get_search_form();
					?> 
				
					<div class="article-header__text">
					<?
					the_widget( 'WP_Widget_Recent_Posts' );
					?>
					</div>

					<div class="article-header__text">
						<h2 class="widget-title"><?php esc_html_e( 'Our Categories', 'gilox-wp' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 5,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->
					<div class="article-header__text">
					<?php
					the_widget( 'WP_Widget_Tag_Cloud' );
					?>
					</div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
		</article>					
		<?php get_sidebar();?>
	</main><!-- #main -->

<?php
get_footer();
