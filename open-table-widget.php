<?php
/*
Plugin Name: Open Table Widget
Plugin URI: http://wordpress.org/extend/plugins/open-table-widget/
Description: Display an Open Table widget for your restaurant, bar, nightclub or eatery.
Version: 1.3
Author: Devin Walker
Author URI: http://imdev.in/
Text Domain: otw
License: GPLv2
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'OTW_PLUGIN_NAME', 'open-table-widget' );
define( 'OTW_PLUGIN_NAME_PLUGIN', 'open-table-widget/open-table-widget.php' );
define( 'OTW_PLUGIN_PATH', WP_PLUGIN_DIR . '/' . OTW_PLUGIN_NAME );
define( 'OTW_PLUGIN_URL', WP_PLUGIN_URL . '/' . OTW_PLUGIN_NAME );

function init_open_table_widget() {

	// Include Sunrise Plugin Framework class
	require_once 'classes/sunrise.class.php';

	// Create plugin instance
	$open_table_widget = new Sunrise_Plugin_Framework_2( __FILE__ );

	// Include options set
	include_once 'inc/options.php';

	// Create options page
	$open_table_widget->add_options_page( array(), $open_table_widget_options );

	// Make plugin meta translatable
	__( 'Open Table Widget', $open_table_widget->textdomain );
	__( 'Devin Walker', $open_table_widget->textdomain );
	__( 'otw', $open_table_widget->textdomain );

	//Include the widget
	if ( ! class_exists( 'Open_Table_Widget' ) ) {
		require 'classes/widget.php';

	}

	return $open_table_widget;

}

/*
 * @DESC: Register Open Table widget
 */
add_action( 'widgets_init', 'init_open_table_widget' );
add_action( 'widgets_init', create_function( '', 'register_widget( "Open_Table_Widget" );' ) );


/**
 * Custom CSS for Options Page
 */
add_action( 'admin_enqueue_scripts', 'otw_options_scripts' );

function otw_options_scripts( $hook ) {

	if ( 'settings_page_opentablewidget' != $hook ) {
		return;
	} else {
		wp_register_style( 'otw_custom_options_styles', plugin_dir_url( __FILE__ ) . '/assets/css/options.min.css' );
		wp_enqueue_style( 'otw_custom_options_styles' );

	}

}