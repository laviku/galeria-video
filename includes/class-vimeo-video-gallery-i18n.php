<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wordpress.org
 * @since      1.0.0
 *
 * @package    Vimeo_Video_Gallery
 * @subpackage Vimeo_Video_Gallery/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vimeo_Video_Gallery
 * @subpackage Vimeo_Video_Gallery/includes
 * @author     Lavinia <laviniamanzanares@gmail.com>
 */
class Vimeo_Video_Gallery_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vimeo-video-gallery',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
