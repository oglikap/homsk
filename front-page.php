<?php get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php
      get_template_part( 'home-templates/content', 'banner' );
      get_template_part( 'home-templates/content', 'one' );
      get_template_part( 'home-templates/content', 'installatie' );
      get_template_part( 'home-templates/content', 'two' );
      get_template_part( 'home-templates/content', 'three' );
      get_template_part( 'home-templates/content', 'four' );
    ?>

  <?php endwhile; endif; ?>

	<?php get_template_part( 'home-templates/content', 'footer' ); ?>
