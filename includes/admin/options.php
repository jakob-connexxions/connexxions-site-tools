<?php

// Add Connexxions options page
// ----------------------------
add_action( 'acf/init', function() {
  	acf_add_options_page( array(
    	'page_title' => 'Site Settings and Options — Connexxions',
    	'menu_slug' => 'connexxions',
    	'menu_title' => 'Connexxions',
    	'position' => 1,
        'capability' => 'edit_theme_options',
    	'redirect' => false,
    	'icon_url' => CXX_PLUGIN_URL . '/assets/cxx-dot.webp',
    	'autoload' => true,
    ) );
} );
