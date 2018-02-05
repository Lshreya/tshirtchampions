<?php
/**
 * Contact Info Widget
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/**
* Class Hoot_Contact_Info_Widget
*/
class Hoot_Contact_Info_Widget extends HybridExtend_WP_Widget {

	function __construct() {

		$settings['id'] = 'hoot-contact-info-widget';
		$settings['name'] = __( 'Hoot > Contact Info', 'hoot-ubix-premium' );
		$settings['widget_options'] = array(
			'description'	=> __('Display Contact Information', 'hoot-ubix-premium'),
			// 'classname'		=> 'hoot-contact-info-widget', // CSS class applied to frontend widget container via 'before_widget' arg
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
				'name'		=> __( 'Address', 'hoot-ubix-premium' ),
				'id'		=> 'address',
				'type'		=> 'textarea',
				'settings'	=> array( 'rows' => 3 ),
			),
			array(
				'name'		=> __( 'Phone', 'hoot-ubix-premium' ),
				'id'		=> 'phone',
				'type'		=> 'text',
			),
			array(
				'name'		=> __( 'Email', 'hoot-ubix-premium' ),
				'id'		=> 'email',
				'type'		=> 'text',
				'sanitize'	=> 'email',
			),
			array(
				'name'		=> __( 'Misc', 'hoot-ubix-premium' ),
				'id'		=> 'profiles',
				'type'		=> 'group',
				'options'	=> array(
					'item_name'	=> __( 'Contact Link', 'hoot-ubix-premium' ),
				),
				'fields'	=> array(
					array(
						'name'		=> __( 'Profile', 'hoot-ubix-premium' ),
						'id'		=> 'icon',
						'type'		=> 'select',
						'options'	=> hybridextend_enum_social_profiles(),
					),
					array(
						'name'		=> __( 'Display Text', 'hoot-ubix-premium' ),
						'id'		=> 'text',
						'type'		=> 'text',
					),
					array(
						'name'		=> __( 'URL (enter username for Skype, email address for Email)', 'hoot-ubix-premium' ),
						'id'		=> 'url',
						'std'		=> 'http://',
						'type'		=> 'text',
						'sanitize'	=> 'contact_info_sanitize_url',
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

		$settings = apply_filters( 'hoot_contact_info_widget_settings', $settings );

		parent::__construct( $settings['id'], $settings['name'], $settings['widget_options'], $settings['control_options'], $settings['form_options'] );

	}

	/**
	 * Echo the widget content
	 */
	function display_widget( $instance, $before_title = '', $title='', $after_title = '' ) {
		extract( $instance, EXTR_SKIP );
		include( hybridextend_locate_widget( 'contact-info' ) ); // Loads the widget/contact-info or template-parts/widget-contact-info.php template.
	}

}

/**
 * Register Widget
 */
function hoot_contact_info_widget_register(){
	register_widget('Hoot_Contact_Info_Widget');
}
add_action('widgets_init', 'hoot_contact_info_widget_register');

/**
 * Custom Sanitization Function
 */
function hoot_contact_info_sanitize_url( $value, $name, $instance ){
	if ( $name == 'contact_info_sanitize_url' ) {
		if ( !empty( $instance['icon'] ) && $instance['icon'] == 'fa-skype' )
			$new = sanitize_user( $value, true );
		elseif ( !empty( $instance['icon'] ) && $instance['icon'] == 'fa-envelope' )
			$new = is_email( $value );
		else
			$new = esc_url_raw( $value );
		return $new;
	}
	return $value;
}
add_filter('widget_admin_sanitize_field', 'hoot_contact_info_sanitize_url', 10, 3);