<?php
/**
 * Content Blocks Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_Content_Blocks_Widget
*/
class Hoot_Content_Blocks_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-content-blocks-widget';
		$settings['name'] = __( 'Hoot > Content Blocks (Pages)', 'hoot-ubix-premium' );
		$settings['widget_options'] = array(
			'description'	=> __('Display Styled Content Blocks.', 'hoot-ubix-premium'),
			// 'classname'		=> 'hoot-content-blocks-widget', // CSS class applied to frontend widget container via 'before_widget' arg
		);
		$settings['control_options'] = array();
		$settings['form_options'] = array(
			//'name' => can be empty or false to hide the name
			array(
				'name'		=> __( "Title (optional)", 'hoot-ubix-premium' ),
				'id'		=> 'title',
				'type'		=> 'text',
			),
			array(
				'name'		=> __( 'Blocks Style', 'hoot-ubix-premium' ),
				'id'		=> 'style',
				'type'		=> 'images',
				'std'		=> 'style1',
				'options'	=> array(
					'style1'	=> HYBRIDEXTEND_INCURI . 'admin/images/content-block-style-1.png',
					'style2'	=> HYBRIDEXTEND_INCURI . 'admin/images/content-block-style-2.png',
					'style3'	=> HYBRIDEXTEND_INCURI . 'admin/images/content-block-style-3.png',
					'style4'	=> HYBRIDEXTEND_INCURI . 'admin/images/content-block-style-4.png',
				),
			),
			array(
				'name'		=> __( 'No. Of Columns', 'hoot-ubix-premium' ),
				'id'		=> 'columns',
				'type'		=> 'select',
				'std'		=> '4',
				'options'	=> array(
					'1'	=> __( '1', 'hoot-ubix-premium' ),
					'2'	=> __( '2', 'hoot-ubix-premium' ),
					'3'	=> __( '3', 'hoot-ubix-premium' ),
					'4'	=> __( '4', 'hoot-ubix-premium' ),
					'5'	=> __( '5', 'hoot-ubix-premium' ),
				),
			),
			array(
				'name'		=> __( 'Border', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Top and bottom borders.', 'hoot-ubix-premium' ),
				'id'		=> 'border',
				'type'		=> 'select',
				'std'		=> 'none none',
				'options'	=> array(
					'line line'		=> __( 'Top - Line || Bottom - Line', 'hoot-ubix-premium' ),
					'line shadow'	=> __( 'Top - Line || Bottom - DoubleLine', 'hoot-ubix-premium' ),
					'line none'		=> __( 'Top - Line || Bottom - None', 'hoot-ubix-premium' ),
					'shadow line'	=> __( 'Top - DoubleLine || Bottom - Line', 'hoot-ubix-premium' ),
					'shadow shadow'	=> __( 'Top - DoubleLine || Bottom - DoubleLine', 'hoot-ubix-premium' ),
					'shadow none'	=> __( 'Top - DoubleLine || Bottom - None', 'hoot-ubix-premium' ),
					'none line'		=> __( 'Top - None || Bottom - Line', 'hoot-ubix-premium' ),
					'none shadow'	=> __( 'Top - None || Bottom - DoubleLine', 'hoot-ubix-premium' ),
					'none none'		=> __( 'Top - None || Bottom - None', 'hoot-ubix-premium' ),
				),
			),
			array(
				'name'		=> __( 'Content Boxes', 'hoot-ubix-premium' ),
				'id'		=> 'boxes',
				'type'		=> 'group',
				'options'	=> array(
					'item_name'	=> __( 'Content Box', 'hoot-ubix-premium' ),
				),
				'fields'	=> array(
					array(
						'name'		=> __( 'Title/Content/Image', 'hoot-ubix-premium' ),
						'desc'		=> __( 'Page Title, Content and Featured Image will be used.', 'hoot-ubix-premium' ),
						'id'		=> 'page',
						'type'		=> 'select',
						'options'	=> Hybridextend_WP_Widget::get_wp_list('page'),
					),
					array(
						'name'		=> __( 'Sub Heading (optional)', 'hoot-ubix-premium' ),
						'id'		=> 'subtitle',
						'type'		=> 'text',
					),
					array(
						'name'		=> __('Display excerpt instead of full content', 'hoot-ubix-premium'),
						'desc'		=> __( 'In excerpts, "Read More" link will be automatically inserted if no custom link is provided below.', 'hoot-ubix-premium' ),
						'id'		=> 'excerpt',
						'type'		=> 'checkbox'),
					array(
						'name'		=> __('Link Text (optional)', 'hoot-ubix-premium'),
						'id'		=> 'link',
						'type'		=> 'text'),
					array(
						'name'		=> __('Link URL', 'hoot-ubix-premium'),
						'id'		=> 'url',
						'std'		=> 'http://',
						'type'		=> 'text',
						'sanitize'	=> 'url'),
					array(
						'name'		=> __('Icon', 'hoot-ubix-premium'),
						'desc'		=> __( 'Use an icon instead of featured image of the page selected above.', 'hoot-ubix-premium' ),
						'id'		=> 'icon',
						'type'		=> 'icon',
					),
					array(
						'name'		=> __( 'Icon Style', 'hoot-ubix-premium' ),
						'id'		=> 'icon_style',
						'type'		=> 'select',
						'std'		=> 'circle',
						'options'	=> array(
							'none'		=> __( 'None', 'hoot-ubix-premium' ),
							'circle'	=> __( 'Circle', 'hoot-ubix-premium' ),
							'square'	=> __( 'Square', 'hoot-ubix-premium' ),
						),
					),
				),
			),
			array(
				'name'		=> __( 'CSS', 'hoot-ubix-premium' ),
				'id'		=> 'customcss',
				'type'		=> 'collapse',
				'fields'	=> array(
					array(
						'name'		=> __( 'Custom CSS Class', 'hoot-ubix-premium' ),
						'desc'		=> __( 'Give this widget a custom css classname', 'hoot-ubix-premium' ),
						'id'		=> 'class',
						'type'		=> 'text',
					),
					array(
						'name'		=> __( 'Margin Top', 'hoot-ubix-premium' ),
						'desc'		=> __( '(in pixels) Leave empty to load default margins', 'hoot-ubix-premium' ),
						'id'		=> 'mt',
						'type'		=> 'text',
						'settings'	=> array( 'size' => 3 ),
						'sanitize'	=> 'absint',
					),
					array(
						'name'		=> __( 'Margin Bottom', 'hoot-ubix-premium' ),
						'desc'		=> __( '(in pixels) Leave empty to load default margins', 'hoot-ubix-premium' ),
						'id'		=> 'mb',
						'type'		=> 'text',
						'settings'	=> array( 'size' => 3 ),
						'sanitize'	=> 'absint',
					),
				),
			),
		);

		$settings = apply_filters( 'hoot_content_blocks_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'content-blocks' ) ); // Loads the widget/content-blocks or template-parts/widget-content-blocks.php template.
	}

}

/**
 * Register Widget
 */
function hoot_content_blocks_widget_register(){
	register_widget('Hoot_Content_Blocks_Widget');
}
add_action('widgets_init', 'hoot_content_blocks_widget_register');