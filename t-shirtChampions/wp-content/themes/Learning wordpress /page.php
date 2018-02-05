<h1> Hello World</h1>
<?php

get_header();

if(have_posts()) :
while (have_posts()): the_post(); ?>
    <article class="post page">

<?php

    if( has_children() OR $post ->post_parent > 0){ ?>
        <nav class="site_nav chidren-links clearfix">
            <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id());?></span>
                <ul>
                    <?php
                    $args = array(
                    'child_of' => get_top_ancestor_id(),
                    'title_li' =>''
                    );
                    ?>

                    <?php wp_list_pages($args);?>
                </ul>
        </nav>    
    <?php } ?>
            <h2><?php the_title();?></a></h2>
            <?php the_content();?>
    </article>
    

    <?php endwhile;

    else : 
        echo'<p> No Content found </p>';

    endif;
      
get_footer();

?> 