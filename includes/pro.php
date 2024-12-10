<?php

// Pro - Disabling post and page settings metaboxes
// =============================================================================

function remove_custom_meta_box() {
    remove_action( 'add_meta_boxes', 'x_add_design_meta_boxes' );
}
add_action( 'init', 'remove_custom_meta_box' );