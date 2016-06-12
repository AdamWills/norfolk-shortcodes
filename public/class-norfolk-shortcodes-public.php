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
		$returntext .= __( 'Phone', $this->plugin_name ) . ':' . __( '519-426-5870', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Fax', $this->plugin_name ) . ':' . __( '519-426-8573', $this->plugin_name ) . '<br/><br/>';
		// Let's attach the google maps link for this location
		$returntext .= '<a title="' . __('View Map', $this->plugin_name ) . '" class="linkbutton" href="http://maps.google.com/maps?q=50+Colborne+Street+South,+Simcoe,+Ontario,+Canada&amp;hl=en&amp;ll=42.836325,-80.306282&amp;spn=0.013186,0.01929&amp;sll=42.633959,-83.188477&amp;sspn=13.541412,19.753418&amp;vpsrc=6&amp;z=16">' . __( 'View Map', $this->plugin_name ) . '<span class="sr-only"> ' . __('of', $this->plugin_name) . ' ' . __( 'County Administration Building', $this->plugin_name ) . '</span></a>';
		$returntext .= '</p>';	
		return $returntext;
	}

	public function show_dab_address() {
		$returntext = '<p>';
		$returntext .= '<b>' . __( 'Delhi Administration Building', $this->plugin_name ) . '</b><br/>';
		$returntext .= __( '183 Main St.', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Delhi, ON', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'N4B 2M3', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Phone', $this->plugin_name ) . ':' . __( '519-582-2100', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Fax', $this->plugin_name ) . ':' . __( '519-582-4571', $this->plugin_name ) . '<br/><br/>';
		// Let's attach the google maps link for this location
		$returntext .= '<a title="' . __('View Map', $this->plugin_name ) . '" class="linkbutton" href="http://maps.google.com/maps?q=183+Main+Steet,+Delhi,+Ontario,+Canada,+n4b+2m3&hl=en&ll=42.854905,-80.49983&spn=0.013182,0.01929&sll=42.854583,-80.498403&sspn=0.006591,0.009645&vpsrc=6&z=16">' . __( 'View Map', $this->plugin_name ) . '<span class="sr-only"> ' . __( 'of', $this->plugin_name ) . ' ' . __( 'Delhi Administration Building', $this->plugin_name ) . '</span></a>';
		$returntext .= '</p>';	
		return $returntext;
	}

	public function show_lab_address() {
		$returntext = '<p>';
		$returntext .= '<b>' . __( 'Langton Administration Building', $this->plugin_name ) . '</b><br/>';
		$returntext .= __( '22 Albert St.', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Langton, ON', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'N0E 1G0', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Phone', $this->plugin_name ) . ':' . __( '519-875-4485', $this->plugin_name ) . '<br/>';
		$returntext .= __( 'Fax', $this->plugin_name ) . ':' . __( '519-875-4789', $this->plugin_name ) . '<br/><br/>';
		// Lets attach the google maps link for this location
		$returntext .= '<a title="' . __('View Map', $this->plugin_name ) . '" class="linkbutton" href="https://www.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Norfolk+County+-+Langton+Administration+Building&aq=&sll=42.74035,-80.579804&sspn=0.013474,0.033023&vpsrc=0&g=Norfolk+County+-+Langton%E2%80%A6&ie=UTF8&hq=administration+building&hnear=Langton,+Haldimand+County,+Ontario,+Canada&t=m&z=17&iwloc=A&cid=3360565729316502194">' . __('View Map', $this->plugin_name ) . '<span class="sr-only"> ' . __( 'of', $this->plugin_name ) . ' ' . __( 'Langton Administration Building', $this->plugin_name ) . '</span></a>';
		$returntext .= '</p>';	
		return $returntext;
	}

}
