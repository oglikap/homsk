<!-- Three -->

<?php if( have_rows('three') ): ?>
  <?php while( have_rows('three') ): the_row('three'); ?>
  <section id="three" class="wrapper post" style="background-image:url(<?php if( get_sub_field( 'bg_img_2' ) ) : the_sub_field( 'bg_img_2' ); endif; ?>)";>
    <div class="inner">
      <article class="box">
        <header>
          <h2><?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?></h2>
          <p><?php if( get_sub_field('header_text') ): the_sub_field('header_text'); endif; ?></p>
        </header>
        <div class="content">
          <div class="row">
            <div class="5u 12u$(medium)">
              <!-- Add image from ID -->
              <?php
                $image = get_sub_field('foto_eelco');
                $size = 'portrait';
                if( $image ) : echo wp_get_attachment_image($image, $size); endif;
                ?>
              <p>
                <small><?php if( get_sub_field('sub') ) : the_sub_field('sub'); endif; ?></small>
              </p>
            </div>
            <div class="7u$ 12u$(medium)">
              <?php if( get_sub_field('article_main') ): the_sub_field('article_main'); endif; ?>
              <a href="#four" class="button alt scrolly">Bekijk Workshops</a>

            </div>
          </div>

        </div>
        <footer>
          <?php
          // LIST PRODUCTIONS
          query_posts('post_per_page=6&post_type=productions');
          if( have_posts() ) : ?>
            <br><hr />
            <h3>Bekijk eerdere producties</h3>
            <ul>
            <?php while( have_posts() ) : the_post();?>
              <li>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('square'); ?>
                </a>
              </li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <?php wp_reset_query(); ?>

        </footer>
      </article>
    </div>
  <?php endwhile; endif; ?>

    <a href="#four" class="more">Learn More</a>
  </section>
