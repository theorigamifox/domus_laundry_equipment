<?php if( is_page() && !is_front_page() ):
		$post = dry_cleaning_global_variables('post');
		$page_id = ($post->ID == 0) ? get_queried_object_id() : $post->ID;
		dry_cleaning_breadcrumb_section( $page_id, 'page' );
	elseif( is_single() ):
		if( is_attachment() ):
		else:
			$post = dry_cleaning_global_variables('post');
			$post_type = get_post_type();

			if( $post_type === 'post' ) {
				dry_cleaning_breadcrumb_section( $post->ID, 'post' );
			} elseif( $post_type === 'dt_portfolios' ) {
				dry_cleaning_breadcrumb_section( $post->ID, 'dt_portfolios' );
			} elseif( $post_type === "product" ) {
				$title = get_the_title( $post->ID );
				dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-single-product");
			} elseif( $post_type === "forum" ){
				$title = get_the_title( $post->ID );
				dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-single-forum");
			} elseif( $post_type === "topic" ){
				$title = get_the_title( $post->ID );
				dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-single-topic");
			} elseif( in_array('events-single', get_body_class()) ) {
				dry_cleaning_breadcrumb_section( $post->ID, '' );
			} elseif( in_array('single-tribe_venue', get_body_class()) ) {
				$title = dry_cleaning_events_title();
				dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-single-venue");
			} elseif( in_array('single-tribe_organizer', get_body_class()) ) {
				$title = dry_cleaning_events_title();
				dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-single-organizer");
			} else {
				dry_cleaning_breadcrumb_section( $post->ID, '' );
            }			
		endif;
	elseif( is_home() && !is_front_page() ):
		$page_id = get_option('page_for_posts');
		dry_cleaning_breadcrumb_section( $page_id, 'page' );
	elseif( is_post_type_archive('tribe_events') ):
		$title = dry_cleaning_events_title();
		dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-events-archive");
	elseif( is_post_type_archive('forum') ):
		dry_cleaning_breadcrumb_section(  $post->ID , 'page' );
	elseif( is_post_type_archive('product') ):
		dry_cleaning_breadcrumb_section(  get_option('woocommerce_shop_page_id') , 'page' );
	elseif( is_post_type_archive('dt_portfolios') ):
		$title = esc_html__("Portfolio Archives",'dry-cleaning');
		dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-portfolio-archives");
	elseif( is_tax() ):
		$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
		$title = esc_html__("Archive for Term: ",'dry-cleaning').$term->name;
		dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-archive-term");
    elseif( is_category( ) ):
        $title = esc_html__("Archive for Category: ",'dry-cleaning');
        $title .= single_cat_title('',FALSE);
		dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-archive-category");
    elseif( is_tag() ):
        $title = esc_html__("Archive for Tag: ",'dry-cleaning');
        $title .= single_tag_title('',FALSE);
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-tags");
    elseif( is_month() ):
        $title = esc_html__("Archive for Month: ",'dry-cleaning');
        $title .=  get_the_time('F');
		dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-month");
    elseif( is_year() ):
        $title = esc_html__("Archive for Year: ",'dry-cleaning');
        $title .=  get_the_time('Y');
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-year");
    elseif(is_day() || is_time()):
        $title = esc_html__("Archive for Day: ",'dry-cleaning');
        $title .=  get_the_time('D');
		dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-day");
    elseif( is_author() ):
        $curauth = get_user_by('slug',get_query_var('author_name')) ;
        $title  = esc_html__("Archive for Author: ",'dry-cleaning');
        $title .= $curauth->nickname;
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-author");
	elseif(in_array('events-archive', get_body_class())):
		$title = dry_cleaning_events_title();
		dry_cleaning_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-events-archive");
    elseif( is_search() ):
        $title  = esc_html__("Search Result for ",'dry-cleaning');
        $title .= get_search_query();
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-search");
    elseif( is_404() ):
        $title  = esc_html__("Lost ",'dry-cleaning');
        $title .= esc_html__("Oops Nothing Found",'dry-cleaning');
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-404");
	elseif( function_exists('bbp_is_search') && bbp_is_search() ):	
        $title  = esc_html__("Search Forum",'dry-cleaning');
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-search");
	elseif( function_exists('bbp_is_reply_edit') && bbp_is_reply_edit() ):	
        $title  = esc_html__("Edit Reply",'dry-cleaning');
        dry_cleaning_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-search");
	endif;?>