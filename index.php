<?php
/*
Plugin Name: Webpage Speed Test
Plugin URI:  https://www.wholesalesms.com.au/
Description: Test your webpage speed with Google Page Insights, Use given script to increase webpage performance and reduce load time.
Version: 1.0
Author: Wholesalesms
Author URI: https://www.wholesalesms.com.au/
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit;

wp_enqueue_style('cl-chanimal-styles', plugin_dir_url( __FILE__ ) . 'css/plugin-styles.css' );
wp_enqueue_style('cl-popup-styles', plugin_dir_url( __FILE__ ) . 'css/popup.css' );

function wholesalesms_pagespeed_test()
{
	include "webpage-speed-test.php";
}

add_action('admin_menu', 'wholesalesms_menu_pages');

function wholesalesms_menu_pages(){
    add_menu_page('My Page Title', 'Webpage Speed Test', 'manage_options', 'wholesalesms_pagespeed', 'wholesalesms_pagespeed_test', esc_url(plugin_dir_url( __FILE__ ). 'assets/launch.png') );
    
}
