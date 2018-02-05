<?php
/**
 * Theme Meta Options displayed in admin.
 * Themes should use default 'main_box' as ID for the main meta options box id for brevity. This is the
 * default id used for 'hoot_get_meta_option()' function.
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/* Hook in to add some additiona css for specific options */
add_action( 'hoot_meta_options_enqueue', 'hoot_theme_meta_options_enqueue', 10, 3 );

/**
 * Add some additiona css for specific options
 * This hook is only fired when meta options are being displayed. So checking hook is redundant
 *
 * @since 1.0
 * @param string $hook
 * @return void
 */
function hoot_theme_meta_options_enqueue( $hook, $post_type, $supported_post_types ) {
	if ( $post_type == 'post' || $post_type == 'page' )
		add_action( 'admin_head', 'hoot_theme_meta_options_pagepost_scripts' );
	if ( $post_type == 'page' )
		add_action( 'admin_head', 'hoot_theme_meta_options_page_scripts' );
	if ( $post_type == 'hoot_slider' )
		add_action( 'admin_head', 'hoot_theme_meta_options_hoot_slider_scripts' );
}

function hoot_theme_meta_options_pagepost_scripts() {
	echo '<style>
	#section-hoot-main_box-pre_title_content,
	#section-hoot-main_box-pre_title_content_post { border-bottom: none; padding-bottom: 10px; }
	#section-hoot-main_box-pre_title_content_post,
	#section-hoot-main_box-pre_title_content_stretch { padding-top: 0; }
	#section-hoot-main_box-pre_title_content_post h4,
	#section-hoot-main_box-pre_title_content_stretch h4 { display: none; }
	</style>';
}

function hoot_theme_meta_options_page_scripts(){
	global $post;
	if ( !empty( $post->ID ) && ( $post->ID == get_option( 'page_on_front' ) ) ) {
		echo '<style>
		#section-hoot-main_box-sidebar_type,
		#section-hoot-main_box-sidebar,
		#section-hoot-main_box-display_loop_meta,
		#section-hoot-main_box-meta_hide_info,
		#section-hoot-main_box-pre_title_content_stretch,
		#section-hoot-main_box-pre_title_content_post,
		#section-hoot-main_box-pre_title_content { display: none !important; }
		</style>';
	} else {
		echo '<style>#section-hoot-main_box-frontpage_sidebar { display: none; }</style>';
	}
	if ( !empty( $post->ID ) && ( $post->ID == get_option( 'page_for_posts' ) ) ) {
		echo '<style>
		#section-hoot-main_box-sidebar_type,
		#section-hoot-main_box-sidebar,
		#section-hoot-main_box-meta_hide_info { display: none !important; }
		</style>';
	} else {
		echo '<style>#hoot-main_box-home_sidebar { display: none; }</style>';
	}
	if ( !empty( $post->ID ) && ( $post->ID == get_option( 'woocommerce_shop_page_id' ) ) ) {
		echo '<style>
		#section-hoot-main_box-sidebar_type,
		#section-hoot-main_box-sidebar,
		#section-hoot-main_box-meta_hide_info { display: none !important; }
		</style>';
	} else {
		echo '<style>#hoot-main_box-wooshop_sidebar { display: none; }</style>';
	}
}

function hoot_theme_meta_options_hoot_slider_scripts(){
	echo '<script type="text/javascript">jQuery(document).ready(function($) {
	var $hoot_slradio = $("#section-hoot-main_box-display input[type=radio]"), $hoot_sltarget = $(".hide-on-slider-display-posts"), $hoot_sstarget = $(".show-on-slider-display-posts");
	if ( $("#section-hoot-main_box-display input[type=radio]:checked").val() == "posts" )
		$hoot_sltarget.hide();
	else
		$hoot_sstarget.hide();
	$hoot_slradio.on("change", function(){
		if ( this.value == "posts" ) {
			$hoot_sstarget.show();
			$hoot_sltarget.hide();
		} else {
			$hoot_sstarget.hide();
			$hoot_sltarget.show();
		}
	});
	});</script>';
}

/**
 * Defines an array of meta options that will be used to generate the metabox.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * Child themes can modify the meta options array using the 'hoot_theme_meta_options' filter hook.
 *
 * @since 1.0
 * @param object $hoot_options_meta_admin
 * @return void
 */
function hoot_meta_options( $hoot_options_meta_admin ) {

	// define a directory path for using image radio buttons
	$imagepath =  HYBRIDEXTEND_INCURI . 'admin/images/';

	$options = array();
	global $hoot_options_meta_admin;

	/*** 'hoot_slider' post-type meta ***/

	$options['hoot_slider']['main_box'] = array(
		'title'    => __( 'Edit Slider', 'hoot-ubix-premium' ),
		'context'  => 'normal',
		'priority' => 'high',
	);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name' => __('Slider Type', 'hoot-ubix-premium'),
			'type' => 'heading',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			// 'name'    => "",
			'id'      => "type",
			'class'   => 'slider_type',
			'default' => "image",
			'type'    => "images",
			'options' => array(
				'image' => $imagepath . 'slider-type-image.png',
				'html' => $imagepath . 'slider-type-html.png',
				'carousel' => $imagepath . 'slider-type-carousel.png',
			),
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name' => __('Slider Settings', 'hoot-ubix-premium'),
			'type' => 'subheading',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Auto Play', 'hoot-ubix-premium'),
			'desc'    => __('Check this to automatically start playing the slider.', 'hoot-ubix-premium'),
			'id'      => 'auto',
			'default' => '1',
			'type'    => 'checkbox',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Pause Time', 'hoot-ubix-premium'),
			'desc'    => __('The time (in ms) between each auto transition.<br />Example: 5 seconds is 5000 ms', 'hoot-ubix-premium'),
			'id'      => 'pause',
			'default' => '5000',
			'class'   => 'mini',
			'type'    => 'text',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select" data-selector="slider_type">',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Carousel Items', 'hoot-ubix-premium'),
			'desc'    => __('Number of items to show in the carousel.', 'hoot-ubix-premium'),
			'id'      => 'item',
			'class'   => 'show-on-select-block slider_type-carousel hoothide mini',
			'default' => '3',
			'type'    => 'text',
		);

		/*$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Adaptive Height', 'hoot-ubix-premium'),
			'desc'    => __('Adjust the height according to height of slide being displayed.', 'hoot-ubix-premium'),
			'id'      => 'adaptiveheight',
			'class'   => 'show-on-select-block slider_type-image slider_type-carousel hoothide',
			'default' => '1',
			'type'    => 'checkbox',
		);*/

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Minimum Slider Height (in pixels)', 'hoot-ubix-premium'),
			'desc'    => __('<strong>(in pixels)</strong> Leave empty to let the slider height adjust automatically.', 'hoot-ubix-premium'),
			'id'      => 'minheight',
			'class'   => 'show-on-select-block slider_type-html hoothide mini',
			'default' => '375',
			'type'    => 'text',
		);

		/* slidemove will be 1 if loop is true, which it is for hoot-theme
		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Move Items', 'hoot-ubix-premium'),
			'desc'    => __('Number of carousel items to move at a time.', 'hoot-ubix-premium'),
			'id'      => 'slidemove',
			'class'   => 'show-on-select-block slider_type-carousel hoothide mini',
			'default' => '1',
			'type'    => 'text',
		);*/

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div>',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Display Content', 'hoot-ubix-premium'),
			'id'      => "display",
			'class'   => "display_slides",
			'default' => "slides",
			'type'    => "radio",
			'options' => array(
				'slides' => __('Display Slides created below', 'hoot-ubix-premium'),
				'posts' => __('Display Recent Posts (post featured image is used)', 'hoot-ubix-premium'),
			),
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select" data-selector="display_slides"><div class="show-on-select-block display_slides-posts hoothide">',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Number of Posts', 'hoot-ubix-premium'),
			'id'      => 'posts',
			'default' => '10',
			'type'    => 'text',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Post Category (optional)', 'hoot-ubix-premium'),
			'desc'    => __('Leave empty to display all posts.', 'hoot-ubix-premium'),
			'id'      => 'category',
			'default' => '',
			'type'    => 'select',
			'options' => array( '0' => '' ) + HybridExtend_WP_Widget::get_tax_list('category'),
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div></div>',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select show-on-slider-display-posts" data-selector="slider_type"><div class="show-on-select-block slider_type-html slider_type-image hoothide">',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __( 'Content Styling', 'hoot-ubix-premium' ),
			'id'      => 'content_bg',
			'default' => 'light-on-dark',
			'type'    => 'select',
			'options' => array(
				'dark'          => __('Dark Font', 'hoot-ubix-premium'),
				'light'         => __('Light Font', 'hoot-ubix-premium'),
				'dark-on-light' => __('Dark Font / Light Background', 'hoot-ubix-premium'),
				'light-on-dark' => __('Light Font / Dark Background', 'hoot-ubix-premium'),
			),
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div></div>',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select show-on-slider-display-posts" data-selector="slider_type"><div class="show-on-select-block slider_type-html slider_type-carousel hoothide">',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Slide Content', 'hoot-ubix-premium'),
			'desc'    => sprintf( __("If using 'Heading+Content' option, you may want to use the %1$1smore tag%2$2s in your posts", 'hoot-ubix-premium'), '<a href="http://www.wpbeginner.com/beginners-guide/how-to-properly-use-the-more-tag-in-wordpress/" target="_blank">', '</a>'),
			'id'      => "html_content_type",
			'default' => "excerpt",
			'type'    => "radio",
			'options' => array(
				'heading' => __('Heading only', 'hoot-ubix-premium'),
				'excerpt' => __('Heading + Excerpt', 'hoot-ubix-premium'),
				'content' => __('Heading + Full Content', 'hoot-ubix-premium'),
			),
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'name'    => __('Custom Excerpt Length', 'hoot-ubix-premium'),
			'desc'    => __('If you have Heading+Excerpt selected above. Leave empty for default excerpt length.', 'hoot-ubix-premium'),
			'id'      => 'excerptlength',
			// 'default' => '10',
			'type'    => 'text',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div></div>',
			'type'    => 'html',
		);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select hide-on-slider-display-posts" data-selector="slider_type"><div class="show-on-select-block slider_type-image hoothide">',
			'type'    => 'html',
		);

			$options['hoot_slider']['main_box']['options'][] = array(
				'name' => __('Image Slider', 'hoot-ubix-premium'),
				'type' => 'subheading',
			);

			$options['hoot_slider']['main_box']['options'][] = array(
				//'name' => __('Slides', 'hoot-ubix-premium'),
				'id'       => 'image_slider',
				'type'     => 'group',
				'settings' => array(
					'title'         => __( 'Image Slide', 'hoot-ubix-premium' ),
					'add_button'    => __( 'Add New Slide', 'hoot-ubix-premium' ),
					'remove_button' => __( 'Remove Slide', 'hoot-ubix-premium' ),
					'repeatable'    => true,
					'sortable'      => true,
				),
				'fields'   => array(
					array(
						'name' => __('Slide Image', 'hoot-ubix-premium'),
						'desc' => __('The main showcase image.', 'hoot-ubix-premium'),
						'id'   => 'image',
						'type' => 'upload',
					),
					array(
						'name'     => __('Slide Caption (optional)', 'hoot-ubix-premium'),
						'desc'     => __('You can use the <code>&lt;h3&gt;Lorem Ipsum Dolor&lt;/h3&gt;</code> tag to create styled heading.', 'hoot-ubix-premium'),
						'id'       => 'caption',
						'default'  => '<h3>Lorem Ipsum Dolor</h3>'."\n".'<p>This is a sample description text for the slide.</p>',
						'type'     => 'textarea',
						'settings' => array( 'rows' => 4 ),
					),
					array(
						'name'    => __( 'Caption Styling', 'hoot-ubix-premium' ),
						'id'      => 'caption_bg',
						'default' => 'light-on-dark',
						'type'    => 'select',
						'options' => array(
							'dark'          => __('Dark Font', 'hoot-ubix-premium'),
							'light'         => __('Light Font', 'hoot-ubix-premium'),
							'dark-on-light' => __('Dark Font / Light Background', 'hoot-ubix-premium'),
							'light-on-dark' => __('Light Font / Dark Background', 'hoot-ubix-premium'),
						),
					),
					array(
						'name' => __('Slide Link', 'hoot-ubix-premium'),
						'desc' => __('Leave empty if you do not want to link the slide.', 'hoot-ubix-premium'),
						'id'   => 'url',
						'type' => 'text',
					),
					array(
						'name' => __('Button Text (Optional)', 'hoot-ubix-premium'),
						'desc' => __('Leave empty if you do not want to show the button and instead link the slide image (if you have a url set in the above field)', 'hoot-ubix-premium'),
						'id'   => 'button',
						'type' => 'text',
					),
				),
			);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div><div class="show-on-select-block slider_type-html hoothide">',
			'type'    => 'html',
		);

			$options['hoot_slider']['main_box']['options'][] = array(
				'name' => __('HTML Slider', 'hoot-ubix-premium'),
				'type' => 'subheading',
			);

			$options['hoot_slider']['main_box']['options'][] = array(
				// 'name'     => __('Slides', 'hoot-ubix-premium'),
				'id'       => 'html_slider',
				'type'     => 'group',
				'settings' => array(
					'title'         => __( 'HTML Slide', 'hoot-ubix-premium' ),
					'add_button'    => __( 'Add New Slide', 'hoot-ubix-premium' ),
					'remove_button' => __( 'Remove Slide', 'hoot-ubix-premium' ),
					'repeatable'    => true,
					'sortable'      => true,
				),
				'fields'   => array(
					array(
						'name' => __('Featured Image (Right Column)', 'hoot-ubix-premium'),
						'desc' => __('Content below will be center aligned if no image is present.', 'hoot-ubix-premium'),
						'id'   => 'image',
						'type' => 'upload',
					),
					array(
						'name'     => __('Content (Left Column)', 'hoot-ubix-premium'),
						'desc'     => __('You can use the <code>&lt;h3&gt;Lorem Ipsum Dolor&lt;/h3&gt;</code> tag to create styled heading.', 'hoot-ubix-premium'),
						'id'       => 'content',
						'default'  => '<h3>Lorem Ipsum Dolor</h3>'."\n".'<p>This is a sample description text for the slide.</p>',
						'type'     => 'textarea',
						'settings' => array( 'rows' => 4 ),
					),
					array(
						'name'    => __( 'Content Styling', 'hoot-ubix-premium' ),
						'id'      => 'content_bg',
						'default' => 'light-on-dark',
						'type'    => 'select',
						'options' => array(
							'dark'          => __('Dark Font', 'hoot-ubix-premium'),
							'light'         => __('Light Font', 'hoot-ubix-premium'),
							'dark-on-light' => __('Dark Font / Light Background', 'hoot-ubix-premium'),
							'light-on-dark' => __('Light Font / Dark Background', 'hoot-ubix-premium'),
						),
					),
					array(
						'name' => __('Button Text (Optional)', 'hoot-ubix-premium'),
						'id'   => 'button',
						'type' => 'text',
					),
					array(
						'name' => __('Button URL', 'hoot-ubix-premium'),
						'desc' => __('Leave empty if you do not want to show the button.', 'hoot-ubix-premium'),
						'id'   => 'url',
						'type' => 'text',
					),
					array(
						'name' =>  __('Slide Background', 'hoot-ubix-premium'),
						'id' => 'background',
						'default' => array( 'color' => '#ffffff' ),
						'type' => 'background',
						'options' => array(
							'attachment' => false,
							'repeat' => false,
							'position' => false,
						),
					),
				),
			);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div><div class="show-on-select-block slider_type-carousel hoothide">',
			'type'    => 'html',
		);

			$options['hoot_slider']['main_box']['options'][] = array(
				'name' => __('Carousel Slider', 'hoot-ubix-premium'),
				'type' => 'subheading',
			);

			$options['hoot_slider']['main_box']['options'][] = array(
				// 'name'     => __('Slides', 'hoot-ubix-premium'),
				'id'       => 'carousel_slider',
				'type'     => 'group',
				'settings' => array(
					'title'         => __( 'Carousel Slide', 'hoot-ubix-premium' ),
					'add_button'    => __( 'Add New Slide', 'hoot-ubix-premium' ),
					'remove_button' => __( 'Remove Slide', 'hoot-ubix-premium' ),
					'repeatable'    => true,
					'sortable'      => true,
				),
				'fields'   => array(
					array(
						'name' => __('Slide Image', 'hoot-ubix-premium'),
						'desc' => __('The main showcase image.', 'hoot-ubix-premium'),
						'id'   => 'image',
						'type' => 'upload',
					),
					array(
						'name'     => __('Content', 'hoot-ubix-premium'),
						'desc'     => __('You can use the <code>&lt;h3&gt;Lorem Ipsum Dolor&lt;/h3&gt;</code> tag to create styled heading.', 'hoot-ubix-premium'),
						'id'       => 'content',
						'default'  => '<h3>Lorem Ipsum Dolor</h3>'."\n".'<p>This is a sample description text for the slide.</p>',
						'type'     => 'textarea',
						'settings' => array( 'rows' => 4 ),
					),
					array(
						'name' => __('Image Link', 'hoot-ubix-premium'),
						'desc' => __('Leave empty if you do not want to link the image.', 'hoot-ubix-premium'),
						'id'   => 'url',
						'type' => 'text',
					),
				),
			);

		$options['hoot_slider']['main_box']['options'][] = array(
			'default' => '</div>',
			'type'    => 'html',
		);



	$options['page']['main_box'] =
	$options['post']['main_box'] = array(
		'title'    => __( 'Page Options', 'hoot-ubix-premium' ),
		'context'  => 'normal',
		'priority' => 'high',
	);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name'    => __( 'Sidebar Layout', 'hoot-ubix-premium' ),
			'id'      => "sidebar_type",
			'class'   => 'sidebar_selector',
			'default' => "default",
			'type'    => "radio",
			'options' => array(
				'default' => __('Default layout as selected in Theme Options', 'hoot-ubix-premium'),
				'custom'  => __('Custom Layout for this page.', 'hoot-ubix-premium'),
			),
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select" data-selector="sidebar_selector">',
			'type'    => 'html',
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name'    => __( 'Custom Sidebar Layout for page', 'hoot-ubix-premium' ),
			'id'      => "sidebar",
			'class'   => 'show-on-select-block sidebar_selector-custom hoothide',
			'default' => "wide-right",
			'type'    => "images",
			'options' => array(
				'wide-right'         => $imagepath . 'sidebar-wide-right.png',
				'narrow-right'       => $imagepath . 'sidebar-narrow-right.png',
				'wide-left'          => $imagepath . 'sidebar-wide-left.png',
				'narrow-left'        => $imagepath . 'sidebar-narrow-left.png',
				'narrow-left-right'  => $imagepath . 'sidebar-narrow-left-right.png',
				'narrow-left-left'   => $imagepath . 'sidebar-narrow-left-left.png',
				'narrow-right-right' => $imagepath . 'sidebar-narrow-right-right.png',
				'full-width'         => $imagepath . 'sidebar-full.png',
				'none'               => $imagepath . 'sidebar-none.png',
			),
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'default' => '</div>',
			'type'    => 'html',
		);

		$options['page']['main_box']['options'][] = array(
			'name'    => __( 'Sidebar Layout', 'hoot-ubix-premium' ),
			'id'      => "home_sidebar",
			'desc'    => '<em>' . __( "This option is not available since this page is set as the 'Blog' page. Please go to <strong>'Appearance &gt; Customize &gt; Setup &amp; Layout &gt; Sidebar Layout (for Blog)'</strong> to change the layout for Blog/Archive Pages", 'hoot-ubix-premium' ) . '</em>',
			'type'    => "info",
		);

		$options['page']['main_box']['options'][] = array(
			'name'    => __( 'Sidebar Layout', 'hoot-ubix-premium' ),
			'id'      => "wooshop_sidebar",
			'desc'    => '<em>' . __( "This option is not available since this page is set as the 'Shop' page. Please go to <strong>'Appearance &gt; Customizer &gt; Woocommerce'</strong> section  to change the layout for Woocommerce Pages", 'hoot-ubix-premium' ) . '</em>',
			'type'    => "info",
		);

		// @ref1242 Doesnt work as expected when:
		// 1. when 'Blog' widget being used in one of widget areas, content area is grid-span-6/8, but sidebars are not displayed because sidebars get set to none due to 'blog' widget
		// 2. when "frontpage displays" is set to "your latest posts", this is ignored and full width is used always
		// $options['page']['main_box']['options'][] = array(
		// 	'name'    => __( 'Sidebar Layout for Front Page (This page has been set as "Front Page" in Settings &raquo; Reading)', 'hoot-ubix-premium' ),
		// 	'id'      => "frontpage_sidebar",
		// 	'desc'    => __( "<strong>Select 'No Sidebar' if you have stretched (full width) sliders enabled for FrontPage in Customizer.</strong>", 'hoot-ubix-premium' ),
		// 	'default' => "none",
		// 	'type'    => "images",
		// 	'options' => array(
		// 		'wide-right'         => $imagepath . 'sidebar-wide-right.png',
		// 		'narrow-right'       => $imagepath . 'sidebar-narrow-right.png',
		// 		'wide-left'          => $imagepath . 'sidebar-wide-left.png',
		// 		'narrow-left'        => $imagepath . 'sidebar-narrow-left.png',
		// 		'narrow-left-right'  => $imagepath . 'sidebar-narrow-left-right.png',
		// 		'narrow-left-left'   => $imagepath . 'sidebar-narrow-left-left.png',
		// 		'narrow-right-right' => $imagepath . 'sidebar-narrow-right-right.png',
		// 		// 'full-width'         => $imagepath . 'sidebar-full.png',
		// 		// 'none'               => $imagepath . 'sidebar-none.png',
		// 		'none'               => $imagepath . 'sidebar-full.png',
		// 	),
		// );

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name'    => __( 'Title Area', 'hoot-ubix-premium' ),
			'id'      => "display_loop_meta",
			'class'   => 'titlearea_selector',
			'default' => "show",
			'type'    => "radio",
			'options' => array(
				'show' => __('Display Title Area (default)', 'hoot-ubix-premium'),
				'hide' => __('Hide Title Area for this page.', 'hoot-ubix-premium'),
			),
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'default' => '<div class="show-on-select" data-selector="titlearea_selector">',
			'type'    => 'html',
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name'  => __( 'Hide Meta Info', 'hoot-ubix-premium' ),
			'desc'  => __( 'Hide Meta Info like Author, Date etc. for this page', 'hoot-ubix-premium' ),
			'id'    => "meta_hide_info",
			'class' => 'show-on-select-block titlearea_selector-show hoothide',
			'type'  => "checkbox",
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'default' => '</div>',
			'type'    => 'html',
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name'     => __( 'Custom Content before Title Area', 'hoot-ubix-premium' ),
			'id'       => "pre_title_content",
			'desc'     => __('Display some content before the title area.<br />You can add any content like images, slider shortcodes etc. to appear before the Title Area on this page.', 'hoot-ubix-premium'),
			'type'     => "textarea",
			'settings' => array( 'rows' => 3 ),
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name' => __( 'Display Content after Title Area', 'hoot-ubix-premium' ),
			'desc' => __( 'Display the above content <strong>next to the Title Area</strong>. (by default it appears <strong>fullwidth at top before title area</strong>)', 'hoot-ubix-premium' ),
			'id'   => "pre_title_content_post",
			'type' => "checkbox",
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name' => __( 'Remove Padding from Title Area Content', 'hoot-ubix-premium' ),
			'desc' => __( 'Stretch the above content area from edge to edge.<br />This is useful if you are adding content like images or sliders, and dont want any padding/margins.', 'hoot-ubix-premium' ),
			'id'   => "pre_title_content_stretch",
			'type' => "checkbox",
		);

		$options['page']['main_box']['options'][] =
		$options['post']['main_box']['options'][] = array(
			'name'     => __( 'Custom CSS', 'hoot-ubix-premium' ),
			'id'       => "page_css",
			'desc'     => __('Custom CSS for this page only', 'hoot-ubix-premium'),
			'type'     => "textarea",
			'settings' => array( 'code' => true, 'rows' => 3 ),
		);

	// Add meta options to main class options object
	$hoot_options_meta_admin->add_options( $options );

}

/* Hook into action to add options */
add_action( 'hoot_options_meta_admin_loaded', 'hoot_meta_options', 5, 1 );