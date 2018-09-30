<!-- Installatie -->

<?php if( have_rows('installatie') ): ?>
  <?php while ( have_rows('installatie') ) : the_row(); ?>

  <section id="installatie" class="wrapper post" style="background-image:url(<?php if( get_sub_field( 'bg_img_2' ) ) : the_sub_field( 'bg_img_2' ); endif; ?>)";>
    <div class="inner">
      <article class="box">

        <header>
          <h2><?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?></h2>
        </header>

        <div class="content">
          <?php if( get_sub_field('article_main') ): the_sub_field('article_main'); endif; ?>
        </div>

        <footer>
          <?php if( get_sub_field('credits') ): the_sub_field('credits'); endif; ?>
          <?php include( get_template_directory() . '/includes/social.php' ); ?>
          <?php
            $images = get_sub_field('money');
            $size = 'very-small';
            if( $images ): ?>
            <ul class="icons">
              <?php foreach( $images as $image ): ?>
                <li>
                  <?php echo wp_get_attachment_image( $image['ID'], $size); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <a href="#two" class="button alt scrolly">Lees verder</a>

        </footer>
      <?php endwhile; endif; ?>

      </article>
    </div>
    <a href="#two" class="more">Learn More</a>
  </section>
