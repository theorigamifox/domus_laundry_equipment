<?php
$config = dry_cleaning_kirki_config();

DRY_CLEANING_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => __( 'Additional JS', 'dry-cleaning' ),
	'priority' => 210
) );

	# custom-js
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => __( 'Enable Custom JS?', 'dry-cleaning' ),
		'default'  => dry_cleaning_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
			'off' => esc_attr__( 'No', 'dry-cleaning' )
		)		
	));

	# custom-js
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => __( 'Add Custom JS', 'dry-cleaning' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));