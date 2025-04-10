<?php

// Custom managed parameters
// =============================================================================
function cx_add_managed_parameters() {
    if ( function_exists( 'cs_parameters_managed_register' ) ) {

        // Padding group
        cs_parameters_managed_register('padding-group', [
            'type' => 'group',
            'noPicker' => true,
            'params' => [
                'top' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:padding-top'
                ],
                'right' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:padding-right'
                ],
                'bottom' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'label' => 'Bttm',
                    'labelBefore' => 'css:padding-bottom'
                ],
                'left' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:padding-left'
                ]
            ]
        ]);

        // Padding group horizontal
        cs_parameters_managed_register('padding-group-horizontal', [
            'type' => 'group',
            'noPicker' => true,
            'params' => [
                'right' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:padding-right'
                ],
                'left' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:padding-left'
                ]
            ]
        ]);

        // Padding group vertical
        cs_parameters_managed_register('padding-group-vertical', [
            'type' => 'group',
            'noPicker' => true,
            'params' => [
                'top' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:padding-top'
                ],
                'bottom' => [
                    'type' => 'padding',
                    'initial' => '0em',
                    'isVar' => true,
                    'label' => 'Bttm',
                    'labelBefore' => 'css:padding-bottom'
                ]
            ]
        ]);

        // Margin group
        cs_parameters_managed_register('margin-group', [
            'type' => 'group',
            'noPicker' => true,
            'params' => [
                'top' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:margin-top'
                ],
                'right' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:margin-right'
                ],
                'bottom' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'label' => 'Bttm',
                    'labelBefore' => 'css:margin-bottom'
                ],
                'left' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:margin-left'
                ]
            ]
        ]);

        // Margin group horizontal
        cs_parameters_managed_register('margin-group-horizontal', [
            'type' => 'group',
            'noPicker' => true,
            'params' => [
                'right' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:margin-right'
                ],
                'left' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:margin-left'
                ]
            ]
        ]);

        // Margin group vertical
        cs_parameters_managed_register('margin-group-vertical', [
            'type' => 'group',
            'noPicker' => true,
            'params' => [
                'top' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'labelBefore' => 'css:margin-top'
                ],
                'bottom' => [
                    'type' => 'margin',
                    'initial' => '0em',
                    'isVar' => true,
                    'label' => 'Bttm',
                    'labelBefore' => 'css:margin-bottom'
                ]
            ]
        ]);

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

        // Scroll Effect control group
        cs_parameters_managed_register('scroll-effect', ['type' => 'group',
            'noPicker' => true,
            'params' => [
                'enabled' => [
                    'type' => 'boolean',
                    'initial' => 'true',
                    'description' => '{{ p.scrollEffect.enabled == "false" ? "scroll-effect-disabled" : "" }}'
                ],
                'delay' => [
                    'type' => 'time',
                    'initial' => '0ms',
                    'description' => '{{ p.scrollEffect.delay }}',
                    'when' => 'eq(enabled, \'true\')'
                ]
            ]
       ]);

        // Headline tag selection
        cs_parameters_managed_register('headline-tag', ['type' => 'choose',
                                       'options' => [
                                           [ 'value' => 'h1', 'icon' => 'h1' ],
                                           [ 'value' => 'h2', 'icon' => 'h2' ],
                                           [ 'value' => 'h3', 'icon' => 'h3' ],
                                           [ 'value' => 'h4', 'icon' => 'h4' ],
                                           [ 'value' => 'span', 'icon' => 'text' ]
                                       ],
                                       'initial' => 'h2'
                                       ]);
    }
}
add_action( 'after_setup_theme', 'cx_add_managed_parameters');
