<!-- Banner -->
<!--
  Note: To show a background image, set the "data-bg" attribute below
  to the full filename of your image. This is used in each section to set
  the background image.
-->

<?php if( have_rows( 'banner' ) ) : ?>

  <?php while( have_rows( 'banner' ) ) : the_row(); ?>

  <section id="banner" style="background-image:url(<?php if( get_sub_field( 'bg_img_1' ) ) : the_sub_field( 'bg_img_1' ); endif; ?>)";>
    <div class="inner">
      <header>
        <?php include( get_template_directory() . '/includes/logo.php' ); ?>
      </header>
      <div class="content">
        <?php if( get_sub_field( 'homsk_speelt' ) ) :?>

          <!--<h4>Speelt</h4>-->

          <h1 class="production-title">
            <?php the_sub_field( 'homsk_speelt' ); endif; ?>
          </h1>

      <?php endwhile; endif; ?>
      </div>
    </div>
    <a href="#one" class="more">Learn More</a>
  </section>
