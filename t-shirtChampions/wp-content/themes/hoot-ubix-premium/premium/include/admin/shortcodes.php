<?php
/**
 * Theme Shortcodes
 * Hook into framework's core shortcodes and add/disable available shortcodes for this theme.
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/* Modify shortcode styles */
add_filter( 'hoot_shortcode_styles', 'hoot_theme_shortcodes_styles' );

/**
 * Add Theme Styles to shortcode styles
 *
 * @since 1.0
 * @access public
 * @param array $styles.
 * @return array
 */
function hoot_theme_shortcodes_styles( $styles ) {
	$theme_styles = array(
						'accent'  => __('Theme Accent Color', 'hoot-ubix-premium'),
					);
	return hybridextend_array_insert( $theme_styles, $styles, 1 );
}