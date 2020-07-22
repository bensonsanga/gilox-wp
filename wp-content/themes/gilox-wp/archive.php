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
						<a href="#" class="catalog-index__link">          <span class="catalog-index__title">Artists</span>
							<span class="catalog-index__count">14</span>
							<span class="catalog-index__arrow"></span></a>      
						</li>
							<li class="catalog-index__item">
							<a href="" class="catalog-index__link">          <span class="catalog-index__title">Articles</span>
							<span class="catalog-index__count">2</span>
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
									
										<?php
	
										the_post();
										get_template_part( 'template-parts/content-cat', get_post_type() );
										?>
									
									<?php }

							endwhile; ?>


  

						<div class="article-group article-group--hero article-group--ltr">
							<div class="article-hero">
								<div class="article-hero__text">
								<h2 class="article-hero__title">
									<a href="#"><?php echo the_archive_description(); ?> Artists</a>    
								</h2>
								<p class="article-hero__description">Explore the <?php echo the_archive_description(); ?> artists like Davido, Adekunle Gold and many others...</p>
									<a href="#" class="article-hero__button">        <span class="article-hero__button-title">Explore</span>
									<span class="article-hero__button-arrow"></span>
									</a>    </div>
								<div class="article-hero__bubbles">
										<a href="#" class="article-bubble" data-id="01">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="02">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="03">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w" sizes="(min-width: 1600px) 216px, (min-width: 1280px) 192px, (min-width: 960px) 144px, (min-width: 640px) 192px, 96px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=288&amp;ar=1:1&amp;fit=crop&amp;auto=format 288w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=384&amp;ar=1:1&amp;fit=crop&amp;auto=format 384w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=432&amp;ar=1:1&amp;fit=crop&amp;auto=format 432w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="04">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="05">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="06">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="07">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w">
							</div>
							</a>
									<a href="#o" class="article-bubble" data-id="08">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w" sizes="(min-width: 1600px) 108px, (min-width: 1280px) 96px, (min-width: 960px) 72px, (min-width: 640px) 96px, 48px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=144&amp;ar=1:1&amp;fit=crop&amp;auto=format 144w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=192&amp;ar=1:1&amp;fit=crop&amp;auto=format 192w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=216&amp;ar=1:1&amp;fit=crop&amp;auto=format 216w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="09">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="10">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="11">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="12">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w">
							</div>
							</a>
									<a href="#" class="article-bubble" data-id="13">  <div class="article-bubble__media">
									<img alt="Artist" title="Artist" class="article-bubble__image lazyload" loading="lazy" data-sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" data-srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w" data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w" sizes="(min-width: 1600px) 54px, (min-width: 1280px) 48px, (min-width: 960px) 72px, (min-width: 640px) 48px, 24px" srcset="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=48&amp;ar=1:1&amp;fit=crop&amp;auto=format 48w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=72&amp;ar=1:1&amp;fit=crop&amp;auto=format 72w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=96&amp;ar=1:1&amp;fit=crop&amp;auto=format 96w,
												<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=108&amp;ar=1:1&amp;fit=crop&amp;auto=format 108w">
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