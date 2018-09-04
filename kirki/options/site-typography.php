<?php
$config = dry_cleaning_kirki_config();

# Menu Typography
DRY_CLEANING_Kirki::add_section( 'dt_menu_typo_section', array(
	'title' => __( 'Menu', 'dry-cleaning' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );
	
	# customize-menu-typo
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-menu-typo',
		'label'    => __( 'Customize Menu Typo', 'dry-cleaning' ),
		'section'  => 'dt_menu_typo_section',
		'default'  => dry_cleaning_defaults( 'customize-menu-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
			'off' => esc_attr__( 'No', 'dry-cleaning' )
		)
	));

	# menu-typo
	DRY_CLEANING_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'menu-typo',
		'label'    => __('Settings', 'dry-cleaning'),
		'section'  => 'dt_menu_typo_section',
		'output' => array( 
			array( 'element' => '' )
		),
		'default' => dry_cleaning_defaults('menu-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-menu-typo', 'operator' => '==', 'value' => '1' )
		)
	));

# Body Content
DRY_CLEANING_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => __( 'Body', 'dry-cleaning' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 10
) );
	
	# customize-body-content-typo
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => __( 'Customize Content Typo', 'dry-cleaning' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => dry_cleaning_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
			'off' => esc_attr__( 'No', 'dry-cleaning' )
		)
	));

	# body-content-typo
	DRY_CLEANING_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => __('Settings', 'dry-cleaning'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => '' )
		),
		'default' => dry_cleaning_defaults('body-content-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

DRY_CLEANING_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => __( 'Headings', 'dry-cleaning' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 1
) );
	# Heading Tags
	for( $i=1; $i<=6; $i++ ) {

		# customize-body-heading-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h'.$i.'-typo',
			'label'    => __( 'Customize H', 'dry-cleaning' ). $i.__(' Tag', 'dry-cleaning'),
			'section'  => 'dt_headings_typo_section',
			'default'  => dry_cleaning_defaults( 'customize-body-h'.$i.'-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)
		));

		# heading tag typography	
		DRY_CLEANING_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h'.$i,
			'label'    => __( 'H', 'dry-cleaning' ).$i. ' '.__('Tag Settings', 'dry-cleaning'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h'.$i )
			),
			'default' => dry_cleaning_defaults('h'.$i),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h'.$i.'-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		DRY_CLEANING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h'.$i.'-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));		
	}