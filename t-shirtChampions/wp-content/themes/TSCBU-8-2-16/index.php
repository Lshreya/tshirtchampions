<?php

get_header();
the_post();
 ?>
<?php get_sidebar(); ?>
<div id="content" class="col17 columns last prepend-1">
    <div id="content_int">
        <div id="blog">
            <div id="edit-head" class="">
            <h1>T-Shirt Champions Blog</h1>
            </div>
   <?php if (have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>
         <div class="blog_post">
             <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="post_details"><div class="date">Posted on <?php the_time('F j, Y'); ?></div>
                 </div>
                <div class="rf-paragraph ">
                    <div id="paragraph-222352" class="">
                    <?php the_excerpt(); ?>
                    <div class="clear"></div>
                    <div class="image center">
                    <img src="<?bloginfo('template_directory'); ?>/images/mikesignature-thumb600x600.jpg" alt="Mikesignature">
                    </div>
                </div>
            </div>
            </div>
     <?php endwhile; ?>
<?php endif; ?>
    <div id="blog_pager">
<?php get_the_posts_pagination(); ?>
    <div class="clear"></div>
    </div>
</div>
</div><!-- end content_int -->
</div><!-- end content -->
<div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>