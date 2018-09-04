<?php
$config = dry_cleaning_kirki_config();

# Footer Copyright
	DRY_CLEANING_Kirki::add_section( 'dt_footer_copyright', array(
		'title'	=> __( 'Copyright', 'dry-cleaning' ),
		'description' => __('Footer Copyright Settings','dry-cleaning'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 1
	) );

		# show-copyright-text
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-copyright-text',
			'label'    => __( 'Show Copyright Text ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  dry_cleaning_defaults('show-copyright-text'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)
		) );

		# copyright-text
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'copyright-text',
			'label'    => __( 'Add Content', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  dry_cleaning_defaults('copyright-text'),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)
		) );

		# enable-copyright-darkbg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-copyright-darkbg',
			'label'    => __( 'Enable Copyright Dark BG ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  dry_cleaning_defaults('enable-copyright-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			)
		) );		

		# copyright-next
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'copyright-next',
			'label'    => __( 'Show Sociable / menu ?', 'dry-cleaning' ),
			'description'    => __( 'Add description here.', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright',
			'default'  => dry_cleaning_defaults('copyright-next'),
			'choices'  => array(
				'hidden'  => esc_attr__( 'Hide', 'dry-cleaning' ),
				'disable'  => esc_attr__( 'Disable', 'dry-cleaning' ),
				'sociable' => esc_attr__( 'Show sociable', 'dry-cleaning' ),
				'footer-menu' => esc_attr__( 'Show menu', 'dry-cleaning' ),
			)
		) );

# Footer Social
	DRY_CLEANING_Kirki::add_section( 'dt_footer_social', array(
		'title'	=> __( 'Social', 'dry-cleaning' ),
		'description' => __('Footer Social Icons Settings','dry-cleaning'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 2
	) );

		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'sortable',
			'settings' => 'footer-sociables',
			'label'    => __( 'Social Icons Order', 'dry-cleaning' ),
			'section'  => 'dt_footer_social',
			'default'  => dry_cleaning_defaults('footer-sociables'),
			'choices'  => array(
				"delicious"		=>	esc_attr__( 'Delicious', 'dry-cleaning' ),
				"deviantart"	=>	esc_attr__( 'Deviantart', 'dry-cleaning' ),
				"digg"			=>	esc_attr__( 'Digg', 'dry-cleaning' ),
				"dribbble"		=>	esc_attr__( 'Dribbble', 'dry-cleaning' ),
				"envelope-open"	=>	esc_attr__( 'Envelope', 'dry-cleaning' ),
				"facebook"		=>	esc_attr__( 'Facebook', 'dry-cleaning' ),
				"flickr"		=>	esc_attr__( 'Flickr', 'dry-cleaning' ),
				"google-plus"	=>	esc_attr__( 'Google Plus', 'dry-cleaning' ),
				"comment"		=>	esc_attr__( 'GTalk', 'dry-cleaning' ),
				"instagram"		=>	esc_attr__( 'Instagram', 'dry-cleaning' ),
				"lastfm"		=>	esc_attr__( 'Lastfm', 'dry-cleaning' ),
				"linkedin"		=>	esc_attr__( 'Linkedin', 'dry-cleaning' ),
				"picasa"		=>  esc_attr__( 'Picasa', 'dry-cleaning' ),
				"myspace"		=>	esc_attr__( 'Myspace', 'dry-cleaning' ),
				"pinterest"		=>	esc_attr__( 'Pinterest', 'dry-cleaning' ),
				"reddit"		=>	esc_attr__( 'Reddit', 'dry-cleaning' ),
				"rss"			=>	esc_attr__( 'RSS', 'dry-cleaning' ),
				"skype"			=>	esc_attr__( 'Skype', 'dry-cleaning' ),
				"stumbleupon"	=>	esc_attr__( 'Stumbleupon', 'dry-cleaning' ),
				"technorati"	=>	esc_attr__( 'Technorati', 'dry-cleaning' ),
				"tumblr"		=>	esc_attr__( 'Tumblr', 'dry-cleaning' ),
				"twitter"		=>	esc_attr__( 'Twitter', 'dry-cleaning' ),
				"viadeo"		=>	esc_attr__( 'Viadeo', 'dry-cleaning' ),
				"vimeo"			=>	esc_attr__( 'Vimeo', 'dry-cleaning' ),
				"yahoo"			=>	esc_attr__( 'Yahoo', 'dry-cleaning' ),
				"youtube"		=>	esc_attr__( 'Youtube', 'dry-cleaning' ),
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'sociable' ),
			)
		) );

# Footer Copyright Background		
	DRY_CLEANING_Kirki::add_section( 'dt_footer_copyright_bg', array(
		'title'	=> __( 'Background', 'dry-cleaning' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 3,
	) );

		# customize-footer-copyright-bg
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-bg',
			'label'    => __( 'Customize Background ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_bg',
			'default'  => dry_cleaning_defaults('customize-footer-copyright-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )
				)
			)
		));

		# footer-copyright-bg-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-copyright-bg-color',
			'label'    => __( 'Background Color', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )				
				)
			)
		));

		# footer-copyright-bg-image
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-copyright-bg-image',
			'label'    => __( 'Background Image', 'dry-cleaning' ),
			'description'    => __( 'Add Background Image for footer', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				)
			)
		));

		# footer-copyright-bg-position
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-position',
			'label'    => __( 'Background Image Position', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => dry_cleaning_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )				
			)			
		));

		# footer-copyright-bg-repeat
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => dry_cleaning_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )
			)			
		));

# Footer Copyright Typography
	DRY_CLEANING_Kirki::add_section( 'dt_footer_copyright_typo', array(
		'title'	=> __( 'Typography', 'dry-cleaning' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 4,
	) );

		# customize-footer-copyright-text-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-text-typo',
			'label'    => __( 'Customize Copyright Text ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => dry_cleaning_defaults('customize-footer-copyright-text-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-copyright-text-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-copyright-text-typo',
			'label'    => __( 'Text Typography', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '.footer-copyright' )
			),
			'default' => dry_cleaning_defaults( 'footer-copyright-text-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-copyright-text-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		DRY_CLEANING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-copyright-text-typo-divider',
			'section'  => 'dt_footer_copyright_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));		

		# customize-footer-menu-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-menu-typo',
			'label'    => __( 'Customize Footer Menu ?', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => dry_cleaning_defaults('customize-footer-menu-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'dry-cleaning' ),
				'off' => esc_attr__( 'No', 'dry-cleaning' )
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));

		# footer-menu-typo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-menu-typo',
			'label'    => __( 'Menu Typography', 'dry-cleaning' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => dry_cleaning_defaults( 'footer-menu-typo' ),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' ),
				array( 'setting' => 'customize-footer-menu-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		