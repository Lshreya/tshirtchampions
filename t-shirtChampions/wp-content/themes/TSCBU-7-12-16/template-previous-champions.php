<?php
/*
Template Name: Previous Champions
*/

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
     <?php
      $args = array(
        'post_type' => 'tsc_champion',
        'posts_per_page' => -1
      );
      $champions = get_posts($args);

      $layout = "right";
      $count = 0;
      foreach($champions as $champion):
        if($count > 0):
          $month = get_field('month', $champion->ID);
          $year = get_field('year', $champion->ID);
     ?>
      <div class="rf-paragraph ">
        <div id="paragraph-122018" class="">
          <div class="image <?php echo $layout; ?>">
            <?php echo get_the_post_thumbnail( $champion->ID, 'thumbnail' ); ?>
          </div>
          <p><strong>Champion of the Month | <?php echo $month . " " . $year; ?></strong></p>
          <?php echo apply_filters('the_content', $champion->post_content); ?>
          <div class="clear"></div>
        </div>
      </div>

      <?php
        endif;
        $count++;
        $layout = ($layout == "right") ? "left" : "right";
      endforeach;
      ?>

    </div><!-- end content_int -->
  </div><!-- end content -->
  <div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>
