<?php

get_header();
the_post();
 ?>
<?php get_sidebar(); ?>
<div id="content" class="col17 columns last prepend-1">
  <div id="blog_post">
    <div id="edit-head" class="">
    <h1><?php the_title(); ?></h1>
    </div>
    <div class="post_details"><div class="date">Posted </a><?php the_time('F j, Y'); ?></div>
    <div class="clear"></div>
  </div>
<div class="rf-paragraph ">
  <div id="paragraph-188831" class="">
  <?php the_content(); ?>
  <div class="clear"></div>

    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="post_topics">
<?php
        $post_tags = wp_get_post_tags($post->ID);
        if(!empty($post_tags)){
          echo '<div class="tags"><span>Tags:</span>';
        }
        $count = 1;
        $total = count($post_tags);
        foreach($post_tags as $post_tag){
          $tag_permalink = get_term_link($post_tag);
          echo '<a href="'. $tag_permalink .'">'. $post_tag->name .'</a>' . ($count < $total ? ', ' : '');
          $count++;
        }
        if(!empty($post_tags)){
          echo '</div>';
        }
        ?>
</div> 
<div id="comments">
<h3>Comments</h3>
<p><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
</div>
<div id="comment_form">
<h3>Leave a comment</h3>
<?php comment_form(); ?>
</div>
</div>
<p><a href="/blog/">&laquo; Back</a></p>
</div><!-- end content_int -->
</div><!-- end content -->
<div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>