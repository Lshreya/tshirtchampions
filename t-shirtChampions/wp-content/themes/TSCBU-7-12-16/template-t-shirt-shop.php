<?php 
/*
Template Name: T Shirt Shop
 */
get_header();
the_post();
?>
<div id="wrapper" class="container">
    <div id="main" class="row">
        <div id="content" class="col24 columns last">
            <div id="content_int">
                <div id="edit-head" class="">
                <h1>T-Shirts Give Back Shop</h1>
                </div>
                <div class="rf-paragraph ">
                    <div id="paragraph-124635" class="">
                    <?php the_content(); ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="products" class="row design_products">
            <?php
                if(have_rows('products')):
                    while(have_rows('products')):
                        the_row();
                        $title = get_sub_field('title');
                        $attachment_id = get_sub_field('image');
                        $image = wp_get_attachment_image( $attachment_id, 'product_cat_thumb');
                        $link = get_sub_field('link');

            ?>
                <div class="item col7 columns">
                    <div id="edit-124636" class="">
                        <div class="text"><h3><?php echo $title; ?></h3></div>
                        <a href="<?php echo $link; ?>">
                            <?php echo $image; ?>
                        </a>
                    </div>
                </div>

            <?php
                    endwhile;
                endif;
            ?>

            <div class="clear"></div>
            <div id="product_pager"></div>
    </div>

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