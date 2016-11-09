<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://adamwills.io
 * @since      1.0.0
 *
 * @package    Norfolk_Shortcodes
 * @subpackage Norfolk_Shortcodes/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Norfolk_Shortcodes
 * @subpackage Norfolk_Shortcodes/admin
 * @author     Adam Wills <adam@adamwills.com>
 */
class Norfolk_Shortcodes_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/norfolk-shortcodes-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/norfolk-shortcodes-admin.js', array( 'jquery' ), $this->version, false );

	}

	// when saving posts, delete the directory transient so that it can be refreshed
	public function delete_az_directory_transient() {
		delete_transient('norfolk_az_directory');
	}

	// adds a metabox to the bidding opportunities page
	public function add_docnum_metaboxes() {
    add_meta_box('nor_document_number', 'Document Number', array( $this, 'nor_document_number'), 'bidding', 'side', 'default');
	}

	// sets up the field for the document number
	public function nor_document_number() {
    global $post;
     // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="docnum_noncename" id="docnum_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
     // Get the location data if its already been entered
    $docnum = get_post_meta($post->ID, '_docnum', true);
     // Echo out the field
    echo '<input type="text" name="_docnum" value="' . $docnum  . '" class="widefat" />';
 }

	// saves the document number when saving the bidding opportunty
 	public function wpt_save_docnum_meta($post_id, $post) {
     // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !isset($_POST['docnum_noncename']) || !wp_verify_nonce( $_POST['docnum_noncename'], plugin_basename(__FILE__) )) {
			return $post->ID;
    }
     // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID )) return $post->ID;
    // OK, we're authenticated: we need to find and save the data
		// We'll put it into an array to make it easier to loop though.
    $doc_meta['_docnum'] = $_POST['_docnum'];
    // Add values of $events_meta as custom fields
    foreach ($doc_meta as $key => $value) { // Cycle through the $events_meta array!
	    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	    $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	    if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	        update_post_meta($post->ID, $key, $value);
	    } else { // If the custom field doesn't have a value
	        add_post_meta($post->ID, $key, $value);
	    }
	    if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
    }
	}
}
