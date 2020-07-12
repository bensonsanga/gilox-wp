<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gilox-wp
 */

get_header();
?>

<main id="primary" class="body-content js-body-content">
	<article class="article">
		<section class="article-content">
			<header class="article-header">
				<h1 class="article-header__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gilox-wp' ); ?></h1>
			</header><!-- .page-header -->

			<div class="article-grid">
				<p class="article-hero__description"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gilox-wp' ); ?></p>

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
