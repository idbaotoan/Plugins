<?php
/**
 * Fixed Header
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$style = get_option( 'stylesheet' );

if($style == 'jobify-skin-1'){

	$wp_customize->add_setting( 'site-header--transparent', array(
		'default' => true,
	) );

	$wp_customize->add_control( 'site-header--transparent', array(
		'label' => __( 'Transparent Header', 'jobify' ),
		'type' => 'checkbox',
		'priority' => 50,
		'section' => 'title_tagline',
	) );

}else{
	$wp_customize->add_setting( 'fixed-header', array(
	'default' => true,
	) );

	$wp_customize->add_control( 'fixed-header', array(
		'label' => __( 'Fixed Header', 'jobify' ),
		'type' => 'checkbox',
		'priority' => 50,
		'section' => 'title_tagline',
	) );
}