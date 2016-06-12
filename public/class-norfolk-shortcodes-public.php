<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://adamwills.io
 * @since      1.0.0
 *
 * @package    Norfolk_Shortcodes
 * @subpackage Norfolk_Shortcodes/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Norfolk_Shortcodes
 * @subpackage Norfolk_Shortcodes/public
 * @author     Adam Wills <adam@adamwills.com>
 */
class Norfolk_Shortcodes_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Norfolk_Shortcodes_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Norfolk_Shortcodes_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/norfolk-shortcodes-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Norfolk_Shortcodes_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Norfolk_Shortcodes_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/norfolk-shortcodes-public.js', array( 'jquery' ), $this->version, false );

	}

	public function show_cab_address() {
		$returntext = '<p>';
		$returntext .= '<b>' . __( 'County Administration Building', $this->plugin_name ) . '</b><br/>';
		$returntext .= __( '50 Colborne St. South', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Simcoe, ON', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'N3Y 4H3', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Phone: 519-426-5870', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Fax: 519-426-8573', $this->plugin_name ) . '<br/><br/>';
		// Lets attach the google maps link for this location
		$returntext .= '<a title="' . __('View Map', $this->plugin_name ) . '" class="linkbutton" href="http://maps.google.com/maps?q=50+Colborne+Street+South,+Simcoe,+Ontario,+Canada&amp;hl=en&amp;ll=42.836325,-80.306282&amp;spn=0.013186,0.01929&amp;sll=42.633959,-83.188477&amp;sspn=13.541412,19.753418&amp;vpsrc=6&amp;z=16">' . __( 'View Map', $this->plugin_name ) . '</a>';
		$returntext .= '</p>';	
		return $returntext;
}

}
