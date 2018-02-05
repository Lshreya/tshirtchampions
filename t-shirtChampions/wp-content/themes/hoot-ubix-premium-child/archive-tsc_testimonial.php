<?php 
/*
Template Name: Testimonials
*/

get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'tsc_testimonials',
    'posts_per_page' => 10,
    'paged' => $paged
);
$testimonials_query = new WP_Query( $args );
 ?>
 

<?php get_sidebar(); ?>
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
    <div id="content" class="col17 columns last prepend-1">
        <div id="content_int">
            <div id="edit-head" class="">
            <h1>Testimonials</h1>
            </div>
            <div id="testi_view">
            <a href="our-company-2/testimonials/submit-a-testimonial/">Submit Testimonials</a>
            </div>
            <div class="rf-paragraph ">
                <div id="paragraph-121867" class="">
                    <div class="image center">
                   	<!-- good spot to add a header image -->
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="testimonials" class="page">
                    <div class="overall_rating">
                    Current average rating:
                    <?php
                    $ratings = $wpdb->get_col( "SELECT meta_value FROM  wp_posts JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id WHERE meta_key = 'rating'" );
                    $ratings_total = 0;
                    foreach($ratings as $rating){
                        $ratings_total += $rating;
                    }
                    $average_rating = $ratings_total / count($ratings);
                    $average_rating = round( $average_rating, 1, PHP_ROUND_HALF_UP);

                    for  ($i = 0; $i < $average_rating; $i++):
                        if(($rating - $i) < 1){
                            echo '<img src="'. get_bloginfo('template_directory') .'/images/half.png" class="responsive-image" />';
                        }
                        else{
                            echo '<img src="'. get_bloginfo('template_directory') .'/images/full.png" class="responsive-image" />';
                        }
                    endfor;
                    ?>
                    </div>

                        <div class="testimonials">
                        <?php if ($testimonials_query->have_posts()) : ?>
                            <?php 
                                while ($testimonials_query->have_posts()) : 
                                  $testimonials_query->the_post(); 
                                  $rating = get_field('rating');
                            ?>
                            <div class="item">
                                <div class="rating">
                               <?php
                               for  ($i = 0; $i < $rating; $i++):
                                if(($rating - $i) < 1){
                                  echo '<img src="'. get_bloginfo('template_directory') .'/images/half.png" class="responsive-image" />';
                                }
                                else{
                                  echo '<img src="'. get_bloginfo('template_directory') .'/images/full.png" class="responsive-image" />';
                                }
                                endfor;
                                ?>
                                </div>

                                <?php if( has_post_thumbnail()){ ?>
                                    <div id="test_img">
                                    <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php } ?>

                                <div id="test_comments">
                                  <?php the_content(); ?>
                                </div>
                                <div class="name robotb"><?php the_title(); ?></div>
                                <div class="loc"><?php echo the_field('company'); ?></div>
                                <div class="loc"><?php echo the_field('location'); ?></div>
                               
                                <div class="clear"></div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                                    <div id="blog_pager">
                                    <?php
                                        $big = 999999999; // need an unlikely integer
                                        echo paginate_links( array(
                                        	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        	'format' => '?paged=%#%',
                                        	'current' => max( 1, get_query_var('paged') ),
                                        	'total' => $testimonials_query->max_num_pages
                                        ) );
                                    ?>
                                    </div>
                                </div>
                                <div id="testi_submit_bg">
                                    <a href="/our-company-2/testimonials/submit-a-testimonial/">Submit Testimonials</a>
                                </div>
                            </div>
                        </div><!-- end content_int -->
                    </div><!-- end content -->
                    <div class="clear"></div>
                    </div>
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
	do_action( 'hoot_template_after_main', 'page.php' );
	?>

	<?php hybridextend_get_sidebar( 'primary' ); // Loads the template-parts/sidebar-primary.php template. ?>

</div><!-- .grid -->
<?php 
wp_reset_postdata();
get_footer();
?>