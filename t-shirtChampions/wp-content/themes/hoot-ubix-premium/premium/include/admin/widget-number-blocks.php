<?php
/**
 * Number Blocks Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_Number_Blocks_Widget
*/
class Hoot_Number_Blocks_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-number-blocks-widget';
		$settings['name'] = __( 'Hoot > Number Blocks', 'hoot-ubix-premium' );
		$settings['widget_options'] = array(
			'description'	=> __('Display Styled Number Blocks', 'hoot-ubix-premium'),
			// 'classname'		=> 'hoot-number-blocks-widget', // CSS class applied to frontend widget container via 'before_widget' arg
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
				'name'		=> __( 'Number Boxes', 'hoot-ubix-premium' ),
				'id'		=> 'boxes',
				'type'		=> 'group',
				'options'	=> array(
					'item_name'	=> __( 'Number Box', 'hoot-ubix-premium' ),
				),
				'fields'	=> array(
					array(
						'name'		=> __( 'Circle percentage', 'hoot-ubix-premium' ),
						'desc'		=> __( 'A number between 0-100 used to calculate the circle length around the number', 'hoot-ubix-premium' ),
						'id'		=> 'percent',
						'type'		=> 'text',
						'std'		=> '75',
						'sanitize'	=> 'integer',
					),
					array(
						'name'		=> __( 'Display Number', 'hoot-ubix-premium' ),
						'desc'		=> __( 'Leave empty to use above percentage (a % sign will be automatically added)', 'hoot-ubix-premium' ),
						'id'		=> 'number',
						'type'		=> 'text',
						'std'		=> '75',
						'sanitize'	=> 'integer',
					),
					array(
						'name'		=> __( 'Color', 'hoot-ubix-premium' ),
						'id'		=> 'color',
						'type'		=> 'color',
						'std'		=> '#e7ac44',
					),
					array(
						'name'		=> __( 'Text', 'hoot-ubix-premium' ),
						'id'		=> 'content',
						'type'		=> 'textarea',
					),
					array(
						'name'		=> '<span style="font-size:12px;"><em>' . __('Use &lt;h4&gt; tag for headlines. Example', 'hoot-ubix-premium') . '</em></span>',
						'id'		=> 'content_desc',
						'type'		=> '<br><code style="font-size: 11px;">' . __( '&lt;h4&gt;Skill/Feature Title&lt;/h4&gt;<br>Some description about this feature..<br>&lt;a href="http://example.com"&gt;Link Text&lt;/a&gt;', 'hoot-ubix-premium' ) . '</code>',
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

		$settings = apply_filters( 'hoot_number_blocks_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'number-blocks' ) ); // Loads the widget/number-blocks or template-parts/widget-number-blocks.php template.
	}

}

/**
 * Register Widget
 */
function hoot_number_blocks_widget_register(){
	register_widget('Hoot_Number_Blocks_Widget');
}
add_action('widgets_init', 'hoot_number_blocks_widget_register');