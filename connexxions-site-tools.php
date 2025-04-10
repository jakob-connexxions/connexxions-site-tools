<?php
/*
    Plugin Name: Connexxions Site Tools
    Plugin URI: https://github.com/jakob-connexxions/connexxions-site-tools
    Description: Set of tools for Connexxions websites.
    Version: 1.0.11
    Author: Jakob op den Brouw
    Author URI: https://connexxions.co.uk
    Text-domain: connexxions
    GitHub Plugin URI: https://github.com/jakob-connexxions/connexxions-site-tools
*/


// Define Path / URL Constants
// ---------------------------

define( 'CXX_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

if ( !defined( 'CXX_IS_STAGING') ) {
    $staging = ( defined( 'WP_ENVIRONMENT_TYPE' ) ) ? WP_ENVIRONMENT_TYPE == 'staging' : str_contains( CXX_PLUGIN_URL, 'staging' ) || str_contains( CXX_PLUGIN_URL, 'odb.host' );
    define( 'CXX_IS_STAGING', $staging );
}


// Require other files
// -------------------

include( plugin_dir_path( __FILE__ ) . 'includes/admin/options.php');
include( plugin_dir_path( __FILE__ ) . 'includes/admin/staging.php');
include( plugin_dir_path( __FILE__ ) . 'includes/plugins/acfe.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/conditionals.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/connexxions-stack.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/cornerstone.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/managed-parameters.php');
include( plugin_dir_path( __FILE__ ) . 'includes/pro.php');
