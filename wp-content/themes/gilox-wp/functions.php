<?php
/**
 * gilox-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gilox-wp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gilox_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gilox_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gilox-wp, use a find and replace
		 * to change 'gilox-wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gilox-wp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gilox-wp' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gilox_wp_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gilox_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gilox_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gilox_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'gilox_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gilox_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gilox-wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gilox-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gilox_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gilox_wp_scripts() {
	wp_enqueue_script( 'gilox-wp-app', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'gilox-wp-style', get_stylesheet_uri(), array(), _S_VERSION );
	 
	wp_style_add_data( 'gilox-wp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'gilox-wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gilox_wp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'nav-primary'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul>' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}


function latest_post() {

    $args = array(
        'posts_per_page' => 4, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
			
			<li class="home-stories__item">
				<article class="card-story">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('large', ['class' => 'card-story__media', 'title' => 'Feature image']); ?>
						</a>
					<?php else : ?>
						<img sizes="(min-width: 960px) 20vw, 25vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg" alt="<?php the_title(); ?>" />
          <?php  endif; ?>

          

					<div class="card-story__text">
					<h4 class="card-story__title" itemprop="name">
            <a href="<?php the_permalink(); ?>" class="card-story__link" itemprop="url"><?php echo get_the_title(); ?></a>
          </h4>
          <div class="article-byline">
          <div class="article-byline__icon">
            <img width=24px src="<?php bloginfo('template_directory');?>/images/logo/author-01.svg">
          </div>
          <div class="article-byline__text">
            <span class="article-byline__name"><?php echo get_the_author(); ?></span>
            <span class="article-byline__time">2</span>
          </div>
        </div>
					<!-- <div class="card-story__author" itemprop="author" itemscope itemtype="<?php the_permalink(); ?>">
          <img class="article-byline__icon" src="<?php bloginfo('template_directory');?>/images/logo/author-01.svg">
          <a href="#" class="card-story__author-name" itemprop="url">          
            <span itemprop="name"><?php echo get_the_author(); ?></span><span class="article-byline__time">2</span></a>
					<div class="article-card__subtitle">

					</div> -->
				</article>
				
			</li>
            <?php
        endwhile;
    endif;
}

add_shortcode('lastest-post', 'latest_post');


function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="article-form" action="' . home_url( '/' ) . '" >
    <div><label class="article-form__label" for="s">' . __( 'Search:' ) . '</label>
    <input class="article-form__input" type="text" value="' . get_search_query() . '" name="s" id="s" />
	<button class="article-form__button" id="searchsubmit" type="submit" value="'. esc_attr__( 'Search' ) .'">Send Message →</button>
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

function mytheme_custom_excerpt_length( $length ) {
    return 8;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );



function ah_breadcrumb() {

  // Check if is front/home page, return
  if ( is_front_page() ) {
    return;
  }

  // Define
  global $post;
  $custom_taxonomy  = ''; // If you have custom taxonomy place it here

  $defaults = array(
    'seperator'   =>  '',
    'id'          =>  'ah-breadcrumb',
    'classes'     =>  'article-breadcrumbs__list',
    'home_title'  =>  esc_html__( 'Home', '' )
  );

  $sep  = '<li class="article-breadcrumbs__item">'. esc_html( $defaults['seperator'] ) .'</li>';

  // Start the breadcrumb with a link to your homepage
  echo '<ol id="'. esc_attr( $defaults['id'] ) .'" class="'. esc_attr( $defaults['classes'] ) .'">';

  // Creating home link
  echo '<li class="article-breadcrumbs__item"><a href="'. get_home_url() .'">'. esc_html( $defaults['home_title'] ) .'</a></li>' . $sep;

  if ( is_single() ) {

    // Get posts type
    $post_type = get_post_type();

    // If post type is not post
    if( $post_type != 'post' ) {

      $post_type_object   = get_post_type_object( $post_type );
      $post_type_link     = get_post_type_archive_link( $post_type );

      echo '<li class="article-breadcrumbs__item"><a href="'. $post_type_link .'">'. $post_type_object->labels->name .'</a></li>'. $sep;

    }

    // Get categories
    $category = get_the_category( $post->ID );

    // If category not empty
    if( !empty( $category ) ) {

      // Arrange category parent to child
      $category_values      = array_values( $category );
      $get_last_category    = end( $category_values );
      // $get_last_category    = $category[count($category) - 1];
      $get_parent_category  = rtrim( get_category_parents( $get_last_category->term_id, true, ',' ), ',' );
      $cat_parent           = explode( ',', $get_parent_category );

      // Store category in $display_category
      $display_category = '';
      foreach( $cat_parent as $p ) {
        $display_category .=  '<li class="article-breadcrumbs__item">'. $p .'</li>' . $sep;
      }

    }

    // If it's a custom post type within a custom taxonomy
    $taxonomy_exists = taxonomy_exists( $custom_taxonomy );

    if( empty( $get_last_category ) && !empty( $custom_taxonomy ) && $taxonomy_exists ) {

      $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
      $cat_id         = $taxonomy_terms[0]->term_id;
      $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
      $cat_name       = $taxonomy_terms[0]->name;

    }

    // Check if the post is in a category
    if( !empty( $get_last_category ) ) {

      echo $display_category;
      echo '<li class="article-breadcrumbs__item">'. get_the_title() .'</li>';

    } else if( !empty( $cat_id ) ) {

      echo '<li class="article-breadcrumbs__item"><a href="'. $cat_link .'">'. $cat_name .'</a></li>' . $sep;
      echo '<li class="article-breadcrumbs__item">'. get_the_title() .'</li>';

    } else {

      echo '<li class="article-breadcrumbs__item">'. get_the_title() .'</li>';

    }

  } else if( is_archive() ) {

    if( is_tax() ) {
      // Get posts type
      $post_type = get_post_type();

      // If post type is not post
      if( $post_type != 'post' ) {

        $post_type_object   = get_post_type_object( $post_type );
        $post_type_link     = get_post_type_archive_link( $post_type );

        echo '<li class="article-breadcrumbs__item' . $post_type . '"><a href="' . $post_type_link . '">' . $post_type_object->labels->name . '</a></li>' . $sep;

      }

      $custom_tax_name = get_queried_object()->name;
      echo '<li class="article-breadcrumbs__item">'. $custom_tax_name .'</li>';

    } else if ( is_category() ) {

      $parent = get_queried_object()->category_parent;

      if ( $parent !== 0 ) {

        $parent_category = get_category( $parent );
        $category_link   = get_category_link( $parent );

        echo '<li class="article-breadcrumbs__item"><a href="'. esc_url( $category_link ) .'">'. $parent_category->name .'</a></li>' . $sep;

      }

      echo '<li class="article-breadcrumbs__item">'. single_cat_title( '', false ) .'</li>';

    } else if ( is_tag() ) {

      // Get tag information
      $term_id        = get_query_var('tag_id');
      $taxonomy       = 'post_tag';
      $args           = 'include=' . $term_id;
      $terms          = get_terms( $taxonomy, $args );
      $get_term_name  = $terms[0]->name;

      // Display the tag name
      echo '<li class="article-breadcrumbs__item">'. $get_term_name .'</li>';

    } else if( is_day() ) {

      // Day archive

      // Year link
      echo '<li class="article-breadcrumbs__item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></li>' . $sep;

      // Month link
      echo '<li class="article-breadcrumbs__item"><a href="'. get_month_link( get_the_time('Y'), get_the_time('m') ) .'">'. get_the_time('M') .' Archives</a></li>' . $sep;

      // Day display
      echo '<li class="article-breadcrumbs__item">'. get_the_time('jS') .' '. get_the_time('M'). ' Archives</li>';

    } else if( is_month() ) {

      // Month archive

      // Year link
      echo '<li class="article-breadcrumbs__item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></li>' . $sep;

      // Month Display
      echo '<li class="article-breadcrumbs__item">'. get_the_time('M') .' Archives</li>';

    } else if ( is_year() ) {

      // Year Display
      echo '<li class="article-breadcrumbs__item">'. get_the_time('Y') .' Archives</li>';

    } else if ( is_author() ) {

      // Auhor archive

      // Get the author information
      global $author;
      $userdata = get_userdata( $author );

      // Display author name
      echo '<li class="article-breadcrumbs__item">'. 'Author: '. $userdata->display_name . '</li>';

    } else {

      echo '<li class="article-breadcrumbs__item">'. post_type_archive_title() .'</li>';

    }

  } else if ( is_page() ) {

    // Standard page
    if( $post->post_parent ) {

      // If child page, get parents
      $anc = get_post_ancestors( $post->ID );

      // Get parents in the right order
      $anc = array_reverse( $anc );

      // Parent page loop
      if ( !isset( $parents ) ) $parents = null;
      foreach ( $anc as $ancestor ) {

        $parents .= '<li class="article-breadcrumbs__item"><a href="'. get_permalink( $ancestor ) .'">'. get_the_title( $ancestor ) .'</a></li>' . $sep;

      }

      // Display parent pages
      echo $parents;

      // Current page
      echo '<li class="article-breadcrumbs__item">'. get_the_title() .'</li>';

    } else {

      // Just display current page if not parents
      echo '<li class="article-breadcrumbs__item">'. get_the_title() .'</li>';

    }

  } else if ( is_search() ) {

    // Search results page
    echo '<li class="article-breadcrumbs__item">Search results for: '. get_search_query() .'</li>';

  } else if ( is_404() ) {

    // 404 page
    echo '<li class="article-breadcrumbs__item">' . 'Error 404' . '</li>';

  }

  // End breadcrumb
  echo '</ol>';

}