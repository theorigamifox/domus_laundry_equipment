<?php
$config = dry_cleaning_kirki_config();

DRY_CLEANING_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => __( 'Site Layout', 'dry-cleaning' ),
	'priority' => 20
) );

	# site-responsive
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-responsive',
		'label'    => __( 'Is Site Responsive?', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'default'  => dry_cleaning_defaults('site-responsive'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
			'off' => esc_attr__( 'No', 'dry-cleaning' )
		)			
	));	

	# site-layout
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => __( 'Site Layout', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'default'  => dry_cleaning_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  get_template_directory_uri().'/kirki/assets/images/site-layout/boxed.png',
			'wide' => get_template_directory_uri().'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => __( 'Customize Boxed Layout?', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
			'off' => esc_attr__( 'No', 'dry-cleaning' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => __( 'Background Type', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'dry-cleaning' ),
			'upload' => esc_attr__( 'Set Pattern', 'dry-cleaning' ),
			'none' => esc_attr__( 'None', 'dry-cleaning' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => __( 'Predefined Patterns', 'dry-cleaning' ),
		'description'    => __( 'Add Background for body', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern1.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern1.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern2.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern2.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern3.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern3.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern4.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern4.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern5.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern5.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern6.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern6.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern7.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern7.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern8.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern8.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern9.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern9.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern10.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern10.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern11.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern11.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern12.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern12.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern13.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern13.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern14.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern14.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern15.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => __( 'Background Image', 'dry-cleaning' ),
		'description'    => __( 'Add Background Image for body', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => __( 'Background Position', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => dry_cleaning_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => __( 'Background Repeat', 'dry-cleaning' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => dry_cleaning_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	