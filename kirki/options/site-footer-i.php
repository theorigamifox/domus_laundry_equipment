<?php
$config = dry_cleaning_kirki_config();

# Footer I Layout
	DRY_CLEANING_Kirki::add_section( 'dt_footer_layout', array(
		'title'	=> __( 'Layout', 'dry-cleaning' ),
		'description' => __('Footer Column Layout Settings','dry-cleaning'),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 1	
	) );
	
		# show-footer
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer',
			'label'    => __( 'Show Footer Columns ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_layout',
			'default'  => dry_cleaning_defaults('show-footer'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)
		));

		# footer-columns
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-columns',
			'label'    => __( 'Footer Columns Layout ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_layout',
			'transport' => 'refresh',
			'default'  => dry_cleaning_defaults('footer-columns'),
			'choices' => array(
				'1' => get_template_directory_uri().'/kirki/assets/images/columns/one-column.png',
				'2' => get_template_directory_uri().'/kirki/assets/images/columns/one-half-column.png',
				'3' => get_template_directory_uri().'/kirki/assets/images/columns/one-third-column.png',
				'4' => get_template_directory_uri().'/kirki/assets/images/columns/one-fourth-column.png',
				'5' => get_template_directory_uri().'/kirki/assets/images/columns/one-fifth-column.png',
				'6' => get_template_directory_uri().'/kirki/assets/images/columns/one-sixth-column.png',

				'12' => get_template_directory_uri().'/kirki/assets/images/columns/onefourth-onefourth-onehalf-column.png',
				'13' => get_template_directory_uri().'/kirki/assets/images/columns/onehalf-onefourth-onefourth-column.png',
				'11' => get_template_directory_uri().'/kirki/assets/images/columns/onefourth-onehalf-onefourth-column.png',

				'7' => get_template_directory_uri().'/kirki/assets/images/columns/onefourth-threefourth-column.png',
				'8' => get_template_directory_uri().'/kirki/assets/images/columns/threefourth-onefourth-column.png',

				'9' => get_template_directory_uri().'/kirki/assets/images/columns/onethird-twothird-column.png',
				'10' => get_template_directory_uri().'/kirki/assets/images/columns/twothird-onethird-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-darkbg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-footer-darkbg',
			'label'    => __( 'Enable Footer Dark BG', 'dry-cleaning' ),
			'section'  => 'dt_footer_layout',
			'default'  => dry_cleaning_defaults('enable-footer-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)
		));		


# Footer 1 Background		
	DRY_CLEANING_Kirki::add_section( 'dt_footer_bg', array(
		'title'	=> __( 'Background', 'dry-cleaning' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 2,
	) );

		# customize-footer-bg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-bg',
			'label'    => __( 'Customize Background ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_bg',
			'default'  => dry_cleaning_defaults('customize-footer-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-bg-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-bg-color',
			'label'    => __( 'Background Color', 'dry-cleaning' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-color' )
			),
			'default'  => dry_cleaning_defaults('footer-bg-color'),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-image
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-bg-image',
			'label'    => __( 'Background Image', 'dry-cleaning' ),
			'description'    => __( 'Add Background Image for footer', 'dry-cleaning' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-position
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-position',
			'label'    => __( 'Background Image Position', 'dry-cleaning' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-position' )
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => dry_cleaning_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-bg-repeat
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'dry-cleaning' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => dry_cleaning_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer I Typography
	DRY_CLEANING_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> __( 'Typography', 'dry-cleaning' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 3,
	) );

		# customize-footer-title-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => __( 'Customize Title ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_typo',
			'default'  => dry_cleaning_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-title-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => __( 'Title Typography', 'dry-cleaning' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle' )
			),
			'default' => dry_cleaning_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		DRY_CLEANING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => __( 'Customize Content ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_typo',
			'default'  => dry_cleaning_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-content-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => __( 'Content Typography', 'dry-cleaning' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets .widget' )
			),
			'default' => dry_cleaning_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => __( 'Anchor Color', 'dry-cleaning' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '' )
			),
			'default' => dry_cleaning_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => __( 'Anchor Hover Color', 'dry-cleaning' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '' )
			),
			'default' => dry_cleaning_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));