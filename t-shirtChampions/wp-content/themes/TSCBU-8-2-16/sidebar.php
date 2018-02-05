<?php

$is_blog = (is_home() || is_post_type_archive('post') || is_year() || is_month() || is_singular("post"));
$our_company = get_page_by_path( "our-company");
// this line gets an array of all the ancestors (parent, grandparent, etc.) of the current page.
$parents = get_post_ancestors( $post->ID ); 
$top_most_parent = ($parents) ? $parents[count($parents)-1] : $post->ID; 
if($is_blog){
    $top_most_parent = $our_company->ID;
}
elseif($parents){
  $top_most_parent = $parents[ count($parents) - 1 ];
}
else{
  $top_most_parent = $post->ID;
}
?>
<div id="wrapper-orginal" class="container">
    <div id="main" class="row with_sidebar">
        <div id="sidebar_wrapwrap" class="col7 columns">
            <div id="sidebar_wrap">
                <div id="sidebar">
                    <div class="page_title bebas">
                    <a href="<?php echo get_permalink($top_most_parent); ?>">
                    <?php echo get_the_title($top_most_parent); ?></a>
                    </div>
                        <div class="sidebar_section">
                            <?php 
                            $children = wp_list_pages("title_li=&child_of=".$top_most_parent."&echo=0&sort_column=menu_order");
                            if ($children) {
                            ?>
                            <ul class="subnav"> <?php echo $children; ?>
                            <?php } ?>
                               <?php
                                if($our_company->ID == $top_most_parent){
                                    if($is_blog){
                                        $current_year = get_query_var('year');
                                        $current_month = get_query_var('monthnum');

                                        echo '<li class="'. ( empty($current_year) ? 'current_page_item' : '' ) .'"><a href="' . site_url('blog') . '">Blog</a>';
                                        echo '<ul class="archive-year-list">';                                        $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_type='post' AND post_status = 'publish' ORDER BY post_date DESC");
                                        foreach($years as $year){
                                            echo '<li class="'. ( ($year == $current_year && empty($current_month)) ? 'current_page_item' : '' ) .'"><a href="'. get_year_link($year).'">'. $year .'</a>';
                                            if($year == $current_year){
                                                echo '<ul class="archive-month-list">';
                                                $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE YEAR(post_date) = $year AND post_type='post' AND post_status = 'publish' ORDER BY MONTH(post_date) DESC");
                                                foreach($months as $month){
                                                    echo '<li class="'. ($month == $current_month ? 'current_page_item' : '') .'"><a href="'. get_month_link($year, $month).'">'. date( 'F', mktime(0, 0, 0, $month, 1) ) .'</a></li>';
                                                }
                                                echo '</ul>';
                                            }
                                            echo '</li>';
                                            $i++;
                                        }
                                         echo '</ul>';
                                         echo '</li>';
                                    }
                                    else{
                                        echo '<li><a href="' . site_url('blog') . '">Blog</a></li>';
                                    }

                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
                    <div id="edit-114451" class="">
                        <?php dynamic_sidebar( 'main_sidebar' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
