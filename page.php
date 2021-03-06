<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
			get_template_part( 'template-parts/content', 'page' );
			// End of the loop.
		endwhile;
		?>

<!--	<?//php get_sidebar( 'content-bottom' ); ?>-->

<?php get_footer(); ?>
