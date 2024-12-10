<?php

// Custom managed parameters
// =============================================================================
function cx_add_managed_parameters() {
    if ( function_exists( 'cs_parameters_managed_register' ) ) {

        // Aspect ratio control
        cs_parameters_managed_register('aspect-ratio', [
            'type' => 'dimension',
            'isVar' => true,
            'slider' => false,
            'keywords' => [ 'auto', 'calc' ],
            'initial' => 'calc(6/5)',
            'units'    => [],
        ]);
        
        // Simple boolean with tick and cross
        cs_parameters_managed_register('boolean', [
            'type'     => 'choose',
            'initial'  => 'true',
            'options'  => [
                [ 'value' => 'true', 'icon' => 'check' ],
                [ 'value' => 'false', 'icon' => 'times' ],
            ],
        ]);

        // Simple boolean with on and off
        cs_parameters_managed_register('boolean-on-off', [
            'type'     => 'choose',
            'initial'  => 'true',
            'options'  => [
                [ 'value' => 'true', 'label' => 'On' ],
                [ 'value' => 'false', 'label' => 'Off' ],
            ],
        ]);

        // Simple numerical boolean
        cs_parameters_managed_register('boolean-numerical', [
            'type'     => 'choose',
            'initial'  => '1',
            'options'  => [
                [ 'value' => '1', 'icon' => 'check' ],
                [ 'value' => '0', 'icon' => 'times' ],
            ],
        ]);
    }
}
add_action( 'after_setup_theme', 'cx_add_managed_parameters');
