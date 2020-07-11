<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gilox-wp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="article-sidebar js-sidebar">
 
  <div class="article-related js-article-related">
    <h4 class="article-related__name">Related Articles</h4>
    <ul class="article-related__list">
        <li class="article-related__item">
            <div class="article-related__text">
    <h3 class="article-related__title"><a href="../../gods/freyr/index.html" data-category="Sidebar" data-action="Related Article (Title)">Related article 1</a></h3>
    <a href="#" class="article-related__author">Thomas Apel</a>
    </div>
  <a href="../../gods/freyr/index.html" class="article-related__media" data-category="Sidebar" data-action="Related Article (Image)">      <picture>
        <source media="(min-width: 1280px)"
                data-srcset="https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=144&ar=1:1&fit=crop&auto=format 144w"
        >
        <img alt=""
            class="article-related__image lazyload"
            loading="lazy"
            data-sizes="66.66667vw"
            data-srcset="
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=320&ar=16:10&fit=crop&auto=format 320w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=400&ar=16:10&fit=crop&auto=format 400w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=480&ar=16:10&fit=crop&auto=format 480w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=560&ar=16:10&fit=crop&auto=format 560w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=640&ar=16:10&fit=crop&auto=format 640w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=720&ar=16:10&fit=crop&auto=format 720w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=800&ar=16:10&fit=crop&auto=format 800w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=880&ar=16:10&fit=crop&auto=format 880w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=960&ar=16:10&fit=crop&auto=format 960w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=1040&ar=16:10&fit=crop&auto=format 1040w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=1120&ar=16:10&fit=crop&auto=format 1120w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=1280&ar=16:10&fit=crop&auto=format 1280w"
            data-src="https://media.mythopedia.com/assets/images/norse-mythology/gods/freyr/freyr-norse-god-of-peace.jpg?q=50&w=320&ar=16:10&fit=crop&auto=format 320w"
        >
      </picture>
  </a>
        </li>
        <li class="article-related__item">
            <div class="article-related__text">
    <h3 class="article-related__title"><a href="../../gods/loki/index.html" data-category="Sidebar" data-action="Related Article (Title)">Related article 2</a></h3>
    <a href="#" class="article-related__author">Thomas Apel</a>
  </div>
  <a href="../../gods/loki/index.html" class="article-related__media" data-category="Sidebar" data-action="Related Article (Image)">      <picture>
        <source media="(min-width: 1280px)"
                data-srcset="https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=144&ar=1:1&fit=crop&auto=format 144w"
        >
        <img alt=""
            class="article-related__image lazyload"
            loading="lazy"
            data-sizes="66.66667vw"
            data-srcset="
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=320&ar=16:10&fit=crop&auto=format 320w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=400&ar=16:10&fit=crop&auto=format 400w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=480&ar=16:10&fit=crop&auto=format 480w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=560&ar=16:10&fit=crop&auto=format 560w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=640&ar=16:10&fit=crop&auto=format 640w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=720&ar=16:10&fit=crop&auto=format 720w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=800&ar=16:10&fit=crop&auto=format 800w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=880&ar=16:10&fit=crop&auto=format 880w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=960&ar=16:10&fit=crop&auto=format 960w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=1040&ar=16:10&fit=crop&auto=format 1040w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=1120&ar=16:10&fit=crop&auto=format 1120w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=1280&ar=16:10&fit=crop&auto=format 1280w"
            data-src="https://media.mythopedia.com/assets/images/norse-mythology/gods/loki/loki-norse-trickster-god.jpg?q=50&w=320&ar=16:10&fit=crop&auto=format 320w"
        >
      </picture>
  </a>
        </li>
        <li class="article-related__item">
            <div class="article-related__text">
    <h3 class="article-related__title"><a href="../../gods/thor/index.html" data-category="Sidebar" data-action="Related Article (Title)">Related article 3</a></h3>
    <a href="#" class="article-related__author">Thomas Apel</a>
  </div>
  <a href="../../gods/thor/index.html" class="article-related__media" data-category="Sidebar" data-action="Related Article (Image)">      <picture>
        <source media="(min-width: 1280px)"
                data-srcset="https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=144&ar=1:1&fit=crop&auto=format 144w"
        >
        <img alt=""
            class="article-related__image lazyload"
            loading="lazy"
            data-sizes="66.66667vw"
            data-srcset="
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=320&ar=16:10&fit=crop&auto=format 320w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=400&ar=16:10&fit=crop&auto=format 400w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=480&ar=16:10&fit=crop&auto=format 480w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=560&ar=16:10&fit=crop&auto=format 560w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=640&ar=16:10&fit=crop&auto=format 640w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=720&ar=16:10&fit=crop&auto=format 720w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=800&ar=16:10&fit=crop&auto=format 800w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=880&ar=16:10&fit=crop&auto=format 880w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=960&ar=16:10&fit=crop&auto=format 960w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=1040&ar=16:10&fit=crop&auto=format 1040w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=1120&ar=16:10&fit=crop&auto=format 1120w,
                https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=1280&ar=16:10&fit=crop&auto=format 1280w"
            data-src="https://media.mythopedia.com/assets/images/norse-mythology/gods/thor/thor-norse-god-of-thunder.jpg?q=50&w=320&ar=16:10&fit=crop&auto=format 320w"
        >
      </picture>
  </a>
        </li>
    </ul>
  </div>

  <div class="citation js-citation js-citation-popup">
  <div class="citation-menu">
    <select class="citation-menu__select js-citation-select-style">
      <option value="0">Chicago</option>
      <option value="1">MLA</option>
      <option value="2">APA</option>
    </select>
    <select class="citation-menu__select citation-menu__select--secondary js-citation-select-format">
      <option value="0">Note</option>
      <option value="1">Bibliography</option>
    </select>
    <button class="citation-menu__copy js-citation-copy" data-category="Citation" data-action="Copy (Popup)"></button>
  </div>
  <div class="citation-text">
    <ul class="citation-text__list js-citation-list">
      <li class="citation-text__item js-citation-item is-active" data-style="0" data-format="0">
        <p class="citation-text__content js-citation-content">Thomas Apel, “Freya,” <em>Mythopedia</em>, accessed <span class="js-citation-date"></span>, <a href='../../gods/freya/index.html'>https://mythopedia.com/norse-mythology/gods/freya/</a>.</p>
      </li>
      <li class="citation-text__item js-citation-item" data-style="0" data-format="1">
        <p class="citation-text__content js-citation-content">Apel, Thomas. “Freya.” <em>Mythopedia</em>. Accessed on <span class="js-citation-date"></span>. <a href='../../gods/freya/index.html'>https://mythopedia.com/norse-mythology/gods/freya/</a>.</p>
      </li>
      <li class="citation-text__item js-citation-item" data-style="1" data-format="0">
        <p class="citation-text__content js-citation-content">(Apel)</p>
      </li>
      <li class="citation-text__item js-citation-item" data-style="1" data-format="1">
        <p class="citation-text__content js-citation-content">Apel, Thomas. “Freya.” <em>Mythopedia</em>, <a href='../../gods/freya/index.html'>https://mythopedia.com/norse-mythology/gods/freya/</a>. Accessed <span class="js-citation-date"></span>.</p>
      </li>
      <li class="citation-text__item js-citation-item" data-style="2" data-format="0">
        <p class="citation-text__content js-citation-content">(Apel, n.d.)</p>
      </li>
      <li class="citation-text__item js-citation-item" data-style="2" data-format="1">
        <p class="citation-text__content js-citation-content">Apel, Thomas. (n.d.). Freya. <em>Mythopedia</em>. Retrieved from <a href='../../gods/freya/index.html'>https://mythopedia.com/norse-mythology/gods/freya/</a></p>
      </li>
    </ul>
  </div>
  </div>
</aside>
