<?php
function dry_cleaning_kirki_config() {
	return 'dry_cleaning_kirki_config';
}

function dry_cleaning_defaults( $key = '' ) {
	$defaults = array();

	$defaults['predefined-skin'] = 'blue';

	$defaults['site-responsive'] = '1';
	$defaults['site-layout'] = 'boxed';

	$defaults['site_icon'] = get_template_directory_uri().'/images/favicon.ico';

	# use-custom-logo
	$defaults['use-custom-logo'] = '1';

	# custom-logo
	$defaults['custom-logo'] = get_template_directory_uri().'/images/logo.png';

	# custom-logo
	$defaults['custom-dark-logo'] = get_template_directory_uri().'/images/light-logo.png';

	$defaults['header-type'] = 'fullwidth-header header-align-left fullwidth-menu-header';
	$defaults['enable-sticy-nav'] = '1';
	$defaults['header-position'] = 'above slider';
	$defaults['enable-header-darkbg'] = '0';

	$defaults['enable-header-left-content'] = '0';
	$defaults['enable-header-right-content'] = '1';
	$defaults['enable-top-bar-content'] = '1';
	
	#Breadcrumb
		$defaults['show-breadcrumb'] = '1';
		$defaults['breadcrumb-delimiter'] = 'fa default';
		$defaults['breadcrumb-style'] = 'default';
		$defaults['customize-breadcrumb-title-typo'] = '0';
		$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '20px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-transform' => 'none' );
		$defaults['customize-breadcrumb-typo'] = '0';
		$defaults['breadcrumb-typo'] = array( 'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '20px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-transform' => 'none' );
		
	/**
	 * MENU
	 */
	$defaults['sub-menu-box-h-shadow'] =  5;
	$defaults['sub-menu-box-v-shadow'] =  5;
	$defaults['sub-menu-box-blur-shadow'] =  5;
	$defaults['sub-menu-box-spread-shadow'] =  5;
	$defaults['menu-active-style'] = 'menu-active-border-with-arrow';
	$defaults['menu-hover-style'] = 'fadeInLeft';

	/*
	 * FOOTER SETTINGS
	 */

		# show-footer
		$defaults['show-footer'] = '0';
		$defaults['customize-footer-bg'] = '1';
		$defaults['footer-bg-color'] = '#47474C';

		# footer-columns
		$defaults['footer-columns'] = '3';

		$defaults['footer-sociables'] = array( 'delicious', 'dribbble', 'facebook');

		# show-footer
		$defaults['enable-footer-darkbg'] = '0';

		# customize-footer-title-typo
		$defaults['customize-footer-title-typo'] = '0';

		#footer-title-typo
		$defaults['footer-title-typo'] = array( 'font-family' => 'Roboto',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-align' => 'left',
		'text-transform' => 'none' );

		# customize-footer-content-typo
		$defaults['customize-footer-content-typo'] = '0';

		#footer-content-typo
		$defaults['footer-content-typo'] = array( 'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '20px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-align' => 'left',
			'text-transform' => 'none' );

		#footer-ii-content-typo
		$defaults['footer-ii-content-typo'] = array( 'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '20px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-align' => 'left',
			'text-transform' => 'none' );		

		# show-copyright-text
		$defaults['show-copyright-text'] = '1';

		# copyright-text
		$defaults['copyright-text'] = '&copy; 2017 Dry Cleaning. All rights reserved. Design by <a title="" href="http://themeforest.net/user/designthemes">DesignThemes</a>';

		# enable-copyright-darkbg
		$defaults['enable-copyright-darkbg'] = '0';

		# customize-footer-copyright-text-typo
		$defaults['customize-footer-copyright-text-typo'] = '0';

		# footer-copyright-text-typo
		$defaults['footer-copyright-text-typo'] = array( 'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '20px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-align' => 'left',
			'text-transform' => 'none' );

		# customize-footer-menu-typo
		$defaults['customize-footer-copyright-text-typo'] = '0';

		# footer-menu-typo
		$defaults['footer-menu-typo'] = array( 'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '20px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-align' => 'left',
			'text-transform' => 'none' );

	# copyright-next
	$defaults['copyright-next'] = 'footer-menu';


	# WooCommerce
	$defaults['product-style'] = 'type1';
	$defaults['product-per-page'] = '9';
	$defaults['product-per-row'] = 'one-third-column';

	$defaults['product-page-layout'] = 'content-full-width';
	$defaults['show-product-page-left-sidebar'] = '1';
	$defaults['show-product-page-right-sidebar'] = '1';

	$defaults['product-category-page-layout'] = 'content-full-width';
	$defaults['show-product-category-page-left-sidebar'] = '1';
	$defaults['show-product-category-page-right-sidebar'] = '1';	

	$defaults['product-tag-page-layout'] = 'content-full-width';
	$defaults['show-product-tag-page-left-sidebar'] = '1';
	$defaults['show-product-tag-page-right-sidebar'] = '1';

	# Social
	$defaults['social-facebook'] = '#';
	$defaults['social-twitter'] = '#';
	$defaults['social-google-plus'] = '#';
	$defaults['social-instagram'] = '#';

	# Typography
	$defaults['menu-typo'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-transform' => 'none'
	);

	$defaults['body-content-typo'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000'
	);
	
	$defaults['h1'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h2'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h3'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h4'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h5'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h6'] = array(
		'font-family' => 'Raleway',
		'font-size' => '',
		'line-height' => '1.5',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);				

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function dry_cleaning_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','dry-cleaning'),
		"top center"    => esc_attr__('Top Center','dry-cleaning'),
		"top right"     => esc_attr__('Top Right','dry-cleaning'),
		"center left"   => esc_attr__('Center Left','dry-cleaning'),
		"center center" => esc_attr__('Center Center','dry-cleaning'),
		"center right"  => esc_attr__('Center Right','dry-cleaning'),
		"bottom left"   => esc_attr__('Bottom Left','dry-cleaning'),
		"bottom center" => esc_attr__('Bottom Center','dry-cleaning'),
		"bottom right"  => esc_attr__('Bottom Right','dry-cleaning'),
	);

	return $positions;
}

function dry_cleaning_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','dry-cleaning'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','dry-cleaning'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','dry-cleaning'),
		"no-repeat" => esc_attr__('No Repeat','dry-cleaning')
	);

	return $image_repeats;
}

function dry_cleaning_border_styles() {

	$image_repeats = array(
		"dotted" => esc_attr__('Dotted','dry-cleaning'),
		"dashed" => esc_attr__('Dashed','dry-cleaning'),
		"solid"	 => esc_attr__('Solid','dry-cleaning'),
		"double" => esc_attr__('Double','dry-cleaning'),
		"groove" => esc_attr__('Groove','dry-cleaning'),
		"ridge"	 => esc_attr__('Ridge','dry-cleaning'),
	);

	return $image_repeats;
}

function dry_cleaning_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','dry-cleaning'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'dry-cleaning'),
        "bounce"             =>  esc_attr__("bounce",'dry-cleaning'),
        "bounceIn"           =>  esc_attr__("bounceIn",'dry-cleaning'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'dry-cleaning'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'dry-cleaning'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'dry-cleaning'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'dry-cleaning'),
        "bounceOut"          =>  esc_attr__("bounceOut",'dry-cleaning'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'dry-cleaning'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'dry-cleaning'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'dry-cleaning'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'dry-cleaning'),
        "expandOpen"         =>  esc_attr__("expandOpen",'dry-cleaning'),
        "expandUp"           =>  esc_attr__("expandUp",'dry-cleaning'),
        "fadeIn"             =>  esc_attr__("fadeIn",'dry-cleaning'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'dry-cleaning'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'dry-cleaning'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'dry-cleaning'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'dry-cleaning'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'dry-cleaning'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'dry-cleaning'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'dry-cleaning'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'dry-cleaning'),
        "fadeOut"            =>  esc_attr__("fadeOut",'dry-cleaning'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'dry-cleaning'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'dry-cleaning'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'dry-cleaning'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'dry-cleaning'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'dry-cleaning'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'dry-cleaning'),
        "flash"              =>  esc_attr__("flash",'dry-cleaning'),
        "flip"               =>  esc_attr__("flip",'dry-cleaning'),
        "flipInX"            =>  esc_attr__("flipInX",'dry-cleaning'),
        "flipInY"            =>  esc_attr__("flipInY",'dry-cleaning'),
        "flipOutX"           =>  esc_attr__("flipOutX",'dry-cleaning'),
        "flipOutY"           =>  esc_attr__("flipOutY",'dry-cleaning'),
        "floating"           =>  esc_attr__("floating",'dry-cleaning'),
        "hatch"              =>  esc_attr__("hatch",'dry-cleaning'),
        "hinge"              =>  esc_attr__("hinge",'dry-cleaning'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'dry-cleaning'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'dry-cleaning'),
        "pullDown"           =>  esc_attr__("pullDown",'dry-cleaning'),
        "pullUp"             =>  esc_attr__("pullUp",'dry-cleaning'),
        "pulse"              =>  esc_attr__("pulse",'dry-cleaning'),
        "rollIn"             =>  esc_attr__("rollIn",'dry-cleaning'),
        "rollOut"            =>  esc_attr__("rollOut",'dry-cleaning'),
        "rotateIn"           =>  esc_attr__("rotateIn",'dry-cleaning'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'dry-cleaning'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'dry-cleaning'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'dry-cleaning'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'dry-cleaning'),
        "rotateOut"          =>  esc_attr__("rotateOut",'dry-cleaning'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'dry-cleaning'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'dry-cleaning'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'dry-cleaning'),
        "shake"              =>  esc_attr__("shake",'dry-cleaning'),
        "slideDown"          =>  esc_attr__("slideDown",'dry-cleaning'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'dry-cleaning'),
        "slideLeft"          =>  esc_attr__("slideLeft",'dry-cleaning'),
        "slideRight"         =>  esc_attr__("slideRight",'dry-cleaning'),
        "slideUp"            =>  esc_attr__("slideUp",'dry-cleaning'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'dry-cleaning'),
        "stretchRight"       =>  esc_attr__("stretchRight",'dry-cleaning'),
        "swing"              =>  esc_attr__("swing",'dry-cleaning'),
        "tada"               =>  esc_attr__("tada",'dry-cleaning'),
        "tossing"            =>  esc_attr__("tossing",'dry-cleaning'),
        "wobble"             =>  esc_attr__("wobble",'dry-cleaning'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'dry-cleaning'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'dry-cleaning'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'dry-cleaning')
    );

	return $animations;
}