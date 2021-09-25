<?php
/**
 * CTA: Display
 *
 * @since 3.5.0
 */

if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$style = get_option( 'stylesheet' );

$wp_customize->add_setting( 'cta-display', array(
	'default' => ($style != 'jobify-skin-1')?true:false,
) );

$wp_customize->add_control( 'cta-display', array(
	'label'   => __( 'Display this section', 'jobify' ),
	'type' => 'checkbox',
	'section' => 'footer-cta',
	'priority' => 0,
) );	
