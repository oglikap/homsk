<!-- Four -->

<?php if( have_rows('four') ) : ?>
  <?php while( have_rows('four') ) : the_row('four'); ?>
    <section id="four" class="wrapper post" style="background-image:url(<?php if( get_sub_field( 'bg_img_2' ) ) : the_sub_field( 'bg_img_2' ); endif; ?>)";>
    <div class="inner">
      <article class="box">
        <header>
          <h2>
            <?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?>
          </h2>
        </header>
        <div class="content">
          <?php if( get_sub_field('article_main') ): the_sub_field('article_main'); endif; ?>
        </div>
        <footer>
          <a href="#footer" class="button alt scrolly">Neem contact op!</a>
        </footer>
      </article>
    </div>
  </section>
<?php endwhile; endif; ?>
