<?php
$config = dry_cleaning_kirki_config();

# Footer II Layout
	DRY_CLEANING_Kirki::add_section( 'dt_footer_ii_layout', array(
		'title'	=> __( 'Layout', 'dry-cleaning' ),
		'description' => __('Footer Column Layout Settings','dry-cleaning'),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 1	
	) );
		# show-footer-ii
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer-ii',
			'label'    => __( 'Show Footer Columns ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => dry_cleaning_defaults('show-footer-ii'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)
		));

		# footer-ii-columns
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-ii-columns',
			'label'    => __( 'Footer Columns Layout ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => dry_cleaning_defaults('footer-ii-columns'),
			'choices' => array(
				'1' => get_template_directory_uri().'/kirki/assets/images/columns/one-column.png',
				'2' => get_template_directory_uri().'/kirki/assets/images/columns/one-half-column.png',
				'3' => get_template_directory_uri().'/kirki/assets/images/columns/one-third-column.png',
				'4' => get_template_directory_uri().'/kirki/assets/images/columns/one-fourth-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)
		));

# Footer II Background		
	DRY_CLEANING_Kirki::add_section( 'dt_footer_ii_bg', array(
		'title'	=> __( 'Background', 'dry-cleaning' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 2,
	) );

		# customize-footer-ii-bg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-bg',
			'label'    => __( 'Customize Background ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_bg',
			'default'  => dry_cleaning_defaults('customize-footer-ii-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-bg-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-ii-bg-color',
			'label'    => __( 'Background Color', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-image
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-ii-bg-image',
			'label'    => __( 'Background Image', 'dry-cleaning' ),
			'description'    => __( 'Add Background Image for footer', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-position
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-position',
			'label'    => __( 'Background Image Position', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => dry_cleaning_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-ii-bg-repeat
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => dry_cleaning_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer II Typography
	DRY_CLEANING_Kirki::add_section( 'dt_footer_ii_typo', array(
		'title'	=> __( 'Typography', 'dry-cleaning' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 3,
	) );

		# customize-footer-ii-title-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-title-typo',
			'label'    => __( 'Customize Title ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => dry_cleaning_defaults('customize-footer-ii-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-title-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-title-typo',
			'label'    => __( 'Title Typography', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => dry_cleaning_defaults( 'footer-ii-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		DRY_CLEANING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-ii-title-typo-divider',
			'section'  => 'dt_footer_ii_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-ii-content-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-content-typo',
			'label'    => __( 'Customize Content ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => dry_cleaning_defaults('customize-footer-ii-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-content-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-content-typo',
			'label'    => __( 'Content Typography', 'dry-cleaning' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => dry_cleaning_defaults( 'footer-ii-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		