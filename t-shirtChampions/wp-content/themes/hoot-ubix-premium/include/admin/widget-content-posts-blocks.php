<?php
/**
 * Content Posts Blocks Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_Content_Posts_Blocks_Widget
*/
class Hoot_Content_Posts_Blocks_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-posts-blocks-widget';
		$settings['name'] = __( 'Hoot > Content Blocks (Posts)', 'hoot-ubix-premium' );
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
					// 'style3'	=> HYBRIDEXTEND_INCURI . 'admin/images/content-block-style-3.png',
					'style4'	=> HYBRIDEXTEND_INCURI . 'admin/images/content-block-style-4.png',
				),
			),
			array(
				'name'		=> __( 'Category (Optional)', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Leave empty to display from all categories.', 'hoot-ubix-premium' ),
				'id'		=> 'category',
				'type'		=> 'select',
				'options'	=> array( '0' => '' ) + HybridExtend_WP_Widget::get_tax_list('category') ,
			),
			array(
				'name'		=> __( 'Number of Posts to show', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Default: 4', 'hoot-ubix-premium' ),
				'id'		=> 'count',
				'type'		=> 'text',
				'sanitize'	=> 'absint',
			),
			array(
				'name'		=> __( 'Display full content instead of excerpt', 'hoot-ubix-premium' ),
				'id'		=> 'fullcontent',
				'type'		=> 'checkbox',
			),
			array(
				'name'		=> __( 'Show Post Date', 'hoot-ubix-premium' ),
				'id'		=> 'show_date',
				'type'		=> 'checkbox',
			),
			array(
				'name'		=> __( 'Show number of comments', 'hoot-ubix-premium' ),
				'id'		=> 'show_comments',
				'type'		=> 'checkbox',
			),
			array(
				'name'		=> __( 'Show categories', 'hoot-ubix-premium' ),
				'id'		=> 'show_cats',
				'type'		=> 'checkbox',
			),
			array(
				'name'		=> __( 'Show tags', 'hoot-ubix-premium' ),
				'id'		=> 'show_tags',
				'type'		=> 'checkbox',
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

		$settings = apply_filters( 'hoot_content_posts_blocks_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'content-posts-blocks' ) ); // Loads the widget/content-posts-blocks or template-parts/widget-content-posts-blocks.php template.
	}

}

/**
 * Register Widget
 */
function hoot_content_posts_blocks_widget_register(){
	register_widget('Hoot_Content_Posts_Blocks_Widget');
}
add_action('widgets_init', 'hoot_content_posts_blocks_widget_register');