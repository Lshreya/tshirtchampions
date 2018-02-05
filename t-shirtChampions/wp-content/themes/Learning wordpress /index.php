<h1> Hello World</h1>
<?php

get_header(); ?>
<!--main column-->

<div class="main-column">

</div><!--/ main column-->

if(have_posts()) :
while (have_posts()): the_post(); ?>
    <article class="post">
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

         <p class="post-info"><?php the_time('m/d/y g:i a');?>
        <?php the_content();?>
    </article>


    <?php endwhile;

    else : 
        echo'<p> No Content found </p>';

    endif; ?>
      
<? get_footer();

?> 