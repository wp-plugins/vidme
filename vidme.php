<?php
/*
Plugin Name: Vidme
Plugin URI:  https://wordpress.org/plugins/vidme/
Description: Embed videos from vid.me into your WordPress site
Version:     1.1
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

	$embed = sprintf(
		'<iframe src="https://vid.me/e/%1$s" width="480" height="360" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>',
		esc_attr( $matches[1] )
	);

	return apply_filters( 'embed_vidme', $embed, $matches, $attr, $url, $rawattr );

}

function vidme_embed() {

	wp_embed_register_handler(
		'vidme',
		'#https://vid.me/(.*)#i',
		'vidme_embed_handler'
	);

}

add_action( 'init', 'vidme_embed' );



/*
 * Register Shortcode
 */
function vidme_shortcode( $atts ) {

	extract( shortcode_atts(
		array(
			'id'       => '',
			'width'    => '640',
			'height'   => '360',
			'autoplay' => '0',
			'repeat'   => '0',
			'mute'     => '0'
		), $atts )
	);

	return '<iframe src="https://vid.me/e/' . $id . '?autoplay=' . $autoplay . '&amp;loop=' . $repeat . '&amp;muted=' . $mute . '" width="' . $width . '" height="' . $height . '" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';

}

add_shortcode( 'vidme', 'vidme_shortcode' );
