<?php
/*

Plugin Name: Lively Chat Support
Plugin URI: http://www.livelychatsupport.com
Description: The best FREE live chat for your WP website (supports images) - forget the hosted chat services.
Version: 2.0
Contributors: dallas22ca
Author: Dallas Read
Author URI: http://www.DallasRead.com
Text Domain: lively-chat-support
Donate link: Just purchase an addon!
Tags: free live chat, live chat, live support, online chat, customer service
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: trunk
License: MIT

Copyright (c) 2014 Dallas Read.

*/

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(-1);

class LivelyChatSupport {
  public static $livelychatsupport_instance;
	const version = "2.0";
	const debug = true;

  public static function init() {
    if ( is_null( self::$livelychatsupport_instance ) ) { self::$livelychatsupport_instance = new LivelyChatSupport(); }
    return self::$livelychatsupport_instance;
  }

  private function __construct() {
		add_action( "admin_menu", array( $this, "menu_page" ) );
		add_action( "wp_footer", array( $this, "wp_footer" ) );
  }
  
  public static function menu_page() {
		if (current_user_can("manage_options")) {
			add_menu_page( "Lively Chat", "Lively Chat", "read", "livelychatsupport", array("LivelyChatSupport", "admin_panel"), plugins_url( "lively-chat-support/assets/icon32.png" ) );
		}
  }
	
  public static function admin_panel() {
		// wp_register_style( "livelychatsupport_admin", plugins_url("admin/css/style.min.css", __FILE__) );
		// wp_enqueue_style( array( "livelychatsupport_admin" ) );
		
		if (ACTIVATED) {
			include 'tabs/help.php';
		} else {
			include 'tabs/activate.php';
		}
  }
	
	public static function wp_footer() {
		if (ACTIVATED || current_user_can("manage_options")) {
			$debug = LivelyChatSupport::debug ? "data-debug" : "";
			echo "<script src=\"https://livelychatsupport.com/assets/lcs.js\" data-lcs=\"TEST\" $debug></script>";
		}
	}
}

LivelyChatSupport::init();

?>
