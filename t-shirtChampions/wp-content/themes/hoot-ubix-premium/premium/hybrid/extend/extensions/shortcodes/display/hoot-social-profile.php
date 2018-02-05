<?php
/**
 * General Variables available: $name, $params, $args, $content
 * $args has been 'extract'ed
 */

if ( empty( $icon ) ) return '';
if ( 'vimeo' == $icon || 'fa-vimeo' == $icon ) $icon = 'fa-vimeo-square';
// Backward compatibility
if ( strpos( $icon, 'fa-' ) !== 0 )
	$icon = 'fa-' . $icon;

if ( empty( $size ) ) $size = 'medium';
if ( empty( $url ) ) $url = '';

$class = "shortcode-social-profile social-icons-widget social-icons-" . esc_attr( $size );
$iclass = "social-icons-icon " . esc_attr( $icon ) . "-block";

$style = '';
if ( !empty( $background ) ) $style .= " background: " . hybridext_color_santize_hex( $background ) . ";";
if ( !empty( $text ) )       $style .= " color: " . hybridext_color_santize_hex( $text ) . ";";
if ( $icon == 'fa-envelope' )
	$link = 'mailto:' . is_email( $url );
else
	$link = esc_url( $url );

return  '<span ' . hoot_sc_attr( 'class', $class ) . '>' .
			'<a href="' . $link . '" ' . hoot_sc_attr( 'class', $iclass ) . '>' .
				'<i class="fa ' . sanitize_html_class( $icon ) . '"></i>' .
			'</a>' .
		'</span>';