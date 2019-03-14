<?php 
/**
 * Plugin Name: Easy table content helper
 * Description: Helper plugin to extend easy table content plugin functionality. It shows table content in horizontal manner as a secondary menu.
 * Author: 1naveengiri
 * Author URI: https://buddydevelopers.com
 * Version: 0.1
 */


/**
 * Function to add content before the page content
 */
function buddy_add_horizonal_table_content(){
	echo do_shortcode('[ez-toc]');
}
add_action('generate_after_header', 'buddy_add_horizonal_table_content' );


/**
 * Function to add custom style file for new horizontal list
 */
function buddy_enqueue_load_nye() {
	wp_enqueue_style( 'load-etc-helper', plugins_url( 'buddy-style.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'buddy_enqueue_load_nye' );
