<section id="post" class="wrapper" style="background-image:url(<?php if( get_field('foto') ): ?><?php the_field('foto'); ?><?php endif; ?> );">
  <div class="inner">
    <article class="box">
      <header>
        <?php include( get_template_directory() . '/includes/logo.php' ); ?>
        <h2>Lees alles over onze reis naar Talinn</h2>
      </header>
      <div class="content">
        <ul>
          <?php
          $args = array('posts_per_page' => 12, 'order' => 'ASC', 'category' => 3);
          $postlist = get_posts($args);
          foreach($postlist as $post) :
            setup_postdata($post);?>

            <li>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('square'); ?>
              </a>
            </li>

          <?php
          wp_reset_postdata();
          endforeach;
           ?>
        </ul>
      </div> <!-- .content -->
    </article> <!-- box -->
  </div> <!-- .inner -->
</section>
