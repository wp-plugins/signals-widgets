<?php

/**
 * Plugin Name: Social Widget
 * Description: Widget for showing Social Media profile links with icons.
 *
 * @link 			http://www.69signals.com
 * @since 			0.1
 * @package 		Signals_Framework
 * @subpackage 		Widgets
 */

class Signals_Social_Widget extends WP_Widget {

	public function __construct() {

		parent::__construct( 'widget_signals_social', __( 'Social', 'signals' ), array(
			'classname'   => 'widget_signals_social',
			'description' => __( 'Widget for showing Social Media profile links with icons.', 'signals' ),
		) );

	}

	/**
	 * Output the HTML for this widget.
	 *
	 * @access public
	 *
	 * @param array $args     An array of standard parameters for widgets in this theme.
	 * @param array $instance An array of settings for this widget instance.
	 * @return void Echoes its output.
	 */
	public function widget( $args, $instance ) {

		$title 			= apply_filters( 'widget_title', $instance['title'] );
		$facebook 		= $instance['facebook'];
		$twitter 		= $instance['twitter'];
		$google 		= $instance['google'];
		$pinterest 		= $instance['pinterest'];
		$feedburner 	= $instance['feedburner'];
		$linkedin 		= $instance['linkedin'];
		$youtube 		= $instance['youtube'];
		$flickr 		= $instance['flickr'];
		$deviantart 	= $instance['deviantart'];
		$github 		= $instance['github'];
		$dribbble 		= $instance['dribbble'];
		$behance 		= $instance['behance'];

		echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		// We are using \r\n for new lines.
		echo '<div class="signals-social">' . "\r\n";

		// If the Facebook profile link is provided.
		if ( ! empty( $facebook ) ) {
			echo '<a href="' . $facebook . '">' . "\r\n";
			echo '<i class="fa fa-facebook"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the Twitter profile link is provided.
		if ( ! empty( $twitter ) ) {
			echo '<a href="' . $twitter . '">' . "\r\n";
			echo '<i class="fa fa-twitter"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the Google profile link is provided.
		if ( ! empty( $google ) ) {
			echo '<a href="' . $google . '">' . "\r\n";
			echo '<i class="fa fa-google-plus"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the Pinterest profile link is provided.
		if ( ! empty( $pinterest ) ) {
			echo '<a href="' . $pinterest . '">' . "\r\n";
			echo '<i class="fa fa-pinterest"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the FeedBurner profile link is provided.
		if ( ! empty( $feedburner ) ) {
			echo '<a href="' . $feedburner . '">' . "\r\n";
			echo '<i class="fa fa-rss"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the LinkedIn profile link is provided.
		if ( ! empty( $linkedin ) ) {
			echo '<a href="' . $linkedin . '">' . "\r\n";
			echo '<i class="fa fa-linkedin"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the YouTube profile link is provided.
		if ( ! empty( $youtube ) ) {
			echo '<a href="' . $youtube . '">' . "\r\n";
			echo '<i class="fa fa-youtube"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the Flickr profile link is provided.
		if ( ! empty( $flickr ) ) {
			echo '<a href="' . $flickr . '">' . "\r\n";
			echo '<i class="fa fa-flickr"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the DeviantArt profile link is provided.
		if ( ! empty( $deviantart ) ) {
			echo '<a href="' . $deviantart . '">' . "\r\n";
			echo '<i class="fa fa-pinterest"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the GitHub profile link is provided.
		if ( ! empty( $github ) ) {
			echo '<a href="' . $github . '">' . "\r\n";
			echo '<i class="fa fa-github"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the Dribbble profile link is provided.
		if ( ! empty( $dribbble ) ) {
			echo '<a href="' . $dribbble . '">' . "\r\n";
			echo '<i class="fa fa-dribbble"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		// If the Behance profile link is provided.
		if ( ! empty( $behance ) ) {
			echo '<a href="' . $behance . '">' . "\r\n";
			echo '<i class="fa fa-behance"></i>' . "\r\n";
			echo '</a>' . "\r\n";
		}

		echo '</div>' . "\r\n";
		echo $args['after_widget'];

	}

	/**
	 * Deal with the settings when they are saved by the admin.
	 * Here is where any validation should happen.
	 *
	 * @param array $new_instance New widget instance.
	 * @param array $instance     Original widget instance.
	 * @return array Updated widget instance.
	 */
	function update( $new_instance, $instance ) {

		$instance['title'] 		= strip_tags( $new_instance['title'] );
		$instance['facebook'] 	= stripslashes( $new_instance['facebook'] );
		$instance['twitter'] 	= stripslashes( $new_instance['twitter'] );
		$instance['google'] 	= stripslashes( $new_instance['google'] );
		$instance['pinterest'] 	= stripslashes( $new_instance['pinterest'] );
		$instance['feedburner'] = stripslashes( $new_instance['feedburner'] );
		$instance['linkedin'] 	= stripslashes( $new_instance['linkedin'] );
		$instance['flickr'] 	= stripslashes( $new_instance['flickr'] );
		$instance['youtube'] 	= stripslashes( $new_instance['youtube'] );
		$instance['deviantart'] = stripslashes( $new_instance['deviantart'] );
		$instance['github'] 	= stripslashes( $new_instance['github'] );
		$instance['dribbble'] 	= stripslashes( $new_instance['dribbble'] );
		$instance['behance'] 	= stripslashes( $new_instance['behance'] );

		return $instance;

	}

	/**
	 * Display the form for this widget on the Widgets page of the Admin area.
	 *
	 * @param array $instance
	 * @return void
	 */
	function form( $instance ) {

		$defaults = array(
			'title' 		=> 'Social',
			'facebook' 		=> '',
			'twitter'		=> '',
			'google'		=> '',
			'pinterest'		=> '',
			'feedburner' 	=> '',
			'linkedin'		=> '',
			'youtube'		=> '',
			'flickr'		=> '',
			'deviantart'	=> '',
			'github'		=> '',
			'dribbble'		=> '',
			'behance'		=> ''
		);

		$instance = wp_parse_args( (array) $instance, $defaults );

		// Displaying the fields over here
		foreach ( $defaults as $key => $value ) {
			echo '<p>' . "\r\n";
			echo '<label for="' . esc_attr( $this->get_field_id( $key ) ) . '">' . sprintf( _x( '%1$s', 'title', 'signals' ), ucfirst( $key ) ) . '</label>' . "\r\n";
			echo '<input class="widefat" id="' . esc_attr( $this->get_field_id( $key ) ) . '" name="' . esc_attr( $this->get_field_name( $key ) ) . '" type="text" value="' . esc_attr( $instance[$key] ) . '" />' . "\r\n";
			echo '</p>' . "\r\n";
		}

	}

} // class Signals_Social_Widget

// Registering the widget
register_widget( 'Signals_Social_Widget' );
