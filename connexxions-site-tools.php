<?php
/*
    Plugin Name: Connexxions Site Tools
    Plugin URI: https://github.com/jakob-connexxions/connexxions-site-tools
    Description: Set of tools for Connexxions websites.
    Version: 1.0.4
    Author: Jakob op den Brouw
    Author URI: https://connexxions.co.uk
    Text-domain: connexxions
    GitHub Plugin URI: https://github.com/jakob-connexxions/connexxions-site-tools
*/


// Define Path / URL Constants
// ---------------------------

define( 'CXX_TEMPLATE_PATH', get_stylesheet_directory() );
define( 'CXX_TEMPLATE_URL', get_stylesheet_directory_uri() );

define( 'CXX_IS_STAGING', str_contains( CXX_TEMPLATE_URL, 'staging' ) );


// Require other files
// -------------------

include( plugin_dir_path( __FILE__ ) . 'includes/plugins/acfe.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/conditionals.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/connexxions-stack.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/cornerstone.php');
include( plugin_dir_path( __FILE__ ) . 'includes/cornerstone/managed-parameters.php');
include( plugin_dir_path( __FILE__ ) . 'includes/pro.php');
