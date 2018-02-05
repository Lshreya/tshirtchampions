<?php
/**
 * General Variables available: $name, $params, $args, $content
 * $args has been 'extract'ed
 */

$clearfix = ( !empty( $last ) && ( 'yes' == $last || 'on' == $last || 'true' == $last || true === $last ) ) ? '<div class="clearfix"></div>' : '';

return '<div class="column-2-3 shortcode-column">' . do_shortcode( $content ) . '</div>' . $clearfix;