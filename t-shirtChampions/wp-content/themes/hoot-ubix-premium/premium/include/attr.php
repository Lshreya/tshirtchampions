<?php
/**
 * HTML attribute filters.
 * Most of these functions filter the generic values from the framework found in hybrid/inc/functions-attr.php
 * Attributes for non-generic structural elements (mostly theme specific) can be loaded in this file.
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 */

/* Add Filters */
add_filter( 'hybrid_attr_loop-meta-wrap', 'hoot_theme_premium_attr_loop_meta_wrap', 9 );

/* Misc Filters */
add_filter( 'hybrid_attr_vcard-img', 'hoot_theme_attr_vcard_img' );

/**
 * Loop meta attributes.
 *
 * @since 1.0
 * @param array $attr
 * @return array
 */
function hoot_theme_premium_attr_loop_meta_wrap( $attr ) {
	$attr['id'] = 'loop-meta';
	// $attr['class'] = ( empty( $attr['class'] ) ) ? '' : $attr['class'];

	/* Overwrite free versions default class pageheader-bg-default */
	$background = hoot_get_mod( 'pageheader_background_location' );
	if ( empty( $background ) )
		$background = 'stretch';
	$attr['class'] = " loop-meta-wrap pageheader-bg-{$background}";

	return $attr;
}

/**
 * vcard Image
 *
 * @since 1.0
 * @access public
 * @param array $attr
 * @return array
 */
function hoot_theme_attr_vcard_img( $attr ) {
	// $attr['class'] = ( empty( $attr['class'] ) ) ? '' : $attr['class'];
	$attr['alt'] = __( 'vCard Image', 'hoot-ubix-premium' );
	$attr['itemprop'] = 'image';
	return $attr;
}