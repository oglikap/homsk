
<!-- Two -->

<?php if( have_rows( 'two' ) ): ?>
  <?php while( have_rows( 'two') ): the_row(); ?>
  <section id="two" class="wrapper post" style="background-image:url(<?php if( get_sub_field( 'bg_img_2' ) ) : the_sub_field( 'bg_img_2' ); endif; ?>)";>

    <div class="inner">
      <header>
        <h3><?php if( get_sub_field('header') ): the_sub_field('header'); endif ?></h3>
      </header>
      <div class="content">
        <section class="carousel">
          <div class="reel">
            <ul>
              <?php
              $args = array('posts_per_page' => 12, 'category' => 3, 'order' => 'ASC');
              $postlist = get_posts($args);
              foreach($postlist as $post) :
                setup_postdata($post);?>

                <li>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <a href="<?php the_permalink(); ?>">
                    <span class="image"><?php the_post_thumbnail('square'); ?></span>
                  </a>
                  <?php the_excerpt(); ?>
                </li>

              <?php
              wp_reset_postdata();
              endforeach;
               ?>
            </ul>
          </div>
        </section>

      </div>
      <footer>
        <a href="#three" class="more">Learn More</a>
      </footer>

    </div>
  </section>
<?php endwhile; endif; ?>
