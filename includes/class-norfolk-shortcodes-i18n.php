<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://adamwills.io
 * @since      1.0.0
 *
 * @package    Norfolk_Shortcodes
 * @subpackage Norfolk_Shortcodes/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Norfolk_Shortcodes
 * @subpackage Norfolk_Shortcodes/includes
 * @author     Adam Wills <adam@adamwills.com>
 */
class Norfolk_Shortcodes_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'norfolk-shortcodes',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
