<?php

get_header();
the_post();
?>
<?php get_sidebar(); ?>
<div id="content" class="col17 columns last prepend-1">
  <div id="content_int">
      <div id="edit-head" class="">
        <?php
         if( $custom_title = get_field('custom_title') ){
            echo '<h1>' . $custom_title . '</h1>';
         }
         else {
            echo '<h1>' . get_the_title() . '</h1>';
         }
         ?>
      </div>
     <?php the_content(); ?>
    </div><!-- end content_int -->
  </div><!-- end content -->
  <div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>
