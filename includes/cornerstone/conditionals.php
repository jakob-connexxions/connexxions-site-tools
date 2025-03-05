<?php

function cxx_condition_contexts_content_builder( $condition_contexts ) {
    if ( array_key_exists( 'current-post', $condition_contexts['controls'] ) ) {
        // Hooking into the global conditions section of Cornerstone conditions.
        // Pull out the global array and add two new entries to the list that can be selected
        // The key is converted to a function: current_post_content_builder tacked on to cs_condition_rule_ ...
        $current_post_conditions = $condition_contexts['controls']['current-post'];
        $current_post_conditions[] = array(
            'key'    => "current-post:content-builder",
            'label'  => __('Content Builder', 'cornerstone'),
            'toggle' => [
                'type'   => 'boolean',
                'labels' => [
                    'is pro',
                    'is not pro'
                ]
            ],
            'criteria' => [ 'type' => 'static' ]
        );
        $condition_contexts['controls']['current-post'] = $current_post_conditions;
    }
    return $condition_contexts;
}
add_filter( 'cs_condition_contexts', 'cxx_condition_contexts_content_builder', 10, 1 );

add_filter( 'cs_condition_rule_current_post_content_builder', 'cxx_condition_rule_content_builder' );

function cxx_assignment_contexts_content_builder( $assignment_contexts ) {
    if ( array_key_exists( 'single', $assignment_contexts['controls'] ) ) {
        $single_assignments = $assignment_contexts['controls']['single'];
        $single_assignments[] = array(
            'key'    => "single:content-builder",
            'label'  => __('Content Builder', 'cornerstone'),
            'toggle' => [
                'type'   => 'boolean',
                'labels' => [
                    'is pro',
                    'is not pro'
                ]
            ],
            'criteria' => [ 'type' => 'static' ]
        );
        $assignment_contexts['controls']['single'] = $single_assignments;
    }
    return $assignment_contexts;
}
add_filter( 'cs_assignment_contexts', 'cxx_assignment_contexts_content_builder', 10, 1 );

add_filter( 'cs_condition_rule_single_content_builder', 'cxx_condition_rule_content_builder' );

// Positive check of presence of cs_content shortcode
// Used to check if post was made with cornerstone
function cxx_condition_rule_content_builder() {
    $content = get_the_content();

    return has_shortcode( $content, 'cs_content' ) || str_contains( $content, '<!-- cs-content -->' );
}
