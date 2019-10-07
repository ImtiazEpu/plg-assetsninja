<?php
/*
Plugin Name: Assets Ninja
Plugin URL:
Description: Assets management in depth
Version: 1.0.0
Author: Imtiaz Epu
Author URI: https://www.imtiazepu.com
License: GPLv2 or later
Text Domain: assetsninja
Domain Path: /languages/
*/


/**
 * Kick-in Class AssetsNinja
 */
class AssetsNinja {

	/**
	 * AssetsNinja constructor.
	 */
	public function __construct() {
		add_action( "plugin_loaded", array( $this, "load_text_domain" ) );
		add_action( "wp_enqueue_scripts", array( $this, "load_frontend_assets" ) );
	}//End method constructor


	/**
	 *Load text domain or translator
	 */
	public function load_text_domain() {
		load_plugin_textdomain( 'assetsninja', false, dirname( __FILE__ ) . "/languages" );
	}//End method load_text_domain

	public function load_frontend_assets() {

	}


}//End Class AssetsNinja
new AssetsNinja();