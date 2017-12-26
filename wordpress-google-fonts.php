<?php
/**
 * @package Wordpress Google Fonts
 * @version 1.0
 * @link              https://springsdigital.com
 * @since             1.0
 */

/**
 * Plugin Name: Google Fonts
 * Author: Springs Digital
 * Version: 1.0
 * Description: A handy little plugin to manage Google Fonts in a more efficient way
 * Author URI: https://springsdigital.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wordpress-google-fonts
 *
 */

function remove_storefront_google_fonts(){wp_dequeue_style('storefront-fonts');}
add_action( 'wp_enqueue_scripts', 'remove_storefront_google_fonts', 999);

function google_fonts(){
wp_enqueue_style( 'GoogleFonts', plugins_url('/wordpress-google-fonts.css', __FILE__), false, '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'google_fonts');