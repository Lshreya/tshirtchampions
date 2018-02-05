<?php get_header(); ?>
<?php
// Dispay Loop Meta at top
hoot_display_loop_title_content( 'pre', 'page.php' );
if ( hoot_page_header_attop() ) {
	get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
	hoot_display_loop_title_content( 'post', 'page.php' );
}

// Template modification Hook
do_action( 'hoot_template_before_content_grid', 'page.php' );
?>

<div class="grid main-content-grid">

	<?php
	// Template modification Hook
	do_action( 'hoot_template_before_main', 'page.php' );
	?>

	<main <?php hybridextend_attr( 'content' ); ?>>

		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_start', 'page.php' );

		// Checks if any posts were found.
		if ( have_posts() ) :

			// Dispay Loop Meta in content wrap
			if ( ! hoot_page_header_attop() ) {
				hoot_display_loop_title_content( 'post', 'page.php' );
				get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
			}
			?>

        <div id="content-wrap">
        <?php $current_taxonomy = get_query_var('tsc_product_category'); 
        $product_category = get_term_by( 'slug', $current_taxonomy, 'tsc_product_category');
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
            'post_type' => 'tsc_product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tsc_product_category',
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
        <?php
                // Template modification Hook
                do_action( 'hoot_template_after_content_wrap', 'page.php' );

                // Loads the comments.php template if this page is not being displayed as frontpage or a custom 404 page or if this is attachment page of media attached (uploaded) to a page.
                if ( !is_front_page() && !hybridextend_is_404() && !is_attachment() ) :

                    // Loads the comments.php template
                    comments_template( '', true );

                endif;

            // If no posts were found.
            else :

                // Loads the template-parts/error.php template.
                get_template_part( 'template-parts/error' );

            // End check for posts.
            endif;

            // Template modification Hook
            do_action( 'hoot_template_main_end', 'page.php' );
            ?>

	</main><!-- #content -->

	<?php
	// Template modification Hook
	do_action( 'hoot_template_after_main', 'page.php' );1
	?>

</div><!-- .grid -->

<?php get_footer(); ?>