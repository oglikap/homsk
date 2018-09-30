<?php
/**
 * The template for displaying pages
 *
 * This is the template for displaying the archive of productions.
 *
 * @package WordPress
 * @subpackage Road_Trip
 * @since Road Trip 0.1
 */

get_header(); ?>

  <section class="wrapper post" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/rooftopmemories-bg.jpg)";>
    <div class="inner">
      <article class="box">
        <header>
          <?php include( get_template_directory() . '/includes/logo.php' ); ?>
          <h2>Producties</h2>
        </header>
        <div class="content">
          <ul>
            <?php
        		// Start the loop.
        		while ( have_posts() ) : the_post();

        			// Include the page content template.
        			get_template_part( 'template-parts/content', 'archive_productions' );
        			// End of the loop.
        		endwhile;
        		?>
          </ul>
        </div>

      </article>
    </div>
  </section>

<?php get_footer(); ?>
