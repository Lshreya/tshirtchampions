<?php
/**
 * Build Megamenu Options
 *
 * @package    Hoot
 * @subpackage framework
 */

/**
 * Defines an array of megamenu options that will be used to generate the megamenu.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * Child themes can modify the megamenu options array using the 'hybridextend_megamenu_options' filter hook.
 *
 * @since 1.0
 * @param object $hybridextend_megamenu
 * @return void
 */
function hoot_megamenu_options( $hybridextend_megamenu ) {

	$options = array();

	/* Add supported options */
	// Keys must be small caps with no spaces (used as css ids, and as meta key stored in database)
	if ( hybridextend_theme_supports( 'hybridextend-megamenu', 'menuitem_icon' ) ) {
		$options[ 'hoot_icon' ] = array(
			'name' => __('Icon', 'hoot-ubix-premium'),
			'type' => 'icon',
			//'top_level' => true,
			);
	}

	// Add megamenu options to main class options object
	$hybridextend_megamenu->add_options( $options );

}

/* Hook into action to add options */
add_action( 'hybridextend_megamenu_loaded', 'hoot_megamenu_options', 5 );

/**
 * Display code for megamenu icon
 *
 * @since 1.0
 * @return string
 */
function hoot_megamenu_displayicon( $html, $hybridextend_megamenu_item, $item, $depth ) {

	if ( isset( $hybridextend_megamenu_item[ 'hoot_icon' ] ) ) { // Check if icons are supported by the theme
		if ( !empty( $hybridextend_megamenu_item[ 'hoot_icon' ] ) ) {
			if ( !isset( $hybridextend_megamenu_item[ 'hoot_menuitem_icon' ] ) || 0 === $depth ) { // If not toplevel, or if it is toplevel then check if depth is 0
				$html .= '<i class="hybridextend-megamenu-icon fa ' . sanitize_html_class( $hybridextend_megamenu_item[ 'hoot_icon' ] ) . '"></i> ';
			}
		}
	}

	return $html;

}

/* Hook into filter to display menuicon */
add_filter( 'hybridextend_megamenu_displayitem', 'hoot_megamenu_displayicon', 10, 4 );