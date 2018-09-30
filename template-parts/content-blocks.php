<?php
  if( have_rows('blocks') ):
 ?>

 <ul class="blocks">

   <?php
    while( have_rows('blocks') ): the_row();
    ?>

    <li class="block">

      <header>
        <h3>
          <?php if( get_sub_field('title') ): the_sub_field('title'); endif; ?>
        </h3>
      </header>
      <div class="content">
        <?php if( get_sub_field('content') ): the_sub_field('content'); endif; ?>
      </div>

    </li>

  <?php endwhile; ?>

 </ul>

<?php endif; ?>
