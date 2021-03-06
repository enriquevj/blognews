<?php
// File Security Check.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Heading definition.
 */
$options[] = array( "name" => _x("Advanced Settings", "theme-options", 'the7mk2'), "type" => "heading", "id" => "advanced-settings" );

$options[] = array(	"name" => _x('Margin for pages, posts & templates', 'theme-options', 'the7mk2'), "type" => "block" );

$options['general-page_content_margin'] = array(
	'name' => _x( 'Margin', 'theme-options', 'the7mk2' ),
	'id' => 'general-page_content_margin',
	'type' => 'spacing',
	'std' => '50px 50px',
	'units' => 'px',
	'fields' => array(
		_x( 'Top', 'theme-options', 'the7mk2' ),
		_x( 'Bottom', 'theme-options', 'the7mk2' ),
	),
);

/**
 * Responsive.
 */
$options[] = array(	"name" => _x('Responsiveness', 'theme-options', 'the7mk2'), "type" => "block" );

// radio
$options[] = array(
	"name"		=> _x('Responsive layout', 'theme-options', 'the7mk2'),
	"id"		=> 'general-responsive',
	"std"		=> '1',
	"type"		=> 'radio',
	'show_hide'	=> array( '1' => true ),
	"options"	=> $en_dis_options
);


$options[] = array( 'type' => 'divider' );

$options[] = array(
	"type" => 'title',
	"name" => _x('Side padding', 'theme-options', 'the7mk2')
);

$options['general-side_content_paddings'] = array(
	'name' => _x( 'Side padding (px)', 'theme-options', 'the7mk2' ),
	'id' => 'general-side_content_paddings',
	'std' => '40',
	'type' => 'text',
	'sanitize' => 'dimensions',
);

$options['general-switch_content_paddings'] = array(
	'name' => _x( 'When screen width is less then.. (px)', 'theme-options', 'the7mk2' ),
	'id' => 'general-switch_content_paddings',
	'std' => '640',
	'type' => 'text',
	'sanitize' => 'dimensions',
);

$options['general-mobile_side_content_paddings'] = array(
	'name' => _x( '..make padding (px)', 'theme-options', 'the7mk2' ),
	'id' => 'general-mobile_side_content_paddings',
	'std' => '20',
	'type' => 'text',
	'sanitize' => 'dimensions',
);


/**
 * Images lazy loading.
 */
$options[] = array(	"name" => _x('Images lazy loading', 'theme-options', 'the7mk2'), "type" => "block" );

$options['general-images_lazy_loading'] = array(
	"id"		=> 'general-images_lazy_loading',
	"name"		=> _x('Images lazy loading', 'theme-options', 'the7mk2'),
	"desc"		=> _x('Can dramatically reduce page loading speed. Recommended.', 'theme-options', 'the7mk2'),
	"std"		=> '1',
	"type"		=> 'radio',
	"options"	=> array(
		'1' => _x('Enabled', 'theme-options', 'the7mk2'),
		'0' => _x('Disabled', 'theme-options', 'the7mk2'),
	)
);

/**
 * Smooth scroll.
 */
$options[] = array(	"name" => _x('Smooth scroll', 'theme-options', 'the7mk2'), "type" => "block" );

// radio
$options[] = array(
	"name"		=> _x('Enable "scroll-behaviour: smooth" for next gen browsers', 'theme-options', 'the7mk2'),
	"id"		=> 'general-smooth_scroll',
	"std"		=> 'on',
	"type"		=> 'radio',
	"options"	=> array(
		'on'			=> _x( 'Yes', 'theme-options', 'the7mk2' ),
		'off'			=> _x( 'No', 'theme-options', 'the7mk2' ),
		'on_parallax'	=> _x( 'On only on pages with parallax', 'theme-options', 'the7mk2' )
	)
);

/**
 * Images speed resize.
 */
$options[] = array(	"name" => _x('Images speed resize', 'theme-options', 'the7mk2'), "type" => "block" );

$options['advanced-speed_img_resize'] = array(
	"id"		=> 'advanced-speed_img_resize',
	"name"		=> _x('Images fast resize', 'theme-options', 'the7mk2'),
	"desc"		=> _x('Can slightly reduce page load time.', 'theme-options', 'the7mk2'),
	"std"		=> '0',
	"type"		=> 'radio',
	"options"	=> array(
		'1' => _x('Enabled', 'theme-options', 'the7mk2'),
		'0' => _x('Disabled', 'theme-options', 'the7mk2'),
	)
);

/**
 * Heading definition.
 */
$options[] = array( "name" => _x("Custom CSS", "theme-options", 'the7mk2'), "type" => "heading", "id" => "custom-css" );

/**
 * Custom css
 */
$options[] = array(	"name" => _x('Custom CSS', 'theme-options', 'the7mk2'), "type" => "block" );

// textarea
$options[] = array(
	"settings"	=> array( 'rows' => 16 ),
	"id"		=> "general-custom_css",
	"std"		=> false,
	"type"		=> 'textarea',
	"sanitize"	=> 'without_sanitize'
);

/**
 * Heading definition.
 */
$options[] = array( "name" => _x("Custom JavaScript", "theme-options", 'the7mk2'), "type" => "heading", "id" => "custom-javascript" );

/**
 * Tracking code
 */
$options[] = array(	"name" => _x('Tracking code (e.g. Google analytics) or arbitrary JavaScript', 'theme-options', 'the7mk2'), "type" => "block" );

// textarea
$options[] = array(
	"settings"	=> array( 'rows' => 16 ),
	"id"		=> "general-tracking_code",
	"std"		=> false,
	"type"		=> 'textarea',
	"sanitize"	=> 'without_sanitize'
);
