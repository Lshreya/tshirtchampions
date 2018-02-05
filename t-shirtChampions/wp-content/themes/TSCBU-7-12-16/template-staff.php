<?php 
/*
Template Name: Staff
*/
get_header(); ?>
<?php get_sidebar('full'); ?>
<div id="content" class="col17 columns last prepend-1">
  <div id="content_int">
    <div id="edit-head" class="">
    <h1>Team Champion - The Line Up</h1>
    </div>
    <?php
    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'tsc_team',
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $team_members = get_posts($args);
    foreach($team_members as $team_member):

    ?>
    <div class="rf-paragraph ">
      <div id="paragraph-112621" class="">
        <div class="image left">
          <?php echo get_the_post_thumbnail ( $team_member->ID, 'team_thumb' ) ?>
        </div>
        <h2><?php echo $team_member->post_title; ?></h2> 
        <?php echo apply_filters('the_content', $team_member->post_content); ?>
        <div class="clear"></div>
      </div>
    </div>
    <?php
    endforeach;
    ?>
</div><!-- end content_int -->
</div><!-- end content -->
<div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>