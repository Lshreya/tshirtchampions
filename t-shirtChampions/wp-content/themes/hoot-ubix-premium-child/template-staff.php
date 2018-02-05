<?php 
/*
Template Name: Staff
*/
// Loads the header.php template.
get_header();
?>
				<?php get_sidebar('full'); ?>

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

				<?php
				// Template modification Hook
				do_action( 'hoot_loop_start', 'page.php' );

				// Display Featured Image if present
				if ( hoot_get_mod( 'post_featured_image' ) && !hybridextend_is_404() ) {
					$img_size = apply_filters( 'hoot_post_image_page', '' );
					hoot_post_thumbnail( 'entry-content-featured-img', $img_size, true );
				}

				// Begins the loop through found posts, and load the post data.
				while ( have_posts() ) : the_post();

					// Loads the template-parts/content-{$post_type}.php template.
					hybridextend_get_content_template();

				// End found posts loop.
				endwhile;

				// Template modification Hook
				do_action( 'hoot_loop_end', 'page.php' );
				?>
				<div id="content" class="col17 columns last prepend-1">
				<div id="content_int">
					<div id="edit-head" class="">
			
					</div>
					<?php
					$args = array(
					'posts_per_page' => -1,
					'post_type' => 'tsc_team',
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);
					$team_members = get_posts($args);
					foreach($team_members as $team_member):

					?>
					<div class="rf-paragraph ">
					<div id="paragraph-112621" class="">
						<div class="image left">
						<?php echo get_the_post_thumbnail ( $team_member->ID, 'team_thumb' ) ?>
						</div>
						<h2><?php echo $team_member->post_title; ?></h2> 
						<?php echo apply_filters('the_content', $team_member->post_content); ?>
						<div class="clear"></div>
					</div>
					</div>
					<?php
					endforeach;
					?>
				</div><!-- end content_int -->
				</div><!-- end content -->
				<div class="clear"></div>
				</div><!-- end main -->
				</div><!-- end wrapper -->
			</div><!-- #content-wrap -->

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

<?php get_footer(); // Loads the footer.php template. ?>