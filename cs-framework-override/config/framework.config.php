<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('DRY_CLEANING_THEME_NAME').' '.esc_html__('Options', 'dry-cleaning'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'dry-cleaning',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => __('Designthemes Framework <small>by Designthemes</small>', 'dry-cleaning'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'dry-cleaning'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'dry-cleaning' ),
	),

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'dry-cleaning'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'dry-cleaning'),
	  'default'      => 'true',
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'dry-cleaning'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'dry-cleaning'),
	),

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'dry-cleaning'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'dry-cleaning'),
	),

	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'dry-cleaning'),
	  'attributes' => array( 
		'placeholder' => 'NIzaSyKIHTR6h1tdLOWv01IrJj6lss2ISnatYq0'
	  ),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'dry-cleaning').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'dry-cleaning'),
	  'attributes' => array(
		'placeholder' => 'b54a1d38b2547d601a324kaja4d4lao3-us3'
	  ),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'dry-cleaning').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'dry-cleaning'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'dry-cleaning'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'dry-cleaning' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'dry-cleaning'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'dry-cleaning')
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'dry-cleaning'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'dry-cleaning')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'dry-cleaning'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'dry-cleaning'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'dry-cleaning' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'dry-cleaning'),
			'options'    => array(
			  'content-full-width'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'dry-cleaning'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'dry-cleaning'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'dry-cleaning' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'dry-cleaning'),
			'options'      => array(
			  'one-column' 		  => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'dry-cleaning'),
			'info'		 => esc_html__('YES! to allow excerpt', 'dry-cleaning'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'dry-cleaning'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'dry-cleaning').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'dry-cleaning'),
			'info'		 => esc_html__('YES! to enable read more button', 'dry-cleaning'),
			'default'	 => true,
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'dry-cleaning'),
			'info'		 => esc_html__('Paste any button shortcode here', 'dry-cleaning'),
			'default'	 => '[dt_sc_button title="Read More" style="filled" icon_type="fontawesome" iconalign="icon-right with-icon" iconclass="fa fa-long-arrow-right" class="type1"]',
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'dry-cleaning' ),
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'dry-cleaning'),
			'options'      => array(
			  'default' 		=> esc_html__('Default', 'dry-cleaning'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'dry-cleaning'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'dry-cleaning'),
			  'blog-medium-style'       => esc_html__('Medium', 'dry-cleaning'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'dry-cleaning'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'dry-cleaning'),
			),
			'class'        => 'chosen',
			'default'      => 'default',
			'info'         => esc_html__('Choose post style to display single blog posts and archives.', 'dry-cleaning'),
		  ),
		  
		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'dry-cleaning'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'dry-cleaning'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'dry-cleaning'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'dry-cleaning'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show post category information', 'dry-cleaning'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show post tag information', 'dry-cleaning'),
			'default' => true
		  ),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'dry-cleaning'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'dry-cleaning' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'dry-cleaning'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'dry-cleaning'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'dry-cleaning'),
			  'type2'      => esc_html__('Classic', 'dry-cleaning'),
			  'type4'  	   => esc_html__('Diamond', 'dry-cleaning'),
			  'type5'      => esc_html__('Shadow', 'dry-cleaning'),
			  'type6'      => esc_html__('Diamond Alt', 'dry-cleaning'),
			  'type7'  	   => esc_html__('Stack', 'dry-cleaning'),
			  'type8'  	   => esc_html__('Minimal', 'dry-cleaning'),
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of not-found template page.', 'dry-cleaning')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'dry-cleaning')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'dry-cleaning'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'dry-cleaning'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'dry-cleaning')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'dry-cleaning' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'dry-cleaning')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'dry-cleaning'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'dry-cleaning')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'dry-cleaning'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'dry-cleaning' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'dry-cleaning')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'dry-cleaning'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'dry-cleaning'),
			  'type2'      => esc_html__('Teaser', 'dry-cleaning'),
			  'type3'  	   => esc_html__('Minimal', 'dry-cleaning'),
			  'type4'      => esc_html__('Counter Only', 'dry-cleaning'),
			  'type5'      => esc_html__('Belt', 'dry-cleaning'),
			  'type6'  	   => esc_html__('Classic', 'dry-cleaning'),
			  'type7'  	   => esc_html__('Boxed', 'dry-cleaning')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'dry-cleaning'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'dry-cleaning')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'dry-cleaning'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'dry-cleaning'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'dry-cleaning')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'dry-cleaning' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'dry-cleaning'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'dry-cleaning'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'dry-cleaning').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'dry-cleaning'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'dry-cleaning'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'dry-cleaning')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'dry-cleaning'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'dry-cleaning'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'dry-cleaning'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'dry-cleaning' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'dry-cleaning'),
		'options'      => array(
		  'type1' 	   => esc_html__('Double Border', 'dry-cleaning'),
		  'type2'      => esc_html__('Tooltip', 'dry-cleaning'),
		  'type3'  	   => esc_html__('Title Top Border', 'dry-cleaning'),
		  'type4'      => esc_html__('Left Border & Pattren', 'dry-cleaning'),
		  'type5'      => esc_html__('Bottom Border', 'dry-cleaning'),
		  'type6'  	   => esc_html__('Tooltip Border', 'dry-cleaning'),
		  'type7'  	   => esc_html__('Boxed Modern', 'dry-cleaning'),
		  'type8'  	   => esc_html__('Elegant Border', 'dry-cleaning'),
		  'type9' 	   => esc_html__('Needle', 'dry-cleaning'),
		  'type10' 	   => esc_html__('Ribbon', 'dry-cleaning'),
		  'type11' 	   => esc_html__('Content Background', 'dry-cleaning'),
		  'type12' 	   => esc_html__('Classic BG', 'dry-cleaning'),
		  'type13' 	   => esc_html__('Tiny Boders', 'dry-cleaning'),
		  'type14' 	   => esc_html__('BG & Border', 'dry-cleaning'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'dry-cleaning'),
		  'type16' 	   => esc_html__('Left Border & BG', 'dry-cleaning'),
		  'type17' 	   => esc_html__('Basic', 'dry-cleaning'),
		  'type18' 	   => esc_html__('BG & Pattern', 'dry-cleaning'),
		),
		'class'          => 'chosen',
		'default_option' => esc_html__('Choose any type', 'dry-cleaning'),
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'dry-cleaning')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'dry-cleaning'),
		'button_title'    => esc_html__('Add New', 'dry-cleaning'),
		'accordion_title' => esc_html__('Add New Widget Area', 'dry-cleaning'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'dry-cleaning'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'dry-cleaning'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'dry-cleaning' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'dry-cleaning'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'dry-cleaning').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'dry-cleaning'),
			'options'      => array(
			  'type1' 	   => esc_html__('Thick Border', 'dry-cleaning'),
			  'type2'      => esc_html__('Pattern Overlay', 'dry-cleaning'),
			  'type3'  	   => esc_html__('Thin Border', 'dry-cleaning'),
			  'type4'      => esc_html__('Diamond Icons', 'dry-cleaning'),
			  'type5'      => esc_html__('Girly', 'dry-cleaning'),
			  'type6'  	   => esc_html__('Push Animation', 'dry-cleaning'),
			  'type7' 	   => esc_html__('Dual Color BG', 'dry-cleaning'),
			  'type8' 	   => esc_html__('Modern', 'dry-cleaning'),
			  'type9' 	   => esc_html__('Diamond & Border', 'dry-cleaning'),
			  'type10' 	   => esc_html__('Easing', 'dry-cleaning'),
			  'type11' 	   => esc_html__('Boxed', 'dry-cleaning'),
			  'type12' 	   => esc_html__('Easing Alt', 'dry-cleaning'),
			  'type13' 	   => esc_html__('Parallel', 'dry-cleaning'),
			  'type14' 	   => esc_html__('Pointer', 'dry-cleaning'),
			  'type15' 	   => esc_html__('Diamond Flip', 'dry-cleaning'),
			  'type16' 	   => esc_html__('Stack', 'dry-cleaning'),
			  'type17' 	   => esc_html__('Bouncy', 'dry-cleaning'),
			  'type18' 	   => esc_html__('Hexagon', 'dry-cleaning'),
			  'type19' 	   => esc_html__('Masked Diamond', 'dry-cleaning'),
			  'type20' 	   => esc_html__('Masked Circle', 'dry-cleaning'),
			  'type21' 	   => esc_html__('Classic', 'dry-cleaning'),
			),
			'class'        => 'chosen',
			'default' 	   => 'type1',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'dry-cleaning')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'dry-cleaning'),
			'options'    => array(
			  'one-half-column'     => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  'one-fourth-column'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'dry-cleaning' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'dry-cleaning'),
			'options'      => array(
			  'content-full-width'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'dry-cleaning'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'dry-cleaning'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'dry-cleaning'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'dry-cleaning')
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'dry-cleaning' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'dry-cleaning'),
			'options'      => array(
			  'content-full-width'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'dry-cleaning'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'dry-cleaning'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'dry-cleaning' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'dry-cleaning'),
			'options'      => array(
			  'content-full-width'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'dry-cleaning'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'dry-cleaning'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

	  ),
	);
}

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'dry-cleaning'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'dry-cleaning' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'dry-cleaning'),
		'info'	=> esc_html__("YES! to enable top hook.", 'dry-cleaning')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'dry-cleaning'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'dry-cleaning')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'dry-cleaning' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'dry-cleaning'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'dry-cleaning')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'dry-cleaning'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'dry-cleaning')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'dry-cleaning' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'dry-cleaning'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'dry-cleaning')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'dry-cleaning'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'dry-cleaning')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'dry-cleaning' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'dry-cleaning'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'dry-cleaning')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'dry-cleaning'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'dry-cleaning')
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'dry-cleaning'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'dry-cleaning')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('DRY_CLEANING_THEME_NAME').esc_html__(' Log', 'dry-cleaning'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('DRY_CLEANING_THEME_NAME').esc_html__(' Theme Change Log', 'dry-cleaning')
    ),
    array(
      'type'    => 'content',
      'content' => '<pre>
2017.05.30 - version 1.0
 * First release!
 
2017.09.27 - version 1.1
 * Compatible with wordpress 4.8.2
 * Updated plugins layer slider-6.5.8,Revolution slider-5.4.6 and eForm-4.0.1
 * Fixed notice issues
 * Compatible with PHP 7   </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'dry-cleaning'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );