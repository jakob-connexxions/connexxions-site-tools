<?php

// Set up custom Connexxions stack with additional controls
// =============================================================================
add_action("cs_theme_options_before_init", function() {
  /**
   * Main registry Function
   * @see Stack Configuration Options
   */
  return cs_stack_register(
    //Configuration of stack
    [
      // Both required
      'id' => 'connexxions',
      'label' => __("Connexxions", "connexxions"),

      // Use controls, css, and stylesheets
      // From another stack
      'extends' => 'starter',

      // CSS that should utilize the theme options
      // And is dynamically processed
      // Can also be a file path assuming the file exists
      'css' => plugin_dir_path( __FILE__ ) . 'connexxions-stack.css',

      // Stylesheets to load on page
      // If stack is active
      'stylesheets' => [],

      // Values to save in Database
      // Referenced through {{dc:theme:KEY}}
      'values' => [
        // Our toggle from before is now on by default
        'heading_line_height' => '1.1',
        'body_line_height' => '1.4',
        'x_portfolio_enable' => '',
        'x_stack' => 'connexxions'
      ],

      // Controls to use in Cornerstone
      // Uses the Element Control API for structure
      'controls' => function() {
        return [

          // Top Level control group
          [
            'type'  => 'group-sub-module',
            'label' => __( 'Additional Typography', '__x__' ),
            'options' => [ 'tag' => 'typography', 'name' => 'x-theme-options:typography' ],
            'controls' => [

              [
                'type'    => 'group',
                'label'   => __( 'Line Height', 'connexxions' ),
                'controls'=> [
                  [
                    'key'     => 'heading_line_height',
                    'type'    => 'text',
                    'label'   => __( 'Heading', 'connexxions' ),
                  ],

                  [
                    'key'     => 'body_line_height',
                    'type'    => 'text',
                    'label'   => __( 'Body', 'connexxions' ),
                  ],
                ]
              ]

            ],

          ],
        ];
      },
    ]
  );

});