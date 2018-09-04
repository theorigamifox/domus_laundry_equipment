<?php
add_filter( 'wpsl_templates', 'dry_cleaning_wpsl_custom_templates' );
if (!function_exists('dry_cleaning_wpsl_custom_templates')) {
	function dry_cleaning_wpsl_custom_templates( $templates ) {

	    $templates[] = array (
	        'id'   => 'custom',
	        'name' => __('Custom template', 'dry-cleaning' ),
	        'path' => DRY_CLEANING_THEME_DIR . '/' . 'wpsl-templates/custom.php',
	    );

	    return $templates;
	}
}

add_filter( 'wpsl_thumb_size', 'dry_cleaning_wpsl_custom_thumb_size' );
if (!function_exists('dry_cleaning_wpsl_custom_thumb_size')) {
	function dry_cleaning_wpsl_custom_thumb_size() {    
	    $size = array( 90, 90 );
	    return $size;	
	}
}