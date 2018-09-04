<?php
$config = dry_cleaning_kirki_config();

# Header Settings
	DRY_CLEANING_Kirki::add_section( 'dt_site_header_section', array(
		'title' => __( 'Header Style', 'dry-cleaning' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 1
	) );

		# header-type
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'header-type',
			'label'    => __( 'Site Header', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('header-type'),
			'choices' => array(
				'fullwidth-header' 				=> get_template_directory_uri().'/kirki/assets/images/site-headers/fullwidth-header.jpg',
				'boxed-header' 					=> get_template_directory_uri().'/kirki/assets/images/site-headers/boxed-header.jpg',
				'split-header boxed-header' 	=> get_template_directory_uri().'/kirki/assets/images/site-headers/splitted-boxed-header.jpg',
				'split-header fullwidth-header' => get_template_directory_uri().'/kirki/assets/images/site-headers/splitted-fullwidth-header.jpg',
				'fullwidth-header header-align-center fullwidth-menu-header' 	=> get_template_directory_uri().'/kirki/assets/images/site-headers/fullwidth-menu-center.jpg',
				'two-color-header' 			=> get_template_directory_uri().'/kirki/assets/images/site-headers/two-color-header.jpg',			
				'fullwidth-header header-align-left fullwidth-menu-header' 		=> get_template_directory_uri().'/kirki/assets/images/site-headers/fullwidth-menu-left.jpg',
				'left-header' 				=> get_template_directory_uri().'/kirki/assets/images/site-headers/left-header.jpg',
				'left-header-boxed' 		=> get_template_directory_uri().'/kirki/assets/images/site-headers/left-header-boxed.jpg',			
				'creative-header' 			=> get_template_directory_uri().'/kirki/assets/images/site-headers/creative-header.jpg',
				'overlay-header' 			=> get_template_directory_uri().'/kirki/assets/images/site-headers/overlay-header.jpg',
			)
		));

		# enable-sticy-nav
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-sticy-nav',
			'label'    => __( 'Sticky Navigation ?', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('enable-sticy-nav'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
					'fullwidth-header',
					'boxed-header',
					'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header'
				) ),
			)			
		));	

		# header-position
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-position',
			'label'    => __( 'Header Position', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('header-position'),		
			'choices'  => array(
				'above slider' => esc_attr__( 'Above slider','dry-cleaning'),
				'on slider' => esc_attr__( 'On slider','dry-cleaning'),
				'below slider' => esc_attr__( 'Below slider','dry-cleaning')				
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header', 'boxed-header', 'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)		
		));

		# header-transparency
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-transparency',
			'label'    => __( 'Header Transparency', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('header-transparency'),		
			'choices'  => array(
				'default' => esc_attr__( 'Default','dry-cleaning'),
				'semi-transparent-header' => esc_attr__( 'Semi Transparent','dry-cleaning'),
				'transparent-header' => esc_attr__( 'Transparent','dry-cleaning')				
			),	
		));		

		# enable-header-darkbg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-darkbg',
			'label'    => __( 'Enable Dark BG', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('enable-header-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)		
		));			

		# menu-search-icon
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'menu-search-icon',
			'label'    => __( 'Search Icon ?', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => '',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header', 'boxed-header', 'two-color-header' ) ),
			)		
		));

		# search-box-type
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'search-box-type',
			'label'    => __( 'Search Box Style', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('search-box-type'),
			'choices'  => array(
				'type1'   => esc_attr__( 'Default','dry-cleaning'),
				'type2'   => esc_attr__( 'Full Screen','dry-cleaning')
			),
			'active_callback' => array(
				array( 'setting' => 'menu-search-icon', 'operator' => '==', 'value' => '1' ),
			)
		));

		if( function_exists( 'is_woocommerce' ) ):
			# menu-cart-icon
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'menu-cart-icon',
				'label'    => __( 'Cart Icon ?', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'default'  => '',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
					'off' => esc_attr__( 'No', 'dry-cleaning' )
				),
				'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header',
						'boxed-header',
						'two-color-header') ),
				)
			));
		endif;	

		# Top bar Color

			# enable-top-bar-content
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'enable-top-bar-content',
				'label'    => __( 'Show Top Bar', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'default'  => dry_cleaning_defaults('enable-top-bar-content'),
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
					'off' => esc_attr__( 'No', 'dry-cleaning' )
				),
				/*'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)*/
			));

			# top-bar-content
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type'     => 'textarea',
				'settings' => 'top-bar-content',
				'label'    => __( 'Content', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'default'  => dry_cleaning_defaults('top-bar-content'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ),
					/*array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),	*/		
				)
			) );

			# customize-top-bar		
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-top-bar',
				'label'    => __( 'Customize Top Bar', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
					'off' => esc_attr__( 'No', 'dry-cleaning' )
				),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)
			));

			# top-bar-bg-color 			
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-bg-color',
				'label'    => __( 'Top Bar BG Color', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => dry_cleaning_defaults('top-bar-bg-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-text-color 			
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-text-color',
				'label'    => __( 'Top Bar Text Color', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => dry_cleaning_defaults('top-bar-text-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-a-color 			
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-color',
				'label'    => __( 'Top Bar Anchor Color', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => dry_cleaning_defaults('top-bar-a-color'),				
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)
			));

			# top-bar-a-hover-color 			
			DRY_CLEANING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-hover-color',
				'label'    => __( 'Top Bar Anchor Hover Color', 'dry-cleaning' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a:hover' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => dry_cleaning_defaults('top-bar-a-hover-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

		# enable-header-left-content	
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-left-content',
			'label'    => __( 'Show Header Left', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)				
		));

		# header-left-content
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-left-content',
			'label'    => __( 'Left Content', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-left-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)
		) );

		# enable-header-right-content	
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-right-content',
			'label'    => __( 'Show Header Right', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('enable-header-right-content'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header header-align-center fullwidth-menu-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)				
		));

		# header-right-content
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-right-content',
			'label'    => __( 'Right Content', 'dry-cleaning' ),
			'section'  => 'dt_site_header_section',
			'default'  => dry_cleaning_defaults('header-right-content'),
			'active_callback' => array(
				array( 'setting' => 'enable-header-right-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'fullwidth-header header-align-left fullwidth-menu-header') ),
			)
		) );

# Header Background Settings
	DRY_CLEANING_Kirki::add_section( 'dt_site_header_bg_section', array(
		'title' => __( 'Header Background', 'dry-cleaning' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 2
	) );

		# customize-header-bg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-header-bg',
			'label'    => __( 'Customize Background ?', 'dry-cleaning' ),
			'section'  => 'dt_site_header_bg_section',
			'default'  => dry_cleaning_defaults('customize-header-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)						
		));

		# header-bg-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'header-bg-color',
			'label'    => __( 'Background Color', 'dry-cleaning' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '.main-header-wrapper, .is-sticky .main-header-wrapper, .fullwidth-header .main-header-wrapper, .boxed-header .main-header, .boxed-header .is-sticky .main-header-wrapper, .header-align-left.fullwidth-menu-header .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .is-sticky .menu-wrapper, .standard-header .is-sticky .main-header-wrapper, .two-color-header .main-header-wrapper:before, .header-on-slider .is-sticky .main-header-wrapper, .left-header .main-header-wrapper, .left-header .main-header, .overlay-header .overlay, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-image
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'header-bg-image',
			'label'    => __( 'Background Image', 'dry-cleaning' ),
			'description'    => __( 'Add Background Image for breadcrumb', 'dry-cleaning' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-position
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-position',
			'label'    => __( 'Background Image Position', 'dry-cleaning' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => dry_cleaning_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# header-bg-repeat
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'dry-cleaning' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => dry_cleaning_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));		