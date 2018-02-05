<?php
/**
 * Vcards Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_Vcards_Widget
*/
class Hoot_Vcards_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-vcards-widget';
		$settings['name'] = __( 'Hoot > Vcards', 'hoot-ubix-premium' );
		$settings['widget_options'] = array(
			'description'	=> __('Display ID Cards for Testimonials, Teams etc.', 'hoot-ubix-premium'),
			// 'classname'		=> 'hoot-vcards-widget', // CSS class applied to frontend widget container via 'before_widget' arg
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
				'name'		=> __( 'Vcards', 'hoot-ubix-premium' ),
				'id'		=> 'vcards',
				'type'		=> 'group',
				'options'	=> array(
					'item_name'	=> __( 'Vcard', 'hoot-ubix-premium' ),
				),
				'fields'	=> array(
					array(
						'name'		=> __('Image', 'hoot-ubix-premium'),
						'id'		=> 'image',
						'type'		=> 'image',
					),
					array(
						'name'		=> __('Text', 'hoot-ubix-premium'),
						'id'		=> 'content',
						'type'		=> 'textarea',
					),
					array(
						'name'		=> '<span style="font-size:12px;"><em>' . __('Use &lt;h4&gt; tag for headlines. Example', 'hoot-ubix-premium') . '</em></span>',
						'id'		=> 'content_desc',
						'type'		=> '<code style="font-size: 11px;">' . __( '&lt;h4&gt;John Doe&lt;/h4&gt;<br>&lt;cite&gt;Designation Subtext&lt;/cite&gt;<br>Some description about John..<br>&lt;a href="http://url.com"&gt;Website&lt;/a&gt;', 'hoot-ubix-premium' ) . '</code>',
					),
					array(
						'name'		=> __( 'Social Icon 1', 'hoot-ubix-premium' ),
						'id'		=> 'icon1',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'URL 1', 'hoot-ubix-premium' ),
						'id'		=> 'url1',
						'type'		=> 'text',
						'sanitize'	=> 'vcard_links_sanitize_url',
					),
					array(
						'name'		=> __( 'Social Icon 2', 'hoot-ubix-premium' ),
						'id'		=> 'icon2',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'URL 2', 'hoot-ubix-premium' ),
						'id'		=> 'url2',
						'type'		=> 'text',
						'sanitize'	=> 'vcard_links_sanitize_url',
					),
					array(
						'name'		=> __( 'Social Icon 3', 'hoot-ubix-premium' ),
						'id'		=> 'icon3',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'URL 3', 'hoot-ubix-premium' ),
						'id'		=> 'url3',
						'type'		=> 'text',
						'sanitize'	=> 'vcard_links_sanitize_url',
					),
					array(
						'name'		=> __( 'Social Icon 4', 'hoot-ubix-premium' ),
						'id'		=> 'icon4',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'URL 4', 'hoot-ubix-premium' ),
						'id'		=> 'url4',
						'type'		=> 'text',
						'sanitize'	=> 'vcard_links_sanitize_url',
					),
					array(
						'name'		=> __( 'Social Icon 5', 'hoot-ubix-premium' ),
						'id'		=> 'icon5',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'URL 5', 'hoot-ubix-premium' ),
						'id'		=> 'url5',
						'type'		=> 'text',
						'sanitize'	=> 'vcard_links_sanitize_url',
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

		$settings = apply_filters( 'hoot_vcards_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'vcards' ) ); // Loads the widget/vcards or template-parts/widget-vcards.php template.
	}

}

/**
 * Register Widget
 */
function hoot_vcards_widget_register(){
	register_widget('Hoot_Vcards_Widget');
}
add_action('widgets_init', 'hoot_vcards_widget_register');

/**
 * Custom Sanitization Function
 */
function hoot_vcards_sanitize_url( $value, $name, $instance ){
	if ( $name == 'vcard_links_sanitize_url' ) {

		$key = array_search( $value, $instance );
		if ( !$key ) return false;
		$key = substr( $key, -1 );

		if ( !empty( $instance["icon{$key}"] ) && $instance["icon{$key}"] == 'fa-skype' )
			$new = sanitize_user( $value, true );
		elseif ( !empty( $instance["icon{$key}"] ) && $instance["icon{$key}"] == 'fa-envelope' )
			$new = is_email( $value );
		else
			$new = esc_url_raw( $value );

		return $new;
	}
	return $value;
}
add_filter('widget_admin_sanitize_field', 'hoot_vcards_sanitize_url', 10, 3);