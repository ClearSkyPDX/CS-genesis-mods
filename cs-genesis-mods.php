<?php
/*
Plugin Name: CS Genesis Mods
Plugin URI: https://github.com/ClearSkyPDX/CS-genesis-mods/
Description: Add additional customizations to Genesis Theme.
Version: 1.8.6
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
	add_action( 'genesis_header', 'genesis_do_new_header' );
	add_action('wp_head','hook_css');
}
add_action( 'after_setup_theme', 'CS_after_setup_theme' );

function genesis_do_new_header() {
	
}
function hook_css()
{
	$output="<style></style>";
	echo $output;
}