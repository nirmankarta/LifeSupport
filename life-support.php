<?php
/*
 * Plugin Name: Life Support
 * Plugin URI: https://www.nirmankarta.com
 * Description: Wordpress plugin to display a custom maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Prabhanshu, Nirmankarta (http:///prabhanshu.com)
 * Author URI: https://www.nirmankarta.com
 *
 * @package life-support
 * @copyright Copyright (c) 2016
 * @license AGPL3
*/
function life_support_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'life_support_mode' );
                            
                            
                            