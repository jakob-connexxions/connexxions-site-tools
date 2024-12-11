<?php

// Add Connexxions options page
// ----------------------------
add_action( 'acf/init', function() {
  	acf_add_options_page( array(
    	'page_title' => 'Site Settings and Options — Connexxions',
    	'menu_slug' => 'connexxions',
    	'menu_title' => 'Connexxions',
    	'position' => 1,
        'capability' => 'edit_theme_options',
    	'redirect' => false,
    	'icon_url' => CXX_PLUGIN_URL . '/assets/cxx-dot.webp',
    	'autoload' => true,
    ) );
} );

// Add admin notice for staging sites
// ----------------------------------
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_60a51ea517d7c',
	'title' => 'Staging notice settings',
	'fields' => array(
		array(
			'key' => 'field_60a51ead0c3a0',
			'label' => 'Enable admin notice for staging site',
			'name' => 'enable_admin_notice',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_60a51ef20c3a3',
			'label' => 'Notice type',
			'name' => 'notice_type',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_60a51ead0c3a0',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'notice-error' => 'Error',
				'notice-warning' => 'Warning',
				'notice-success' => 'Success',
				'notice-info' => 'Information',
			),
			'default_value' => 'notice-info',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
			'allow_custom' => 0,
			'search_placeholder' => '',
		),
		array(
			'key' => 'field_60a51ebc0c3a1',
			'label' => 'Heading',
			'name' => 'heading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_60a51ead0c3a0',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_60a51ec70c3a2',
			'label' => 'Message',
			'name' => 'message',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_60a51ead0c3a0',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'connexxions',
			),
			array(
				'param' => 'current_user_role',
				'operator' => '==',
				'value' => 'administrator',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => false,
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
) );
} );
