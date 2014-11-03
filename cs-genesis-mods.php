<?php
/*
Plugin Name: CS Genesis Mods
Plugin URI: https://github.com/ClearSkyPDX/CS-genesis-mods/
Description: Add additional customizations to Genesis Theme.
Version: 1.9.1
Author: Bradford Knowlton
Author URI: http://bradknowlton.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: CS-genesis-mods
GitHub Plugin URI: https://github.com/ClearSkyPDX/CS-genesis-mods
GitHub Branch: clearskypdx.com
*/

function CS_after_setup_theme() {
	remove_action( 'genesis_header', 'genesis_do_header' );
	// add_action( 'genesis_header', 'genesis_do_new_header' );
	remove_action( 'genesis_after_header', 'beautiful_site_header_banner' );
	add_action( 'genesis_after_header', 'clearsky_site_header_banner' );
	add_action('wp_head','hook_css');
}
add_action( 'after_setup_theme', 'CS_after_setup_theme' );

function clearsky_site_header_banner() {

	if ( ! get_background_image() )
		return;
	add_action( 'genesis_header', 'genesis_do_header' );
	echo '<div class="site-header-banner">';
	do_action( 'genesis_header');
	echo '</div>';

}


function hook_css()
{
	$output="<style>.header-full-width.header-image .site-title a {background-position: right center !important;}</style>";
	echo $output;
}