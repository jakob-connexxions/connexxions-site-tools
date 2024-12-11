<?php

// =============================================================================
// ADMIN/STAGING.PHP
// -----------------------------------------------------------------------------
// Automatically change theme colours and add noticies if the site is in
// staging mode (i.e. has 'staging' in the URL)
// =============================================================================

function cxx_staging_site() {
    if ( 'staging' != WP_ENVIRONMENT_TYPE )
	return;

    // Enqueue styles for red admin bar
    add_action( 'admin_enqueue_scripts', 'staging_adminbar_color_admin_enqueue_adminbar_color' );
    add_action( 'wp_enqueue_scripts', 'staging_adminbar_color_front_enqueue_adminbar_color' );

    // Add "STAGING" notice to admin bar for all
    add_action( 'admin_bar_menu', function( $wp_admin_bar ) {
    
        if ( 'staging' != WP_ENVIRONMENT_TYPE ) {
            return;
        }

        $args = array(
            'parent' => 'top-secondary',
            'id' => 'adminbar-staging-message',
            'title' => 'STAGING',
        );
        $wp_admin_bar->add_node( $args );
    } );
}

function staging_adminbar_color_admin_enqueue_adminbar_color() {
	wp_register_style( 'adminbar-staging-color-admin', CXX_PLUGIN_URL . '/includes/css/adminbar-staging.css' );
	wp_enqueue_style( 'adminbar-staging-color-admin' );
}

function staging_adminbar_color_front_enqueue_adminbar_color() {
	if ( is_admin_bar_showing() ) {
		wp_register_style( 'adminbar-staging-color-front', CXX_PLUGIN_URL . '/includes/css/adminbar-staging.css' );
		wp_enqueue_style( 'adminbar-staging-color-front' );
	}
}
add_action( 'init', 'cxx_staging_site' );
