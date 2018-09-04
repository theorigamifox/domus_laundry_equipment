<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------
// Custom Widgets                    -
// -----------------------------------------
function dry_cleaning_custom_widgets() {
  $custom_widgets = array();
  $widgets = is_array( cs_get_option( 'widgetarea-custom' ) ) ? cs_get_option( 'widgetarea-custom' ) : array();
  $widgets = array_filter($widgets);

  if( isset( $widgets ) ):
    foreach ( $widgets as $widget ) :
      $id = mb_convert_case($widget['widgetarea-custom-name'], MB_CASE_LOWER, "UTF-8");
      $id = str_replace(" ", "-", $id);
      $custom_widgets[$id] = $widget['widgetarea-custom-name'];
    endforeach;
  endif;

  return $custom_widgets;
}

// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function dry_cleaning_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','dry-cleaning') );

  if( dry_cleaning_is_plugin_active('LayerSlider/layerslider.php') ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function dry_cleaning_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','dry-cleaning') );

  if(dry_cleaning_is_plugin_active('revslider/revslider.php')) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------
$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'dry-cleaning'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'dry-cleaning' ),
      'options'      => array(
          'content-full-width'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
          'with-left-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
          'with-right-sidebar'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
          'with-both-sidebar'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
          'fullwidth'            => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/fullwidth.png',
      ),
      'default'      => 'content-full-width',
	  'info'		 => esc_html__('Layout "fullwidth" only apply for portfolio template.', 'dry-cleaning'),
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'dry-cleaning' ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'dry-cleaning' ),
      'class'     => 'chosen',
      'options'   => dry_cleaning_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','dry-cleaning'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'dry-cleaning' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'dry-cleaning' ),
      'class'     => 'chosen',
      'options'   => dry_cleaning_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','dry-cleaning'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    )
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'dry-cleaning'),
  'icon'  => 'fa fa-arrows-h',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'dry-cleaning' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'dry-cleaning'),
  'icon'  => 'fa fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => __('Slider tab works only if breadcrumb disabled.','dry-cleaning'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'dry-cleaning' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),

    array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'dry-cleaning' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','dry-cleaning'),
        'layerslider'      => esc_html__('Layer slider','dry-cleaning'),
        'revolutionslider' => esc_html__('Revolution slider','dry-cleaning'),
        'customslider'     => esc_html__('Custom Slider Shortcode','dry-cleaning'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'dry-cleaning' ),
     'options'     => dry_cleaning_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'dry-cleaning' ),
      'options'     => dry_cleaning_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'dry-cleaning' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' )
    ),
  )  
);

// -----------------------------------------
// Blog Template Section
// -----------------------------------------
$blog_template_section = array(
  'name'  => 'blog_template_section',
  'title' => esc_html__('Blog Template', 'dry-cleaning'),
  'icon'  => 'fa fa-files-o',
  'fields' =>  array(
    array(
      'id'           => 'blog-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => __('Blog Tab Works only if page template set to Blog Template in Page Attributes','dry-cleaning'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'                     => 'blog-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'dry-cleaning' ),
      'options'                => array(
          'one-column'         => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-column.png',
          'one-half-column'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-third-column.png',
      ),
      'default'                => 'one-half-column'
    ),
    array(
      'id'                     => 'blog-post-style',
      'type'                   => 'select',
      'title'                  => esc_html__('Post Style', 'dry-cleaning' ),
      'options'                => array(
        'default' => esc_html__('Default','dry-cleaning'),
        'entry-date-left'    => esc_html__('Date Left','dry-cleaning'),
        'entry-date-author-left' => esc_html__('Date and Author Left','dry-cleaning'),
        'blog-medium-style'  => esc_html__('Medium','dry-cleaning'),
        'blog-medium-style dt-blog-medium-highlight' => esc_html__('Medium Highlight','dry-cleaning'),
        'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight' => esc_html__('Medium Skin Highlight','dry-cleaning')
      ),
    ),
    array(
      'id'      => 'enable-blog-readmore',
      'type'    => 'switcher',
      'title'   => esc_html__('Read More', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-readmore',
      'type'         => 'textarea',
      'title'        => esc_html__('Read More Shortcode', 'dry-cleaning' ),
      'default'      => '[dt_sc_button title="Read More" style="filled" icon_type="fontawesome" iconalign="icon-right with-icon" iconclass="fa fa-long-arrow-right" class="type1" /]',
      'dependency'   => array( 'enable-blog-readmore', '==', 'true' ),
    ),
    array(
      'id'      => 'blog-post-excerpt',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Excerpt', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-post-excerpt-length',
      'type'         => 'number',
      'title'        => esc_html__('Excerpt Length', 'dry-cleaning' ),
      'default'      => '45',
      'dependency'   => array( 'blog-post-excerpt', '==', 'true' ),
    ),
    array(
      'id'           => 'blog-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'dry-cleaning' ),
      'default'      => '-1',      
    ),
    array(
      'id'             => 'blog-post-cats',
      'type'           => 'select',
      'title'          => esc_html__('Categories','dry-cleaning'),
      'options'        => 'categories',
      'default_option' => esc_html__('Select a categories','dry-cleaning'),
      'class'              => 'chosen',
      'attributes'         => array(
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to exclude from your blog page.','dry-cleaning'),
    ),
    array(
      'id'      => 'show-postformat-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Format Info', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'      => 'show-author-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Author Info', 'dry-cleaning' ),
      'default' => true,
    ),
    array(
      'id'      => 'show-date-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Date Info', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'      => 'show-comment-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Comment Info', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'      => 'show-category-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Category Info', 'dry-cleaning' ),
      'default' => true
    ),
    array(
      'id'      => 'show-tag-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Tag Info', 'dry-cleaning' ),
      'default' => true
    )    
  )
);

// -----------------------------------------
// One Page Template Section
// -----------------------------------------
$one_page_template_section = array(
  'name'  => 'one_page_template_section',
  'title' => esc_html__('One Page Template', 'dry-cleaning'),
  'icon'  => 'fa fa-file-o',
  'fields' =>  array(
    array(
      'id'           => 'one-page-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => __('One Page Tab Works only if page template set to One Page Template in Page Attributes','dry-cleaning'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'            => 'onepage_menu',
      'type'          => 'select',
      'title'         => esc_html__('Menu', 'dry-cleaning' ),
      'options'       => 'categories',
      'query_args'  => array(
        'post_type' => 'nav_menu_item',
        'taxonomy'  => 'nav_menu',
      ),
      'default_option' => __('Select a Menu','dry-cleaning'),
    ),
  )
);

// -----------------------------------------
// Portfolio Template Section
// -----------------------------------------
$portfolio_template_section = array(
  'name'  => 'portfolio_template_section',
  'title' => esc_html__('Portfolio Template', 'dry-cleaning'),
  'icon'  => 'fa fa-picture-o',
  'fields' =>  array(

    array(
      'id'           => 'portfolio-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => __('Portfolio Tab Works only if page template set to Portfolio Template in Page Attributes','dry-cleaning'),
      'class'        => 'margin-30 cs-success',      
    ),

    array(
      'id'                     => 'portfolio-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'dry-cleaning' ),
      'options'                => array(
          'one-half-column'    => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-third-column.png',
          'one-fourth-column'  => DRY_CLEANING_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
      ),
      'default'                => 'one-half-column'
    ),

    array(
      'id'      => 'portfolio-post-style',
      'type'    => 'select',
      'title'   => esc_html__('Post Style', 'dry-cleaning' ),
      'options' => array(
        'type1' => esc_html__('Modern Title','dry-cleaning'),
        'type2' => esc_html__('Title & Icons Overlay','dry-cleaning'),
        'type3' => esc_html__('Title Overlay','dry-cleaning'),
        'type4' => esc_html__('Icons Only','dry-cleaning'),
        'type5' => esc_html__('Classic','dry-cleaning'),
        'type6' => esc_html__('Minimal Icons','dry-cleaning'),
        'type7' => esc_html__('Presentation','dry-cleaning'),
        'type8' => esc_html__('Girly','dry-cleaning'),
        'type9' => esc_html__('Art','dry-cleaning'),
      ),
    ),

    array(
      'id'      => 'portfolio-grid-space',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Grid Space', 'dry-cleaning' ),
      'default' => true,
      'info'    => esc_html__('YES! to allow grid space in between portfolio item','dry-cleaning')
    ),

    array(
      'id'      => 'filter',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Filters', 'dry-cleaning' ),
      'default' => true,
      'info'    => esc_html__('YES! to allow filter options for portfolio items','dry-cleaning')
    ),

    array(
      'id'           => 'portfolio-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'dry-cleaning' ),
      'default'      => '-1',      
    ),

    array(
      'id'             => 'portfolio-categories',
      'type'           => 'select',
      'title'          => esc_html__('Categories','dry-cleaning'),
      'options'        => 'categories',
      'class'          => 'chosen',
      'query_args'     => array(
        'type'         => 'dt_portfolios',
        'taxonomy'     => 'portfolio_entries',
        'orderby'      => 'post_date',
        'order'        => 'DESC',
      ),
      'attributes'         => array(
        'data-placeholder' => esc_html__('Select a categories','dry-cleaning'),
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to show in portfolio items.','dry-cleaning'),
    ),   
  )
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[] = array(
	'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','dry-cleaning'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
		$meta_layout_section,
		$meta_breadcrumb_section,
		$meta_slider_section,
		
		$blog_template_section,
		//$one_page_template_section,
		$portfolio_template_section
    )
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'dry-cleaning' );
	unset( $fields[0]['options']['with-both-sidebar'] );
	unset( $fields[0]['info'] );
	unset( $fields[0]['options']['fullwidth'] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  
	
	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'dry-cleaning'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'dry-cleaning' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'dry-cleaning'),
					'status'	=> esc_html__('Status','dry-cleaning'),
					'quote'		=> esc_html__('Quote','dry-cleaning'),
					'gallery'	=> esc_html__('Gallery','dry-cleaning'),
					'image'		=> esc_html__('Image','dry-cleaning'),
					'video'		=> esc_html__('Video','dry-cleaning'),
					'audio'		=> esc_html__('Audio','dry-cleaning'),
					'link'		=> esc_html__('Link','dry-cleaning'),
					'aside'		=> esc_html__('Aside','dry-cleaning'),
					'chat'		=> esc_html__('Chat','dry-cleaning')
				)
			),

			array(
				'id'      => 'show-featured-image',
				'type'    => 'switcher',
				'title'   => esc_html__('Show Featured Image', 'dry-cleaning' ),
				'default' => true,
				'info'    => esc_html__('YES! to show featured image','dry-cleaning')
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'dry-cleaning' ),
				'add_title'   => esc_html__('Add Images', 'dry-cleaning' ),
				'edit_title'  => esc_html__('Edit Images', 'dry-cleaning' ),
				'clear_title' => esc_html__('Remove Images', 'dry-cleaning' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'dry-cleaning' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','dry-cleaning'),
					'self' => esc_html__('Self Hosted','dry-cleaning'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'dry-cleaning' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','dry-cleaning'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'dry-cleaning' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'dry-cleaning'),
      'type2'  => esc_html__('Full Width','dry-cleaning'),
      'type3'  => esc_html__('Minimal Tab','dry-cleaning'),
      'type4'  => esc_html__('Clean','dry-cleaning'),
      'type5'  => esc_html__('Modern','dry-cleaning'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'dry-cleaning')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','dry-cleaning'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );

	
CSFramework_Metabox::instance( $options );