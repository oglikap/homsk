<div class="logo-box">
  <div class="logo" style="font-size:18pt;">
    <a href="<?php echo esc_url( home_url('/') ); ?>">
    <?php
      if( function_exists('the_custom_logo') && has_custom_logo() ) {
        the_custom_logo();
      }
      else {
        bloginfo('name');
      }
    ?>
    </a>
    <!--<h4 style="opacity:.4;margin:-1em .125em 0 0;text-align:right;">
      <?php
        bloginfo('description');
       ?>
    </h4>-->
  </div>

</div>
