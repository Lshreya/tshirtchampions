<?php
/**
 * Call To Action Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_CTA_Widget
*/
class Hoot_CTA_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-cta-widget';
		$settings['name'] = __( 'Hoot > Call To Action', 'hoot-ubix-premium' );
		$settings['widget_options'] = array(
			'description'	=> __('Display Call To Action block.', 'hoot-ubix-premium'),
			// 'classname'		=> 'hoot-cta-widget', // CSS class applied to frontend widget container via 'before_widget' arg
		);
		$settings['control_options'] = array();
		$settings['form_options'] = array(
			//'name' => can be empty or false to hide the name
			array(
				'name'		=> __( 'Headline', 'hoot-ubix-premium' ),
				'id'		=> 'headline',
				'type'		=> 'text',
			),
			array(
				'name'		=> __( 'Description', 'hoot-ubix-premium' ),
				'id'		=> 'description',
				'type'		=> 'text',
			),
			array(
				'name'		=> __( 'Button Text', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Leave empty if you dont want to show button', 'hoot-ubix-premium' ),
				'id'		=> 'button_text',
				'type'		=> 'text',
				'std'		=> __( 'KNOW MORE', 'hoot-ubix-premium' ),
			),
			array(
				'name'		=> __( 'URL', 'hoot-ubix-premium' ),
				'desc'		=> __( 'Leave empty if you dont want to show button', 'hoot-ubix-premium' ),
				'id'		=> 'url',
				'type'		=> 'text',
				'sanitize'	=> 'url',
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

		$settings = apply_filters( 'hoot_cta_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'cta' ) ); // Loads the widget/cta or template-parts/widget-cta.php template.
	}

}

/**
 * Register Widget
 */
function hoot_cta_widget_register(){
	register_widget('Hoot_CTA_Widget');
}
add_action('widgets_init', 'hoot_cta_widget_register');