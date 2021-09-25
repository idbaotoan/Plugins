<?php
/**
 * Fixed header.
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$style = get_option( 'stylesheet' );

if($style == 'jobify-skin-1'){
	$transparent_header = get_theme_mod( 'site-header--transparent', true );

	if ( ! $transparent_header ) {
		return;
	}

	astoundify_themecustomizer_add_css( array(
		'selectors' => array(
			'body'
		),
		'declarations' => array(
			'padding-top' => '0px',
		),
	) );
}
else{
	$fixed_header = get_theme_mod( 'fixed-header', true );

	if ( ! $fixed_header ) {
		return;
	}

	astoundify_themecustomizer_add_css( array(
		'selectors' => array(
			'body'
		),
		'declarations' => array(
			'padding-top' => '110px',
		),
	) );
}	
