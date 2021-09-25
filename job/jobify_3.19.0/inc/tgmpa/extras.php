<?php
/**
 * the required plugins.
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme astoundify for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

add_action( 'tgmpa_register', 'astoundify_register_required_plugins' );

function astoundify_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'         => 'Testimonials',
			'slug'         => 'testimonials-by-woothemes',
			'source'       => 'https://astoundify.com/packages/testimonials-by-woothemes.zip',
			'version'            => '1.5.5',
			'required'     => false,
			'external_url' => '',
		),

	);

	$config = array(
		'id'           => 'jobify',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',

	);

	tgmpa( $plugins, $config );
}
