<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'DRY_CLEANING_THEME_DIR', get_template_directory() );
define( 'DRY_CLEANING_THEME_URI', get_template_directory_uri() );
define( 'DRY_CLEANING_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'DRY_CLEANING_THEME_NAME', $themeData->get('Name'));
	define( 'DRY_CLEANING_THEME_VERSION', $themeData->get('Version'));
endif;
require_once( DRY_CLEANING_THEME_DIR .'/lib/custom-post-types.php' );

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( DRY_CLEANING_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
if( ! class_exists( 'CSFramework' ) ){

	define( 'CS_ACTIVE_TAXONOMY',   false );
	define( 'CS_ACTIVE_SHORTCODE',  false );
	define( 'CS_ACTIVE_CUSTOMIZE',  false );

	require_once DRY_CLEANING_THEME_DIR .'/cs-framework/cs-framework.php';
	
	/* ---------------------------------------------------------------------------
	 * Create function to get theme options
	 * --------------------------------------------------------------------------- */
	function dry_cleaning_cs_get_option($key, $value = '') {
	
		$v = cs_get_option( $key );
	
		if ( !empty( $v ) ) {
			return $v;
		} else {
			return $value;
		}
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'DRY_CLEANING_LANG_DIR', DRY_CLEANING_THEME_DIR. '/languages' );
load_theme_textdomain( 'dry-cleaning', DRY_CLEANING_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function dry_cleaning_admin_scripts() {
	wp_enqueue_style('dry-cleaning-admin', DRY_CLEANING_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'dry_cleaning_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-functions.php' );
require_once( DRY_CLEANING_THEME_DIR .'/framework/utils.php' );

// Header -----------------------------------------------------------------------
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-head.php' );

// Menu -------------------------------------------------------------------------
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-menu.php' );
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-mega-menu.php' );

// Hooks ------------------------------------------------------------------------
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-hooks.php' );

// Likes ------------------------------------------------------------------------
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-likes.php' );

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'dry_cleaning_widgets_init' );
function dry_cleaning_widgets_init() {
	require_once( DRY_CLEANING_THEME_DIR .'/framework/register-widgets.php' );

	if(class_exists('DTCorePlugin')) {
		register_widget('Dry_Cleaning_Twitter');
	}

	//register_widget('Dry_Cleaning_Flickr');
	register_widget('Dry_Cleaning_Recent_Posts');
	//register_widget('Dry_Cleaning_Portfolio_Widget');
}
if(class_exists('DTCorePlugin')) {
	require_once( DRY_CLEANING_THEME_DIR .'/framework/widgets/widget-twitter.php' );
}
require_once( DRY_CLEANING_THEME_DIR .'/framework/widgets/widget-flickr.php' );
require_once( DRY_CLEANING_THEME_DIR .'/framework/widgets/widget-recent-posts.php' );
require_once( DRY_CLEANING_THEME_DIR .'/framework/widgets/widget-recent-portfolios.php' );

// Plugins ---------------------------------------------------------------------- 
require_once( DRY_CLEANING_THEME_DIR .'/framework/register-plugins.php' );

require_once('lib/custom-post-types.php');

function foundationpress_sidebar_widgets() {
    register_sidebar(array(
        'id' => 'mailchimp',
        'name' => __('Mailchimp', 'FoundationPress'),
        'description' => __('Drag mailchimp to this widget', 'domuslaundry'),
        'before_widget' => '<div id="%1$s" class=" widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
};
add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );