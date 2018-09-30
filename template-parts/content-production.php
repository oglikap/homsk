<section id="post" class="wrapper" style="background-image:url(<?php if( get_field('foto') ): ?><?php the_field('foto'); ?><?php endif; ?> );">
      <div class="inner">
        <article class="box">
          <?php include( get_template_directory() . '/includes/logo.php' ); ?>
          <header>
            <h2><?php the_title(); ?></h2>
          </header>
          <div class="content">
            <?php the_content(); ?>

              <!-- Add image from ID -->
              <?php
              $image = get_field('image');
              $size = 'landscape';

              if( $image ) : ?>
                <?php echo wp_get_attachment_image( $image, $size ); ?>
              <?php endif; ?>

              <?php if( get_field('image_credits') ) : the_field('image_credits'); endif; ?>

              <?php get_template_part('template-parts/content', 'blocks'); ?>

          </div>


          <footer>
            <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
          </footer>
        </article>
      </div>
    </section>
