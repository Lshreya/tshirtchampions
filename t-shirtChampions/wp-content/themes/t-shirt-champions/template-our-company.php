
<?php 
/*
Template Name: Our Company
 */
get_header();
the_post();
?>
<?php get_sidebar(); ?>
<div class="content-block-column column-1-3 content-block-style1 visual-icon">
    <div class="content-block no-highlight">
        <div class="content-block-visual content-block-icon icon-style-square">
                <i class="fa fa-user-o"></i>											
        </div>
        <div class="content-block-content content-block-content-hasicon">
            <h3 class="content-block-title">SATISFACTION GUARANTEED</h3>
            <h6 class="content-block-subtitle small">Delivery ON time</h6> 
            <div class="content-block-text"></div>
        </div>
    </div>
    </div>
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
