<?php
/*
Plugin Name: Vidme
Plugin URI:  https://wordpress.org/plugins/vidme/
Description: Embed videos from vid.me into your WordPress site
Version:     1.2
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: vidme
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Register embed handler
 */
function vidme_embed_handler( $matches, $attr, $url, $rawattr ) {

	// Generate embed code
	$embed = sprintf(
		'<iframe src="https://vid.me/e/%1$s" width="480" height="360" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>',
		esc_attr( $matches[1] )
	);

	// Return embed code
	return apply_filters( 'embed_vidme', $embed, $matches, $attr, $url, $rawattr );

}

function vidme_embed() {

	// Register embed handler
	wp_embed_register_handler(
		'vidme',
		'#https?://vid.me/(.*)#i',
		'vidme_embed_handler'
	);

}

add_action( 'init', 'vidme_embed' );



/*
 * Register Shortcode
 */
function vidme_shortcode( $atts ) {

	// Set default values
	$atts = shortcode_atts(
		array(
			'id'       => '',
			'width'    => '640',
			'height'   => '360',
			'autoplay' => '0',
			'repeat'   => '0',
			'mute'     => '0'
		), $atts );

	// Generate custom embed code
	$embed = '<iframe src="https://vid.me/e/' . esc_attr( $atts['id'] ) . '?autoplay=' . esc_attr( $atts['autoplay'] ) . '&amp;loop=' . esc_attr( $atts['repeat'] ) . '&amp;muted=' . esc_attr( $atts['mute'] ) . '" width="' . esc_attr( $atts['width'] ) . '" height="' . esc_attr( $atts['height'] ) . '" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';

	// Return embed code
	return $embed;

}

add_shortcode( 'vidme', 'vidme_shortcode' );
