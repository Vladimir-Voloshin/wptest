<?php
/**
 * @package wptest
 */
/*
Plugin Name: wptest
Description: wptest
Version: 3.2
Author: Vladimir Voloshin
License: GPLv2 or later
Text Domain: wptest
*/

// Make sure we don't expose any info if called directly
defined( 'ABSPATH' ) or die( 'Hi there!  I\'m just a plugin, not much I can do when called directly.' );

/**
 * Echos plugin form.
 *
 * @return void
 */
function html_form_code() {
	echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
	echo '<p>';
	echo 'Number A <br />';
	echo '<input id="wp-number-a" type="text" name="wp-number-a" pattern="[0-9 ]+" required="required" value="' . ( isset( $_POST["wp-number-a"] ) ? esc_attr( $_POST["wp-number-a"] ) : '' ) . '" size="40" />';
	echo '</p>';
	echo '<p>';
	echo 'Number B <br />';
	echo '<input id="wp-number-b" type="text" name="wp-number-b" pattern="[0-9 ]+" required="required" value="' . ( isset( $_POST["wp-number-b"] ) ? esc_attr( $_POST["wp-number-b"] ) : '' ) . '" size="40" />';
	echo '</p>';
	echo '<p><input type="submit" name="wp-submitted" value="Send"/></p>';
	echo '</form>';
	echo '<p>Result: <span class="wp-result"></span> </p>';
}

/**
 * Calls all plugin's methods.
 *
 * @return html
 */
function wp_shortcode() {
	ob_start();
	html_form_code();
	return ob_get_clean();
}

/**
 * loads custom javascript
 *
 * @return void
 */
function wp_load_scripts(){
	wp_register_script( 'wptest', plugin_dir_url( __FILE__ ) . '_inc/wptest.js', array('jquery') );
	wp_enqueue_script( 'wptest', plugin_dir_url( __FILE__ ) . '_inc/wptest.js', array('jquery') );
}

add_action('wp_enqueue_scripts', 'wp_load_scripts');
add_shortcode( 'sitepoint_contact_form', 'wp_shortcode' );