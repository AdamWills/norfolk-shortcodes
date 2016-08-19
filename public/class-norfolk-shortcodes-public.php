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
		if ( is_page( 'directory' ) ) {
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/norfolk-shortcodes-public.js', array( 'jquery' ), $this->version, false );
		}

	}

	public function convert_email( $atts, $email = null ) {
		$email = antispambot($email);
		return "<a href=\"mailto:$email\">$email</a>";
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

	public function layout_row( $atts, $content = null ) {
		return '<div class="row">' . do_shortcode( $content ) . '</div>';
	}

	public function layout_one_third( $atts, $content = null ) {
		return '<div class="col-sm-4">' . do_shortcode($content) . '</div>';
	}

	public function layout_two_third( $atts, $content = null ) {
		return '<div class="col-sm-8">' . do_shortcode($content) . '</div>';
	}

	public function layout_one_half( $atts, $content = null ) {
		return '<div class="col-sm-6">' . do_shortcode($content) . '</div>';
	}

	public function layout_one_quarter( $atts, $content = null ) {
		return '<div class="col-sm-3">' . do_shortcode($content) . '</div>';
	}

	public function layout_three_quarters( $atts, $content = null ) {
		return '<div class="col-sm-9">' . do_shortcode($content) . '</div>';
	}

	public function list_accessibles($atts) {
		extract( shortcode_atts( array(
				'accessible' => false,
				'bathroom' => false,
				'class-norfolk-shortcodes-public.phpmoking' => false,
				'parking' => false,
				'pets' => false),$atts));

		$string = "<ul class='accessible_list'>";
		if($accessible)
			$string.= '<li><img src="'. get_bloginfo("siteurl").'/wp-content/images/accessible.png" alt="' . __('Accessible Location', $this->plugin_name ) . '" /></li>';
		if($bathroom)
			$string.= '<li><img src="'. get_bloginfo("siteurl").'/wp-content/images/bathroom.png" alt="' . __('Bathroom Available', $this->plugin_name ) . '" class="access_icon" /></li>';
		if($parking)
			$string.= '<li><img src="'. get_bloginfo("siteurl").'/wp-content/images/parking.png" alt="' . __('Parking Available', $this->plugin_name ) . '" class="access_icon" /></li>';
		if($pets)
			$string.= '<li><img src="'. get_bloginfo("siteurl").'/wp-content/images/pets.png" alt="' . __('Pets Allowed', $this->plugin_name ) . '" class="access_icon" /></li>';
		if($string=="<ul class='accessible_list'>")
			return false;
		else {
			$string.="</ul>";
			return $string;
		}
	}

	public function show_css_map( $atts, $content = null ) {
		return '<iframe src="http://mapsengine.google.com/map/embed?mid=zGbM0wbBx1cM.ku4RzdU5efu4" width="580" height="460"></iframe>';
	}


	public function show_surplus_properties( $atts, $content = null ) {

		$args = array(
			'post_type' => 'surplus-properties'
		);
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) :
			$listing = '<table class="table" id="bidding_table">';
			$listing.= '<thead><tr><th>' . __( "Property Address", $this->plugin_name ) . '</th><th>' . __( "Listing Date", $this->plugin_name ) . '</th></tr></thead>';
			while ( $the_query->have_posts() ) : $the_query->the_post();
				$listing.='<tr><td><a href="'.get_permalink().'">'. get_the_title() .'</a></td><td>'.get_post_meta(get_the_ID(),"_refactord-datepicker",true).'</td>\n';
			endwhile;
			$listing.='</table>';
		else:
			$listing = '<p>'. __( 'There are no surplus properties listed at this time.', $this->plugin_name ) .'</p>';
		endif;

		wp_reset_query();
		return $listing;
	}

	public function filter_where( $where='' ){
		$where .= " AND post_date > '" . date('Y-m-d', strtotime('-500 days')) . "'";
		return $where;
	}

	public function show_bidding_opportunities() {
		$listing="<table class=\"table\" id=\"bidding_table\"><thead>";
		$listing.="<tr><th>Document Number</th><th>Document Name</th><th>Closing Date</th></tr>";
		$listing.="</thead>";
	    add_filter('posts_where', array(&$this, 'filter_where'));
		$args = array( 'post_type' => 'bidding', 'posts_per_page'=>'100');
	    query_posts($args);
	    while ( have_posts() ) : the_post();
	    	$listing.="<tr><td>". get_post_meta(get_the_ID(),"_docnum",true)."</td><td><a href=\"".get_permalink()."\">". get_the_title() ."</a></td><td>".get_post_meta(get_the_ID(),"_refactord-datepicker",true)."</td>\n";
	  	endwhile;
		$listing.="</table>";
		wp_reset_query();
		return $listing;
	}

	// functionality for generting the AZ directory
	public function show_directory() {

		delete_transient('norfolk_az_directory');

		if ( false === ( $directory = get_transient( 'norfolk_az_directory' ) ) ) :

			$tags = get_tags( array('orderby' => 'name', 'order' => 'ASC'));
			foreach($tags as $tag) {
				$tagitem[$i]['key'] = $i;
				$tagitem[$i]['url'] = get_tag_link($tag->term_id);
				$tagitem[$i]['name'] = ucwords($tag->name);
				$tagitem[$i]['count'] = $tag->count;
				$i++;
			}

			$output = "<h2 id='0-9'>0-9</h2>";
			$output.= "<ul class='az_directory_listing'>";
			foreach($tagitem as $tag) {
				if(is_numeric(substr($tag['name'],0,1))) {
					$output.= "<li><a href=\"".$tag['url']."\">" . $tag['name'] . "</a> ";
					if($tag->count > 1) $output.= "(".$tag['count']." related pages)</li>";
					else $output.= "(".$tag['count']." related page)</li>";
					unset($tagitem[$tag['key']]);
				}
				else break;
			}
			$output.= "</ul></li>";

			$alphalist=array();
			for ($i=65; $i<=90; $i++) {
				$lioutput = "<h2 id='" . chr($i) . "'>".chr($i)."</h2>";
				$lioutput.= "<ul class='az_directory_listing'>";
				$mycount=0;

				foreach($tagitem as $tag) {
					if(substr($tag['name'],0,1)==chr($i)) {
						$lioutput.="<li><a href=\"".$tag['url']."\">" . $tag['name'] . "</a> ";
						if($tag['count'] > 1) $lioutput.= "(".$tag['count']." related pages)</li>";
						else $lioutput.="(".$tag['count']." related page)</li>";
						unset($tagitem[$tag['key']]);
						$mycount++;
					}
					else break(1);
				}
				if($mycount>0) {
					$alphalist[]=chr($i);
					$output.= $lioutput;
					$output.= "</ul></li>";
				}
			}

			$heading = "<ul class=\"az_directory_header\">";
			$heading.= "<li><a href=\"#0-9\">0-9</a></li>";
			$select = '<select class="form-control az_directory">';
			$select.= '<option value="">' . __( 'Jump To...', $this->plugin_name ) . '</option>';
			$select.= '<option value="0-9">0-9</option>';
			for($x=0; $x<sizeof($alphalist);$x++) :
				$heading.= "<li><a href=\"#".$alphalist[$x]."\">".$alphalist[$x]."</a></li>";
				$select.=  "<option value=\"".$alphalist[$x]."\">".$alphalist[$x]."</option>";
			endfor;
			$select.='</select>';
			$heading.="</ul>";

			$directory = $heading . $select . $output;

			set_transient( 'norfolk_az_directory', $directory , WEEK_IN_SECONDS );

		endif; // end of

		return $directory;
	}

}
