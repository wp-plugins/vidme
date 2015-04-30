<?php
/*
Plugin Name: Vidme
Plugin URI:  https://wordpress.org/plugins/vidme/
Description: Embed videos from vid.me into your WordPress site
Version:     1.0
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
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
		'<iframe src="https://vid.me/e/%1$s" width="480" height="360" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling="no"></iframe>',
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
