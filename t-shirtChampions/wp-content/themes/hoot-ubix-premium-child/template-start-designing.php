<?php
/*
Template Name: Start Designing
 */

get_header();
 ?> 
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
    <div id="wrapper" class="container">
        <div id="main" class="row" >
            <div id="content" class="col24 columns last">
                <div id="content_int">
                    
                    <div class="rf-paragraph ">
                        <div id="paragraph-119121" class="">
                            <?php the_content(); ?>
                        <div class="clear"></div>
                        </div>
                    </div>
                    <div id="products" class="design_products col24 columns">

    <?php
    $args =array(
        'hide_empty' => false,
        'orderby' => 'name'
    );
    $product_categories = get_terms('tsc_garment_category', $args);

    $sortable_terms = array();

    foreach($product_categories as $product_category){
        $display_order = get_field('display_order', $product_category);
        
        if(!empty($display_order)){
            $sortable_terms[$display_order] = $product_category;
        }
        
    }

    ksort($sortable_terms);

    $count = 0;
    foreach ($sortable_terms as $product_category) :
        $attachment_id      = get_field('category_image', $product_category);
        $category_link_url  = get_field( 'link_url', $product_category );
        $category_link_type = get_field( 'link_type', $product_category );
        $category_image     = wp_get_attachment_image( $attachment_id, 'product_cat_thumb' );

        $category_link_url = ($category_link_type == 'Internal') ? get_term_link( $product_category ) : $category_link_url;
        $link_target = ($category_link_type == 'External') ? "target='_blank'" : "";

        if($count % 4==0){
            if($count > 0){
                echo "</div>";
            }
            echo "<div class='row'>";
        }
    ?>
            <div class="item col5 dl-columns">
                <div id="edit-118227" class="">
                    <div class="text">
                        <h3><?php echo '<a class="robotb" '.$link_target.' href="' . $category_link_url . '">'; ?><?php echo $product_category->name; ?></a></h3>
                    </div>
                    <?php echo '<a class="robotb" '.$link_target.' href="' . $category_link_url . '">'; ?>
                    <?php echo $category_image; ?>
                    </a>
                    <div class="sub_categories">
                        <?php
                        if( have_rows('category_sub_nav', $product_category) ):
                            while ( have_rows('category_sub_nav',  $product_category) ) : the_row();
                                $link_title = get_sub_field('link_title');
                                $link_url = get_sub_field('link_url');
                                echo "<p><a href='" .$link_url."'>" .$link_title. "</a></p>";
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
    <?php 
    $count++;
    endforeach;
    echo "</div>";
    ?>


            <div class="clear"></div>        
            <div id="product_pager"></div>
        </div>
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
    </div><!-- .grid -->

    <script>
        function setTopPadding() {

        }
        function equalHeight (selector) {
            var currentTallest = 0,
                currentRowStart = 0,
                rowDivs = [],
                $el,
                topPosition = 0;

            $(selector).each(function() {

                $el = $(this);
                topPostion = $el.position().top;

                if (currentRowStart != topPostion) {

                    // we just came to a new row.  Set all the heights on the completed row
                    for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                        var topPadding = currentTallest - rowDivs[currentDiv].height();
                        rowDivs[currentDiv].css({
                            'padding-top': topPadding
                        });
                    }

                    // set the variables for the new row
                    rowDivs.length = 0; // empty the array
                    currentRowStart = topPostion;
                    currentTallest = $el.height();
                    rowDivs.push($el);

                } else {

                    // another div on the current row.  Add it to the list and check if it's taller
                    rowDivs.push($el);
                    currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

                }

                // do the last row
                for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                    var topPadding = currentTallest - rowDivs[currentDiv].height();
                    rowDivs[currentDiv].css({
                        'padding-top': topPadding
                    });
                }

            });


        }

        $(window).load(function(){
            equalHeight('.design_products .item h3');
        });

    </script>

                    </div><!-- end content_int -->
                </div><!-- end content -->
                <div class="clear"></div>
            </div><!-- end main -->
        </div><!-- end wrapper -->
        <?php get_footer(); ?>