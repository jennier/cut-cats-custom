<?php
/**
 * Template Name: Parallax Page
 *
 * Template for displaying pages with parallax scrolling.
 *
 */


get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

	<div class="container-fluid-fluid" id="content" tabindex="-1">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'parallax' ); ?>

				<?php endwhile; // end of the loop. ?>
                
</div><!-- Container end -->

<?php get_footer(); ?>

