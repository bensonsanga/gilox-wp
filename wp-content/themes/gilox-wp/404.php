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


		</section><!-- .error-404 -->
		</article>					
		<?php get_sidebar();?>
	</main><!-- #main -->

<?php
get_footer();
