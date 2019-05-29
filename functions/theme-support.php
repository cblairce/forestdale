<?php

// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	
	
} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );

function yourtheme_add_ctc_support() {
 
	/**
	 * Plugin Support
	 *
	 * Tell plugin theme supports it. This leaves all features disabled so they can
	 * be enabled explicitly below. When support not added, all features are revealed
	 * so user can access content (in case switched to an unsupported theme).
	 *
	 * This also removes the plugin's "not using compatible theme" message.
	 */
   
   
	/**
	 * Plugin Features
	 *
	 * When array of arguments not given, plugin defaults are used (enabling all taxonomies
	 * and fields for feature). It is recommended to explicitly specify taxonomies and
	 * fields used by theme so plugin updates don't reveal unsupported features.
	 */

	add_theme_support( 'church-theme-content' );


	add_theme_support( 'ctc-sermons', array(
	  'taxonomies' => array(
		'ctc_sermon_book',
		'ctc_sermon_series',
		'ctc_sermon_speaker'
	  ),
	  'fields'     => array(
		'_ctc_sermon_video',
		'_ctc_sermon_audio',
		'_ctc_sermon_pdf'
	  )
	) );
  
	add_theme_support( 'ctc-events', array(
	  'taxonomies' => array( 'ctc_event_category' ),
	  'fields'     => array(
		'_ctc_event_start_date',
		'_ctc_event_end_date',
		'_ctc_event_start_time',
		'_ctc_event_end_time',
		'_ctc_event_recurrence',
		'_ctc_event_recurrence_end_date',
		'_ctc_event_venue',
		'_ctc_event_address',
		'_ctc_event_map_lat',
		'_ctc_event_map_lng',
		'_ctc_event_map_type',
		'_ctc_event_map_zoom'
	  )
	) );
  
	add_theme_support( 'ctc-people', array(
	  'taxonomies' => array( 'ctc_person_group' ),
	  'fields'     => array(
		'_ctc_person_position',
		'_ctc_person_phone',
		'_ctc_person_email',
		'_ctc_person_urls'
	  )
	) );
  
	add_theme_support( 'ctc-locations', array(
	  'fields' => array(
		'_ctc_location_address',
		'_ctc_location_map_lat',
		'_ctc_location_map_lng',
		'_ctc_location_map_type',
		'_ctc_location_map_zoom',
		'_ctc_location_phone',
		'_ctc_location_email',
		'_ctc_location_times'
	  )
	) );
	
	add_theme_support( 'tbcf', array(
		'widgets' => array(
			'events' => array(
				'fields' => array( 'title', 'number', 'thumbnail', 'date', 'time' )
			),
			'locations' => array(
				'fields' => array( 'title', 'thumbnail', 'address', 'times', 'map' )
			),
			'people' => array(
				'fields' => array( 'title', 'group', 'number', 'thumbnail', 'excerpt', 'position' )
			),
			'sermons' => array(
				'fields' => array( 'title', 'number', 'thumbnail', 'excerpt', 'date' )
			)
		)
	) );
	
}
   
add_action( 'after_setup_theme', 'yourtheme_add_ctc_support' );