<!-- One -->

<?php if( have_rows( 'one' ) ) : ?>

  <?php while( have_rows( 'one' ) ) : the_row(); ?>

  <section id="one" class="wrapper post" style="background-image:url(<?php if( get_sub_field( 'bg_img_2' ) ) : the_sub_field( 'bg_img_2' ); endif; ?>)";>
    <div class="inner">
      <article class="box">

        <header>
          <h2><?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?></h2>
        <!--      <p>01.01.2017</p>-->
        </header>

        <div class="content">
          <?php if( get_sub_field('article_main') ): the_sub_field('article_main'); endif; ?>
            <p class="credits"><?php if( get_sub_field('credits') ): the_sub_field('credits'); endif; ?></p>
          <?php endwhile; endif; ?>
        </div>

        <footer>
          <a href="#installatie" class="button alt scrolly">Lees verder</a>
        </footer>

      </article>
    </div>
    <a href="#installatie" class="more">Learn More</a>
  </section>
