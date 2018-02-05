<?php
/*
Template Name: Champion of the Month
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
        'posts_per_page' => 1
      );
      $champions = get_posts($args);
      $champion_of_the_month = $champions[0];

      $month = get_field('month', $champion_of_the_month->ID);
      $year = get_field('year', $champion_of_the_month->ID);
     ?>
    <div class="rf-paragraph ">
      <div id="paragraph-121031" class="">
        <h2>Champion of the Month | <?php echo $month . " " . $year; ?></h2>
        <p><strong><?php echo $champion_of_the_month->post_title; ?></strong></p>
        <div class="clear"></div>
      </div>
    </div>
    <div class="rf-paragraph ">
      <div id="paragraph-121032" class="">
        <div class="image left">
          <?php echo get_the_post_thumbnail( $champion_of_the_month->ID, 'thumbnail' ); ?>
        </div>
        <?php echo apply_filters('the_content', $champion_of_the_month->post_content); ?>
        <div class="clear"></div>
      </div>
    </div>

    </div><!-- end content_int -->
  </div><!-- end content -->
  <div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>
