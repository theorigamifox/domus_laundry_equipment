<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = dry_cleaning_kirki_config();

add_action('customize_register', 'dry_cleaning_customize_register');
function dry_cleaning_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'dry_cleaning_enqueue_customizer_stylesheet' );
function dry_cleaning_enqueue_customizer_stylesheet() {
	wp_register_style( 'dry-cleaning-customizer-css', get_template_directory_uri().'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'dry-cleaning-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'dry_cleaning_enqueue_customizer_script' );
function dry_cleaning_enqueue_customizer_script() {
	wp_register_script( 'dry-cleaning-customizer-js', get_template_directory_uri().'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'dry-cleaning-customizer-js' );
}

# Theme Customizer Begins
DRY_CLEANING_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => __( 'Logo ?', 'dry-cleaning' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => dry_cleaning_defaults('use-custom-logo'),
			'description' => __('This is test description','dry-cleaning'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'dry-cleaning' ),
				'off' => esc_attr__( 'Site Title', 'dry-cleaning' )
			)			
		) );

		# custom-logo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => __( 'Logo', 'dry-cleaning' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => dry_cleaning_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# custom-dark-logo
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-dark-logo',
			'label'    => __( 'Dark Logo', 'dry-cleaning' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => dry_cleaning_defaults( 'custom-dark-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# site-title-color
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'custom-title',
			'label'    => __( 'Site Title Color', 'agencies' ),
			'section'  => 'title_tagline',
			'priority' => 4,
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '!=', 'value' => '1' )
			),
			'output' => array(
				array( 'element' => '#logo .logo-title > h1 a, #logo .logo-title h2' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
		));
        

		# site-loader
		DRY_CLEANING_Kirki::add_field( $config, array(
			'type' => 'switch',
			'settings' => 'use-site-loader',
			'label'    => __( 'Use Site Loader?', 'dry-cleaning' ),
			'section'  => 'title_tagline',
			'priority' => 100,
			'default' => dry_cleaning_defaults( 'use-site-loader' )
		));

	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Site Breadcrumb
	DRY_CLEANING_Kirki::add_panel( 'dt_site_breadcrumb_panel', array(
		'title' => __( 'Site Breadcrumb', 'dry-cleaning' ),
		'description' => __('Site Breadcrumb','dry-cleaning'),
		'priority' => 25
	) );
	require_once get_template_directory() . '/kirki/options/site-breadcrumb.php';
	
	# Site Header
	DRY_CLEANING_Kirki::add_panel( 'dt_site_header_panel', array(
		'title' => __( 'Site Header', 'dry-cleaning' ),
		'description' => __('Site Header','dry-cleaning'),
		'priority' => 30
	) );
	require_once get_template_directory() . '/kirki/options/site-header.php';

	# Site Menu
	DRY_CLEANING_Kirki::add_panel( 'dt_site_menu_panel', array(
		'title' => __( 'Site Menu', 'dry-cleaning' ),
		'description' => __('Site Menu','dry-cleaning'),
		'priority' => 35
	) );
	require_once get_template_directory() . '/kirki/options/site-menu/navigation.php';		

	# Site Footer I
		DRY_CLEANING_Kirki::add_panel( 'dt_site_footer_i_panel', array(
			'title' => __( 'Site Footer I', 'dry-cleaning' ),
			'priority' => 40
		) );
		require_once get_template_directory() . '/kirki/options/site-footer-i.php';

	# Site Footer II
	DRY_CLEANING_Kirki::add_panel( 'dt_site_footer_ii_panel', array(
		'title' => __( 'Site Footer II', 'dry-cleaning' ),
		'priority' => 45
	) );
	#require_once get_template_directory() . '/kirki/options/site-footer-ii.php';

	# Site Footer Copyright
	DRY_CLEANING_Kirki::add_panel( 'dt_footer_copyright_panel', array(
		'title' => __( 'Site Copyright', 'dry-cleaning' ),
		'priority' => 50
	) );
	require_once get_template_directory() . '/kirki/options/site-footer-copyright.php';

	# Site Sociable
	require_once get_template_directory() . '/kirki/options/site-sociable.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	DRY_CLEANING_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => __( 'Typography', 'dry-cleaning' ),
		'description' => __('Typography Settings','dry-cleaning'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends