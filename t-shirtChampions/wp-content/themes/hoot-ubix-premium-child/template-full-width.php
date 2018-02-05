
<?php 
/*
Template Name: Full Width
 */
get_header();
the_post();
?>

<div id="wrapper" class="container">
    <div id="main" class="row">

<div id="content" class="col24 columns last">
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
