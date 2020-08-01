<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gilox-wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="turbolinks-cache-control" content="no-preview">
      <title><?php echo wp_title(); ?></title>
    <meta name="title" content="Home of Afro Beats">
    <meta name="description" content="Gilox network is the ultimate online resource for exploring music of any kind from secular to gospel and more.">
    <meta property="og:site_name" content="Gilox">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="Home of Afro Beats">
    <meta property="og:description" content="Gilox network is the ultimate online resource for exploring music of any kind from secular to gospel and more.">
    <meta property="og:image" content="<?php bloginfo('template_directory');?>/images/cover/afrobeat.png">
    <meta name="twitter:domain" content="mythopedia.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="index.html">
    <meta name="twitter:title" content="Home of Afro Beats">
    <meta name="twitter:description" content="Gilox network is the ultimate online resource for exploring music of any kind from secular to gospel and more.">
  

    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/images/logo/title.png" />
    <meta name="google-site-verification" content="e9OXvF_GPLEYW6YS5_5wpR_1Uhb7aS7pBRdMcEfWNLs" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/logo/Favicon.svg" />

    <script>
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.init = false;
	  var view = $("#tslshow");
		var move = "100px";
		var sliderLimit = -750;

		$("#rightArrow").click(function(){

			var currentPosition = parseInt(view.css("left"));
			if (currentPosition >= sliderLimit) view.stop(false,true).animate({left:"-="+move},{ duration: 400})

		});

		$("#leftArrow").click(function(){

			var currentPosition = parseInt(view.css("left"));
			if (currentPosition < 0) view.stop(false,true).animate({left:"+="+move},{ duration: 400});

		});
    </script>

	<?php wp_head(); ?>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-172947534-2');
	</script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gilox-wp' ); ?></a>
	<header class="body-header js-body-header"> 
      <nav class="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<a class="" href="<?php echo get_home_url(); ?>" data-category="Navigation" data-action="Header Logo"> 
			<!-- <svg width="32" height="32" class="menu-logo__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 298 297"><defs><style>.cls-1{fill:none;}.cls-2{isolation:isolate;}.cls-3{clip-path:url(#clip-path);}.cls-4{opacity:0.25;mix-blend-mode:multiply;}.cls-5{fill:#fffaf0;}.cls-6{font-size:203.88px;font-family:Philosopher-Bold, Philosopher;font-weight:700;}</style><clipPath id="clip-path" transform="translate(16 15)"><circle class="cls-1" cx="133.5" cy="133.5" r="133.5"/></clipPath></defs><title>Favicon</title><g class="cls-2"><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><g class="cls-3"><image class="cls-4" width="298" height="297" xlink:href="data:image/png;base64,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"/><rect class="cls-5" x="15.74" y="15.21" width="266.49" height="266.49"/><text class="cls-6" transform="translate(74.16 219.64)">G</text></g></g></g></g></svg>		</a> -->
			<svg width="40" height="40" class="menu-logo__icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 298 297" style="enable-background:new 0 0 298 297;" xml:space="preserve">
				<style type="text/css">
					.st0{clip-path:url(#SVGID_2_);}
					.st1{fill:#FFFAF0;}
					.st2{enable-background:new    ;}
				</style>
				<title>Favicon</title>
				<g>
					<g id="Layer_2_1_">
						<g id="Layer_2-2">
							<g>
								<defs>
									<circle id="SVGID_1_" cx="149.5" cy="148.5" r="133.5"/>
								</defs>
								<clipPath id="SVGID_2_">
									<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
								</clipPath>
								<g class="st0">
									
										<image style="overflow:visible;opacity:0.25;enable-background:new    ;" width="298" height="297" xlink:href="A713B3AB.png" >
									</image>
									<rect x="15.7" y="15.2" class="st1" width="266.5" height="266.5"/>
									<g class="st2">
										<path d="M208.7,210.1c-7.9,4.8-16.2,8.2-25.1,10.4c-8.8,2.2-18.5,3.3-29,3.3c-10.6,0-20.4-1.9-29.4-5.7s-16.7-9-23.2-15.6
											c-6.5-6.6-11.6-14.3-15.3-23.2c-3.7-8.9-5.5-18.5-5.5-28.8c0-9.8,1.6-18.9,4.8-27.3c3.2-8.4,7.7-15.8,13.7-22
											c5.9-6.3,13-11.1,21.2-14.7c8.2-3.5,17.4-5.3,27.6-5.3c12.8,0,23.2,1.7,31.4,5c8.2,3.3,14.1,7.2,17.9,11.5
											c1.4,1.8,2.4,3.8,3.1,6.1c0.7,2.3,1.2,4.7,1.5,7.2c0.3,2.5,0.5,5.1,0.6,7.6c0.1,2.6,0.1,5,0.1,7.3h-6.1
											c-2.6-12.5-7.3-21.6-14.3-27.2c-6.9-5.6-16.3-8.5-28.1-8.5c-8.2,0-15.1,1.7-20.7,5c-5.6,3.3-10.3,7.8-13.9,13.4
											c-3.6,5.6-6.2,12-7.8,19.3c-1.6,7.3-2.4,14.8-2.4,22.5c0,12.4,1.2,22.7,3.5,31.1c2.3,8.4,5.5,15.1,9.6,20.1
											c4.1,5,8.8,8.6,14.3,10.8c5.4,2.2,11.3,3.3,17.5,3.3c6.1,0,11.3-0.5,15.7-1.4c4.3-0.9,8.3-2.2,11.8-3.9V174
											c0-2.9,0.4-5.7,1.3-8.7c0.9-2.9,2.7-5.6,5.5-8c2.8-2.4,6.8-4.3,11.9-5.9c5.2-1.6,12.1-2.3,20.8-2.3v5.1c-4.6,0-8,1.7-10,5.1
											c-2,3.4-3.1,8.2-3.1,14.3V210.1z"/>
									</g> 
								</g>
							</g>
						</g>
					</g>
				</g>
				</svg>
			<a href="<?php echo get_home_url(); ?>" class="menu-link" data-category="Navigation" data-action="Header Link" itemprop="url">&nbsp;Gilox</a>  
		<div class="menu-search">
			<input class="menu-search__input" placeholder="Search music categories, and more...">
		</div>
		<div class="menu-mythologies">
			<div class="menu-mythologies__text js-menu-toggle">
			<span class="menu-mythologies__title">Categories</span>
			<span class="menu-mythologies__caret"></span>
			</div>
			<div class="menu-mythologies__lists">

			<ul class="menu-mythologies__cards">
				<li class="menu-mythologies__card">
					<a href="<?php echo home_url(); ?>/index.php?cat=192" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
									<h6 class="menu-card__kicker">Category</h6>
									<h4 class="menu-card__title">Afrobeat</h4>
								</div>
								<figure class="menu-card__media">
									<img src="<?php bloginfo('template_directory');?>/images/categories/afrobeat.png">
										alt="Afrobeat"
										title="Afrobeat"
										class="menu-card__image lazyload"
										loading="lazy"
								</figure>
					</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=193" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Afrobeats</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/afrobeats.png">                    alt="Afro beats"
							title="Afrobeats"
							class="menu-card__image lazyload"
							loading="lazy"
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=197" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Highlife</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/highlife.png">                    alt="Highlife"
							title="Highlife"
							class="menu-card__image lazyload"
							loading="lazy"
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=198" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Juju music</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/juju.png">
							alt="Juju music"
							title="Juju music"
							class="menu-card__image lazyload"
							loading="lazy"
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=195" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Afro Gospel</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/afrogospel.png">
							alt="Afro gospel"
							title="Afro Gospel"
							class="menu-card__image lazyload"
							loading="lazy"
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=194" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Afrofusion</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/afrofusion.png">
							alt="Afro fusion"
							title="Afro fusion"
							class="menu-card__image lazyload"
							loading="lazy">
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=196" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Bongo Flava</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/bongoflava.png">
							alt="Bongo Flava"
							title="Bongo Flava"
							class="menu-card__image lazyload"
							loading="lazy">
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="<?php echo home_url(); ?>/index.php?cat=199" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Nollywood</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/nollywood.png">
							alt="Nollywood"
							title="Nollywood"
							class="menu-card__image lazyload"
							loading="lazy"
					</figure>
		</a>          </li>
				
			</ul>
			</div>
		</div>
		<div class="menu-static">
			<ul class="menu-static__list">
				<li class="menu-static__item">
		<a href="<?php echo get_page_link( get_page_by_title( About )->ID ); ?>" class="menu-static__link" data-category="Navigation" data-action="Header Link" itemprop="url">            <span itemprop="name">About </span>
		</a>        </li>
				<li class="menu-static__item">
		<a href="<?php echo get_page_link( get_page_by_title( Contact )->ID ); ?>" class="menu-static__link" data-category="Navigation" data-action="Header Link" itemprop="url">            <span itemprop="name">Contact</span>
		</a>        </li>
			</ul>
		</div>
		<button class="menu-button js-menu-button" aria-label="Open menu" data-category="Navigation" data-action="Hamburger">
			<span class="menu-button__line"></span>
		</button>
		</nav>

		<?php
		if ( is_front_page() ) :
			echo " ";
		else : ?>
			<nav class="menu-mythology" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<ul class="menu-mythology__list">
					<li class="menu-mythology__item">
				<a href="index.html" class="menu-mythology__link is-active" data-category="Navigation" data-action="Header Collection" itemprop="url">        <span itemprop="name">Afrobeats</span>
				</a>    </li>
					<li class="menu-mythology__item has-children">
						<div class="menu-mythology__link js-menu-toggle">
							<span class="menu-mythology__title">
							<span class="menu-mythology__region">Afrobeats</span>
							<span class="menu-mythology__type">Artists</span>
							</span>
							<span class="menu-mythology__caret"></span>
						</div>
						<div class="menu-collection">
							<div class="menu-collection__header">
							<h4 class="menu-collection__name">Artists Collection</h4>
							<article class="menu-collection__card">
				<a href="#" class="menu-collection__card-link" data-category="Navigation" data-action="Header Collection (Card)">    <figure class="menu-collection__card-media">
						</figure>
				</a>  <div class="menu-collection__card-text">
					<h4 class="menu-collection__card-title" itemprop="name">
					
					</h4>
					
				</div>
				</article>
							</div>
							<div class="menu-collection__groups">
								<div class="menu-collection__group" data-index="0">
					<h4 class="menu-collection__name">Popular Artists</h4>
					
					<ul class="menu-collection__list">
					<?php
						$args = array(
							'posts_per_page' => 14, 
							'tag' => 'artist'
						);
						$q = new WP_Query( $args);

						if ( $q->have_posts() ) {
							while ( $q->have_posts() ) {
							$q->the_post();        
								get_template_part( 'template-parts/content-event' );
							}
							wp_reset_postdata();
						} 
						?>
					</ul>
				</div>
				<div class="menu-collection__group" data-index="1">
					<h4 class="menu-collection__name">Other Artists</h4>
					<ul class="menu-collection__list">
						<li class="menu-collection__item">
				<a href="index.html" class="menu-collection__link" data-category="Navigation" data-action="Header Collection (List Item)">              <span itemprop="name">TuFace</span>
				</a>          </li>
						<li class="menu-collection__item">
				<a href="../crius/index.html" class="menu-collection__link" data-category="Navigation" data-action="Header Collection (List Item)">              <span itemprop="name">9ice</span>
				</a>          </li>
					</ul>
				</div>
							</div>
						</div>
					</li>
								<div class="menu-collection">
							<div class="menu-collection__header">
							<h4 class="menu-collection__name">Collection</h4>
							<article class="menu-collection__card">
								
						<a href="#" class="menu-collection__card-link" data-category="Navigation" data-action="Header Collection (Card)">    <figure class="menu-collection__card-media">
						</figure>
						
				</a>  <div class="menu-collection__card-text">
					<h4 class="menu-collection__card-title" itemprop="name">
					
					</h4>
					
				</div>
				</article>
							</div>
							<div class="menu-collection__groups">
								<div class="menu-collection__group" data-index="0">
					<h4 class="menu-collection__name">Canonical Texts</h4>
					<ul class="menu-collection__list">
						<li class="menu-collection__item">
				<a href="texts/iliad/index.html" class="menu-collection__link" data-category="Navigation" data-action="Header Collection (List Item)">              <span itemprop="name">Iliad</span>
				</a>          </li>
						<li class="menu-collection__item">
				<a href="texts/odyssey/index.html" class="menu-collection__link" data-category="Navigation" data-action="Header Collection (List Item)">              <span itemprop="name">Odyssey</span>
				</a>          </li>
					</ul>
				</div>

							</div>
						</div>
						</li>
						<li class="menu-mythology__item has-children">
						<div class="menu-mythology__link js-menu-toggle">
							<span class="menu-mythology__title">
							<span class="menu-mythology__region">Afrobeats Artist</span>
							<span class="menu-mythology__type">Events</span>
							</span>
							<span class="menu-mythology__caret"></span>
						</div>
						<div class="menu-collection">
							<div class="menu-collection__header">
							<h4 class="menu-collection__name">Events Collection</h4>
							<article class="menu-collection__card">
				<a href="#" class="menu-collection__card-link" data-category="Navigation" data-action="Header Collection (Card)">   <figure class="menu-collection__card-media">
						</figure>  
				</a>  <div class="menu-collection__card-text">
					<h4 class="menu-collection__card-title" itemprop="name">
					
					</h4>
					
				</div>
				
				</article>
							</div>
							<div class="menu-collection__groups">
								<div class="menu-collection__group" data-index="0">
					<h4 class="menu-collection__name">Popular Events</h4>


					<ul class="menu-collection__list">
					<?php
						$args = array(
							'posts_per_page' => 14, 
							'category_name' => 'events'
						);
						$q = new WP_Query( $args);

						if ( $q->have_posts() ) {
							while ( $q->have_posts() ) {
							$q->the_post();        
								get_template_part( 'template-parts/content-event' );
							}
							wp_reset_postdata();
						} 
						?>
					</ul>
					
				</div>

							</div>
						</div>
						</li>
				</ul>
				<button class="menu-mythology__button"></button>
			</nav>
		<?php
		endif;
		?>


		<?php 
		if ( is_page( "701" )) :
		
		else : ?>

		<?php endif; ?>
			
		



			<nav class="menu-main" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<ul class="menu-main__list">
				<li class="menu-main__item">
			<a href="<?php echo get_home_url(); ?>" class="menu-main__link" data-category="Navigation" data-action="Header General (Main Menu)" itemprop="url">        <span itemprop="name">Home</span>
			</a>    </li>
				<li class="menu-main__item">
			<a href="<?php echo get_page_link( get_page_by_title( About )->ID ); ?>" class="menu-main__link" data-category="Navigation" data-action="Header General (Main Menu)" itemprop="url">        <span itemprop="name">About </span>
			</a>    </li>
				<li class="menu-main__item">
			<a href="<?php echo get_page_link( get_page_by_title( About )->ID ); ?>" class="menu-main__link" data-category="Navigation" data-action="Header General (Main Menu)" itemprop="url">        <span itemprop="name">Authors</span>
			</a>    </li>
				<li class="menu-main__item">
			<a href="<?php echo get_page_link( get_page_by_title( Contact )->ID ); ?>" class="menu-main__link" data-category="Navigation" data-action="Header General (Main Menu)" itemprop="url">        <span itemprop="name">Contact</span>
			</a>    </li>
		</ul>
		<ul class="menu-main__mythologies">
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=193" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Afrobeats</h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/greek-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Greek Mythology"
						title="Greek Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=197" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Highlife </h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/roman-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Roman Mythology"
						title="Roman Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=198" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Juju Music </h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/norse-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Norse Mythology"
						title="Norse Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=195" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Afro Gospel </h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/celtic-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Celtic Mythology"
						title="Celtic Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=194" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Afrofusion</h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/egyptian-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Egyptian Mythology"
						title="Egyptian Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=196" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Bongo Flava </h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/chinese-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Chinese Mythology"
						title="Chinese Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=199" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Nollywood</h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/japanese-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Japanese Mythology"
						title="Japanese Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
			<li class="menu-main__mythology">
		<a href="<?php echo home_url(); ?>/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
					<h6 class="menu-main__kicker">Category</h6>
					<h4 class="menu-main__title">Afro Beat</h4>
				</div>
				<!-- <figure class="menu-main__media">
					<img src="https://media.mythopedia.com/assets/images/aztec-mythology.jpg?q=75&fit=crop&w=360&h=320&auto=format"
						alt="Aztec Mythology"
						title="Aztec Mythology"
						class="menu-main__image">
				</figure> -->
		</a>      </li>
		</ul>
		</nav>


	</header>

       
