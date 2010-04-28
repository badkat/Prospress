<?php
/*
Plugin Name: Prospress
Plugin URI: http://prospress.org
Description: Communication and trade - two prosperous human endeavours. WordPress advances the first, Prospress the second. This plugin transforms WordPress into an own online marketplace.
Author: Brent Shepherd
Version: 0.1
Author URI: http://brentshepherd.com/
*/

if ( !defined( 'PP_VERSION'))
	define( 'PP_VERSION', '0.1' );

/***
 * This file will load in each Prospress component based on which
 * of the components have been activated on the Prospress admin menu.
 */

require_once( WP_PLUGIN_DIR . '/prospress/pp-core.php' );
register_activation_hook( __FILE__, 'pp_maybe_install' );

//$deactivated = apply_filters( 'pp_deactivated_components', get_site_option( 'pp-deactivated-components' ) );

//require_once( WP_PLUGIN_DIR . '/prospress/pp-bids.php' );

//require_once( WP_PLUGIN_DIR . '/prospress/pp-posts-adapter.php' );

//require_once( WP_PLUGIN_DIR . '/prospress/pp-feedback.php' );

/* Activate Each Component like so */
//if ( !isset( $deactivated['controller-file.php'] ) && file_exists( PP_PLUGIN_DIR . '/controller-file.php') )
//	include( PP_PLUGIN_DIR . '/controller-file.php' );

/* Bids Component */
//if ( !isset( $deactivated['pp-bids.php'] ) && file_exists( PP_PLUGIN_DIR . '/pp-bids.php') )
//	include( PP_PLUGIN_DIR . '/pp-bids.php' );

?>