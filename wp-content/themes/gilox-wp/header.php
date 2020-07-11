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
      <title>Welcome to Gilox</title>
    <meta name="title" content="Home of Afro Beats">
    <meta name="description" content="Gilox network is the ultimate online resource for exploring music of any kind from secular to gospel and more.">
    <meta property="og:site_name" content="Mythopedia">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="Home of Afro Beats">
    <meta property="og:description" content="Gilox network is the ultimate online resource for exploring music of any kind from secular to gospel and more.">
    <meta property="og:image" content="<?php bloginfo('template_directory');?>/images/logo/title.png">
    <meta name="twitter:domain" content="mythopedia.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="index.html">
    <meta name="twitter:title" content="Home of Afro Beats">
    <meta name="twitter:description" content="Gilox network is the ultimate online resource for exploring music of any kind from secular to gospel and more.">
    <meta name="twitter:image" content="assets/images/mythopedia--social.jpg">

    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/images/logo/title.png" />
    <meta name="google-site-verification" content="e9OXvF_GPLEYW6YS5_5wpR_1Uhb7aS7pBRdMcEfWNLs" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/logo/favicon.png" />

    <script>
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.init = false;
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gilox-wp' ); ?></a>
	<script>
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.init = false;
    </script>
	<header class="body-header js-body-header">
      <nav class="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<a href="<?php echo get_home_url(); ?>" data-category="Navigation" data-action="Header Logo"> <img src="<?php bloginfo('template_directory');?>/images/logo/Favicon.png"> </a><a href="<?php echo get_home_url(); ?>" class="menu-link" data-category="Navigation" data-action="Header Link" itemprop="url">&nbsp;Gilox</a>  
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
					<a href="/Gilox/index.php?cat=192" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=193" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=197" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=198" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=195" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
						<h6 class="menu-card__kicker">Category</h6>
						<h4 class="menu-card__title">Afro Gospel</h4>
					</div>
					<figure class="menu-card__media">
						<img src="<?php bloginfo('template_directory');?>/images/categories/Afrogospel.png">
							alt="Afro gospel"
							title="Afro Gospel"
							class="menu-card__image lazyload"
							loading="lazy"
					</figure>
		</a>          </li>
				<li class="menu-mythologies__card">
		<a href="/Gilox/index.php?cat=194" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=196" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=199" class="menu-card" data-category="Navigation" data-action="Header Mythologies (Card Menu)" itemprop="url">              <div class="menu-card__text" itemprop="name">
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
		<a href="<?php echo get_page_link( get_page_by_title( About )->ID ); ?>" class="menu-static__link" data-category="Navigation" data-action="Header Link" itemprop="url">            <span itemprop="name">Contact</span>
		</a>        </li>
			</ul>
		</div>
		<button class="menu-button js-menu-button" aria-label="Open menu" data-category="Navigation" data-action="Hamburger">
			<span class="menu-button__line"></span>
		</button>
		</nav>
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
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../atlas/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Olamide</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../prometheus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Reekado</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../uranus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Davido</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../gaia/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Tiwa Savage</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../cronus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Skale</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../rhea/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Asa</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../oceanus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Amadi</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../thea/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Wizkid</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../hyperion/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Sheeba</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../phoebe/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Naira Marley</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../iapetus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Wizkid</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../tethys/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Simi</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../themis/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Adekunle</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../mnemosyne/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Falz</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Artist</p>
			</div>
		</a></article>
				</li>
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
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
					<a href="../../events/atlas/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
						<div class="card-deity__media">
						</div>
						</div>
						<div class="card-deity__text">
						<h4 class="card-deity__title" itemprop="name">Event 1</h4>
						<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
						</div>
					</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/prometheus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 2</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/uranus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 3</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/gaia/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 4</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/cronus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 5</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/rhea/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 6</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/oceanus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 7</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/thea/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 8</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/hyperion/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 9</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/phoebe/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 10</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/iapetus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 11</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/tethys/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 12</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/themis/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 13</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
				<li class="menu-collection__item">
					<article class="card-deity card-deity--small">
		<a href="../../events/mnemosyne/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<div class="card-deity__media">
			</div>
			</div>
			<div class="card-deity__text">
			<h4 class="card-deity__title" itemprop="name">Event 14</h4>
			<p class="card-deity__subtitle" itemprop="description">Afrobeats Event</p>
			</div>
		</a></article>
				</li>
			</ul>
		</div>
		<div class="menu-collection__group" data-index="1">
			<h4 class="menu-collection__name">Other Events</h4>
			<ul class="menu-collection__list">
				<li class="menu-collection__item">
		<a href="../../events/coeus/index.html" class="menu-collection__link" data-category="Navigation" data-action="Header Collection (List Item)">              <span itemprop="name">Other Events 1</span>
		</a>          </li>
				<li class="menu-collection__item">
		<a href="../../events/crius/index.html" class="menu-collection__link" data-category="Navigation" data-action="Header Collection (List Item)">              <span itemprop="name">Other Events 2</span>
		</a>          </li>
			</ul>
		</div>

					</div>
				</div>
				</li>
		</ul>
		<button class="menu-mythology__button"></button>
		</nav>

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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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
		<a href="/Gilox/index.php?cat=192" class="menu-main__card" data-category="Navigation" data-action="Header Mythology (Main Menu)" itemprop="url">          <div class="menu-main__text" itemprop="name">
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

       
