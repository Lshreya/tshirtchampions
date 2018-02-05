<?php
/**
 * Post List Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_Post_List_Widget
*/
class Hoot_Post_List_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-post-list-widget';
		$settings['name'] = __( 'Hoot > Post List', 'hoot-ubix-premium' );
		$settings['widget_options'] = array(
			'description'	=> __('Display Blog Post List (all or specific category).', 'hoot-ubix-premium'),
			// 'classname'		=> 'hoot-post-list-widget', // CSS class applied to frontend widget container via 'before_widget' arg
		);
		$settings['control_options'] = array();
		$settings['form_options'] = array(
			//'name' => can be empty or false to hide the name
			array(
				'name'		=> __( 'Title', 'hoot-ubix-premium' ),
				'id'		=> 'title',
				'type'		=> 'text',
			),
			array(
				'name'		=> __( 'Category', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Leave empty to display from all categories.', 'hoot-ubix-premium' ),
				'id'		=> 'category',
				'type'		=> 'select',
				'options'	=> array( '0' => '' ) + HybridExtend_WP_Widget::get_tax_list('category') ,
			),
			array(
				'name'		=> __( 'Number of Posts to show', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Default: 3', 'hoot-ubix-premium' ),
				'id'		=> 'count',
				'type'		=> 'text',
				'sanitize'	=> 'absint',
			),
			array(
				'name'		=> __( 'Hide Thumbnails', 'hoot-ubix-premium' ),
				'id'		=> 'hide_thumbnails',
				'type'		=> 'checkbox',
			),
			array(
				'name'		=> __( 'Hide Post Date', 'hoot-ubix-premium' ),
				'id'		=> 'hide_date',
				'type'		=> 'checkbox',
			),
			array(
				'name'		=> __( 'Hide number of comments', 'hoot-ubix-premium' ),
				'id'		=> 'hide_comments',
				'type'		=> 'checkbox',
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

		$settings = apply_filters( 'hoot_post_list_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'post-list' ) ); // Loads the widget/post-list or template-parts/widget-post-list.php template.
	}

}

/**
 * Register Widget
 */
function hoot_post_list_widget_register(){
	register_widget('Hoot_Post_List_Widget');
}
add_action('widgets_init', 'hoot_post_list_widget_register');