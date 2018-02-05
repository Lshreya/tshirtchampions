
<?php 
/*
Template Name: Our Company
 */
get_header();
the_post();
?>
<?php get_sidebar(); ?>
<div id="content" class="col17 columns last prepend-1">
  <div id="content_int">
    <div id="edit-head" class="">
    <h1><?php the_title(); ?></h1>
    </div>
    <div class="rf-paragraph ">
    <?php the_content(); ?>
    </div>
</div><!-- end content_int -->
</div><!-- end content -->
<div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>
