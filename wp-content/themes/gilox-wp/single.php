<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gilox-wp
 */

get_header();
?>

	<main id="primary" class="body-content js-body-content">
		<article class="article">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-1', get_post_type() );

			endwhile; // End of the loop.
			?>
		</article>

	<?php
	get_sidebar(); 
	?>

	</main><!-- #main -->

<?php

get_footer();




