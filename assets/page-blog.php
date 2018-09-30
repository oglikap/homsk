<?php
/**
 * Template Name: Blog
 *
 * This is the template for the central blog page.
 *
 * @package WordPress
 * @subpackage Road_Trip
 * @since Road Trip 0.1
 */

get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'blog' );
			// End of the loop.
		endwhile;
		?>

<!--	<?//php get_sidebar( 'content-bottom' ); ?>-->

<?php get_footer(); ?>
