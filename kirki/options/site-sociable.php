<?php
$config = dry_cleaning_kirki_config();

DRY_CLEANING_Kirki::add_section( 'dt_sociable_section', array(
	'title' => __( 'Site Sociable', 'dry-cleaning' ),
	'priority' => 190
) );

	# Delicious
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-delicious',
		'label'	   => __( 'Delicious', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'	
	));

	# Deviantart 
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-deviantart',
		'label'	   => __( 'Deviantart', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Digg 
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-digg',
		'label'	   => __( 'Digg', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Dribbble
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-dribbble',
		'label'	   => __( 'Dribbble', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Envelope
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-envelope',
		'label'	   => __( 'Envelope', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));			

	# Facebook
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-facebook',
		'label'	   => __( 'Facebook', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Flickr
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-flickr',
		'label'    => __( 'Flickr', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Google Plus
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-google-plus',
		'label'	   => __( 'Google Plus', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# GTalk
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-gtalk',
		'label'	   => __( 'GTalk', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Instagram
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-instagram',
		'label'	   => __( 'Instagram', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Lastfm
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-lastfm',
		'label'	   => __( 'Lastfm', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Linkedin
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-linkedin',
		'label'    => __( 'Linkedin', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Myspace
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-myspace',
		'label'	   => __( 'Myspace', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));							

	# Picasa
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-picasa',
		'label'    => __( 'Picasa', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Pinterest
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-pinterest',
		'label'	   => __( 'Pinterest', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Reddit
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-reddit',
		'label'	   => __( 'Reddit', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# RSS
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-rss',
		'label'	   => __( 'RSS', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Skype
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-skype',
		'label'	   => __( 'Skype', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Stumbleupon 
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-stumbleupon',
		'label'	   => __( 'Stumbleupon', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Technorati
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-technorati',
		'label'    => __( 'Technorati', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Tumblr
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-tumblr',
		'label'	   => __( 'Tumblr', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Twitter 
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-twitter',
		'label'	   => __( 'Twitter', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Viadeo
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-viadeo',
		'label'	   => __( 'Viadeo', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Vimeo
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-vimeo',
		'label'	   => __( 'Vimeo', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Yahoo
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-yahoo',
		'label'	   => __( 'Yahoo', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));

	# Youtube
	DRY_CLEANING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-youtube',
		'label'	   => __( 'Youtube', 'dry-cleaning' ),
		'section'  => 'dt_sociable_section',
	));