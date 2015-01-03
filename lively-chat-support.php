<?php
/*

Plugin Name: Lively Chat Support
Plugin URI: http://www.livelychatsupport.com
Description: Live Chat Support is a free live chat plugin for your WordPress website. Live chat will instantly capture leads and turn visitors into customers. Lively is a world-class personalized, engaging chat solution refined for businesses that need high conversions. Try it free!
Version: 2.0
Contributors: dallas22ca
Author: Dallas Read
Author URI: http://www.DallasRead.com
Text Domain: lively-chat-support
Donate link: Just purchase an addon!
Tags: Chat, chat free, chat live, chat plugin, chat support, chat tool, Chat Widget, instant chat, live chat, live chat button, live chat plugin, live chat software, live chat support, live chat tool, live chat widget, live support, live support button, lively chat support, website chat, customer help, customer support, pure chat, online support, support, zendesk, Zopim, clickdesk, olark, snapengage
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
		
		add_action( "wp_ajax_mark_as_active", array( $this, 'mark_as_active' ) );
		add_action( "wp_ajax_nopriv_mark_as_active", array( $this, 'mark_as_active' ) );
  }
  
  public static function menu_page() {
		if (current_user_can("manage_options")) {
			add_menu_page( "Lively Chat", "Lively Chat", "read", "livelychatsupport", array("LivelyChatSupport", "admin_panel"), plugins_url( "lively-chat-support/assets/icon32.png" ) );
		}
  }
	
	public static function wp_footer() {
		if (get_option('livelychatsupport_active') || current_user_can("manage_options")) {
			$url = LivelyChatSupport::debug ? "http://localhost:4200/assets/lcs.js" : "https://livelychatsupport.com/assets/lcs.js";
			$debug = LivelyChatSupport::debug ? "data-debug" : "";
			$token = get_option('livelychatsupport_token', substr(str_shuffle("0123456789ABCDEFGHIJKLMNPQRSTUVWXYZ"), 0, 20));
			$settings = "";
			
			if (!get_option('livelychatsupport_active', false)) {
				$settings = "data-settings=\"" . htmlspecialchars( get_option("livelychatsupport_settings"), true ) . "\"";
				
				echo '<script type="text/javascript">
					window.afterCreateChatbox = function(data) {
						data.action = "mark_as_active";
						jQuery.post("' . admin_url('admin-ajax.php') . '", data);
					}
				</script>';
			}
			
			if (LivelyChatSupport::debug) {
				echo '<script src="http://localhost:4200/assets/vendor.js"></script>';
			}
			
			echo "<script src=\"$url\" data-lcs=\"$token\" $debug $settings></script>";
		}
	}
	
	public static function mark_as_active() {
		update_option('livelychatsupport_token', $_POST['id']);
		update_option('livelychatsupport_active', true);
	}
	
  public static function admin_panel() {
		if (get_option('livelychatsupport_active')) {
			include 'tabs/help.php';
		} else {
			include 'tabs/activate.php';
		}
  }
}

//delete_option('livelychatsupport_token');
//delete_option('livelychatsupport_active');

LivelyChatSupport::init();

?>
