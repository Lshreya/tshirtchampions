<?php
/**
 * Template to display single post content on archive pages
 * Archive Post Style: Medium Thumbnail
 */
?>

<article <?php hybridextend_attr( 'post', '', 'archive-medium' ); ?>>

	<div class="entry-grid grid">

		<div class="entry-grid-content grid-span-12">

			<?php if ( has_post_thumbnail() ) :
				$img_size = apply_filters( 'hoot_post_image_archive_medium', 'hoot-preview' );
				hoot_post_thumbnail( 'entry-content-featured-img entry-grid-featured-img alignleft', $img_size, true, get_permalink() );
			endif; ?>

			<header class="entry-header">
				<?php the_title( '<h2 ' . hybridextend_get_attr( 'entry-title' ) . '><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<?php if ( is_sticky() ) : ?>
				<div class="entry-sticky-tag invert-typo"><?php _e( 'Sticky', 'hoot-ubix-premium' ) ?></div>
			<?php endif; ?>

			<div class="screen-reader-text" itemprop="datePublished" itemtype="https://schema.org/Date"><?php echo get_the_date('Y-m-d'); ?></div>
			<?php hoot_meta_info_blocks( hoot_get_mod('archive_post_meta'), 'archive-medium' ); ?>

			<?php
			if ( 'full-content' == hoot_get_mod('archive_post_content') ) {
				?><div <?php hybridextend_attr( 'entry-summary', 'content' ); ?>><?php
					the_content();
				?></div><?php
				wp_link_pages();
			} else {
				?><div <?php hybridextend_attr( 'entry-summary', 'excerpt' ); ?>><?php
					the_excerpt();
				?></div><?php
			}
			?>
			<div class="clearfix"></div>

		</div><!-- .entry-grid-content -->

	</div><!-- .entry-grid -->

</article><!-- .entry -->