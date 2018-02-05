<?php
/**
 * General Variables available: $name, $params, $args, $content
 * $args has been 'extract'ed
 */

$clearfix = ( !empty( $last ) && ( 'yes' == $last || 'on' == $last || 'true' == $last || true === $last ) ) ? '<div class="clearfix"></div>' : '';

return '<div class="column-3-5 shortcode-column">' . do_shortcode( $content ) . '</div>' . $clearfix;