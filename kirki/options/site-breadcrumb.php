<?php
$config = dry_cleaning_kirki_config();

# Breadcrumb Settings
DRY_CLEANING_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => __( 'Breadcrumb', 'dry-cleaning' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 1,	
) );

	# show-breadcrumb
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'show-breadcrumb',
		'label'    => __( 'Show Breadcrumb', 'dry-cleaning' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
			'off' => esc_attr__( 'No', 'dry-cleaning' )
		)
	));

	# breadcrumb-delimiter	
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-delimiter',
		'label'    => __( 'Breadcrumb Delimiter', 'dry-cleaning' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => dry_cleaning_defaults( 'breadcrumb-delimiter' ),
		'choices'  => array(
			"fa default" => esc_attr__('Default','dry-cleaning'),
			"fa fa-angle-double-right" => esc_attr__('Double Angle Right','dry-cleaning'),
			"fa fa-sort" => esc_attr__('Sort','dry-cleaning'),
			"fa fa-arrow-circle-right" => esc_attr__('Arrow Circle Right','dry-cleaning'),
			"fa fa-angle-right" => esc_attr__('Angle Right','dry-cleaning'),
			"fa fa-caret-right" => esc_attr__('Caret Right','dry-cleaning'),
			"fa fa-arrow-right" => esc_attr__('Arrow Right','dry-cleaning'),
			"fa fa-chevron-right" => esc_attr__('Chevron Right','dry-cleaning'),
			"fa fa-hand-o-right" => esc_attr__('Hand Right','dry-cleaning'),
			"fa fa-plus" => esc_attr__('Plus','dry-cleaning'),
			"fa fa-remove" => esc_attr__('Remove','dry-cleaning'),
			"fa fa-glass" => esc_attr__('Glass','dry-cleaning'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

	# breadcrumb-style	
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-style',
		'label'    => __( 'Breadcrumb Style', 'dry-cleaning' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => dry_cleaning_defaults( 'breadcrumb-style' ),
		'choices'  => array(
			"default"	=> esc_attr__('Default','dry-cleaning'),
			"aligncenter"	=> esc_attr__('Align Center','dry-cleaning'),
			"alignright"	=> esc_attr__('Align Right','dry-cleaning'),
			"breadcrumb-left"	=> esc_attr__('Left Side Breadcrumb','dry-cleaning'),
			"breadcrumb-right"	=> esc_attr__('Right Side Breadcrumb','dry-cleaning'),
			"breadcrumb-top-right-title-center"	=> esc_attr__('Top Right Title Center','dry-cleaning'),
			"breadcrumb-top-left-title-center"	=> esc_attr__('Top Left Title Center','dry-cleaning'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

# Breadcrumb Background Settings
DRY_CLEANING_Kirki::add_section( 'dt_site_breadcrumb_bg_section', array(
	'title' => __( 'Background', 'dry-cleaning' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 2,	
) );
		# customize-breadcrumb-bg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-bg',
			'label'    => __( 'Customize Background ?', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'default'  => dry_cleaning_defaults('customize-breadcrumb-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-bg-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'breadcrumb-bg-color',
			'label'    => __( 'Background Color', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-image
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'breadcrumb-bg-image',
			'label'    => __( 'Background Image', 'dry-cleaning' ),
			'description'    => __( 'Add Background Image for breadcrumb', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-position
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-position',
			'label'    => __( 'Background Image Position', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => dry_cleaning_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# breadcrumb-bg-repeat
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => dry_cleaning_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Breadcrumb Typography
	DRY_CLEANING_Kirki::add_section( 'dt_site_breadcrumb_typo', array(
		'title'	=> __( 'Typography', 'dry-cleaning' ),
		'panel' => 'dt_site_breadcrumb_panel',
		'priority' => 3,
	) );

		# customize-breadcrumb-title-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-title-typo',
			'label'    => __( 'Customize Title ?', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => dry_cleaning_defaults('customize-breadcrumb-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-title-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-title-typo',
			'label'    => __( 'Title Typography', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => '.main-title-section h1, h1.simple-title' )
			),
			'default' => dry_cleaning_defaults( 'breadcrumb-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		

		# customize-breadcrumb-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-typo',
			'label'    => __( 'Customize Link ?', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => dry_cleaning_defaults('customize-breadcrumb-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-typo',
			'label'    => __( 'Link Typography', 'dry-cleaning' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => 'div.breadcrumb a' )
			),
			'default' => dry_cleaning_defaults( 'breadcrumb-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
			)		
		));										