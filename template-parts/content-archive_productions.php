<?php
// LIST PRODUCTIONS
query_posts('post_type=productions'); ?>
    <li>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('square'); ?>
      </a>
    </li>
<?php wp_reset_query(); ?>
