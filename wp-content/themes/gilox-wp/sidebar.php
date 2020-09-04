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
    <h4 class="article-related__name">Stories you may also like</h4>

    <ul lass="article-related__list">
              <?php
                $args = array(
                  'posts_per_page' => 3, 
                  'tag' => 'related'
                );
                $q = new WP_Query( $args);

                if ( $q->have_posts() ) {
                  while ( $q->have_posts() ) {
                  $q->the_post();        
                    get_template_part( 'template-parts/content-side' );
                  }
                  wp_reset_postdata();
                } 
                ?>
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
  </div>
</aside>
