<?php get_header(); ?>
<?php $current_taxonomy = get_query_var('tsc_garment_category'); 
$product_category = get_term_by( 'slug', $current_taxonomy, 'tsc_garment_category');
?>
<div class="tab"></div>
<div id="wrapper" class="container">
    <div id="main" class="row">
        <div id="content" class="col24 columns last">
            <div id="content_int">
                <div id="edit-head" class="">
                <h1><?php echo get_field('headline', $product_category); ?></h1>
                </div>
                    <div class="rf-paragraph ">
                        <div id="paragraph-130213" class="">
                            <h2><?php echo get_field('second_tag', $product_category); ?></h2>
                            <p>
                            <?php
                            $total_rows = count( get_field('category_sub_nav', $product_category) );
                            $count = 0;
                            if( have_rows('category_sub_nav', $product_category) ):
                                while ( have_rows('category_sub_nav',  $product_category) ) : the_row();
                                    $link_title = get_sub_field('link_title');
                                    $link_url = get_sub_field('link_url');
                                    echo "<a href='" .$link_url."'>" .$link_title. "</a>";
                                    $count++;
                                    if($count < $total_rows){
                                        echo "&nbsp; &bull; &nbsp;";
                                    }
                                endwhile;
                            endif;
                             ?>
                            </p>
                            <div class="clear"></div>
                        </div>
                    </div>

   <?php
$args = array(
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'post_status' => 'publish',
    'post_type' => 'tsc_garment',
    'tax_query' => array(
        array(
            'taxonomy' => 'tsc_garment_category',
            'field' => 'slug',
            'terms' => $current_taxonomy,
        )
    )
);

$products = get_posts($args);

foreach($products as $product): 
 ?> 
                    <div class="rf-paragraph ">
                        <div id="paragraph-130214" class="">
                            <div class="image left">
                                
                <?php echo '<a href="' . get_field( 'link_url', $product->ID ) . '">'; ?>
                                <?php echo get_the_post_thumbnail ( $product->ID, 'product_thumb' ); ?>
                                </a>
                            </div>
                            <h2><?php echo $product->post_title; ?></h2>
                            <p><?php echo $product->post_content; ?></p>
                            <p><strong><?php echo '<a href="' . get_field( 'link_url', $product->ID ) . '">'; ?>See All <?php echo $product->post_title; ?></a></strong></p>
                            <div class="clear"></div>
                        </div>
                    </div>
 <?php endforeach; ?>

        <div class="rf-paragraph ">
            <div id="paragraph-130225" class="">
            <h2><?php echo get_field('bottom_headline', $product_category); ?></h2>
            <p><?php echo get_field('bottom_paragraph', $product_category); ?><br /></a></p>
            <p><strong><a href="<?php echo get_field('featured_link_url', $product_category); ?>"><?php echo get_field('featured_link_text', $product_category); ?></a></strong></p>
                <div class="clear"></div>
                    <div class="widget">
<style>
div.widget { padding:10px 0px 0px 0px !important; margin:10px 0px -20px 0px !important; }
#featured_shirts { display:productBlock; width:100%; }

div.productBlock { float:left; width:127px; height:127px; z-index:1; position:relative; margin:0 30px 30px 0; background: #002A5C; }

div.productBlock img { width:127px; height:127px; z-index:1; position:relative; left:0; top:0; opacity:1; }

div.productBlock a:hover img { opacity:.7; }
</style>


                    <div id="featured_shirts">
                        <?php
                        if( have_rows('featured_designs', $product_category) ):
                            while ( have_rows('featured_designs',  $product_category) ) : the_row();
                                $design_image_id = get_sub_field('design_image');
                                $design_image = wp_get_attachment_image( $design_image_id, array(200,200) );
                                $design_url = get_sub_field('design_url');
                        ?>
                        <div class="productBlock">
                        <a href="<?php echo $design_url; ?>" class="over preview_link" title="Click to start designing this shirt!"><?php echo $design_image; ?></a>
                        </div>
                        <?php
                            endwhile;
                        endif;
                        ?>

                    </div>
                        <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <div class="rf-paragraph ">
            <div id="paragraph-130226" class="">
                <div class="image right">
                <a href="http://stores.inksoft.com/Tshirt_Champions/Products">
                <img src="<?php bloginfo('template_directory'); ?>/images/start1-thumb600x600.png" alt="Start Button"></a>
                </div>
            <h2><?php echo get_field('closing_headline', $product_category); ?></h2>
            <p><?php echo get_field('closing_paragraph', $product_category); ?></p>
            <p><strong><a href="http://stores.inksoft.com/Tshirt_Champions/Products" target="_self" title="Click to start designing a new custom t-shirt!">Start designing now!</a></strong></p>
            <div class="clear"></div>
        </div>
    </div>
</div><!-- end content_int -->
</div><!-- end content -->
<div class="clear"></div>
</div><!-- end main -->
</div><!-- end wrapper -->
<?php get_footer(); ?>