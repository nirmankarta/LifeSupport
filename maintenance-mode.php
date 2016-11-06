<?php
/*
 * Plugin Name: LifeSupport
 * Plugin URI: https://www.nirmankarta.com
 * Description: Wordpress plugin to display a custom maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Prabhanshu, Nirmankarta (http:///prabhanshu.com)
 * Author URI: https://www.nirmankarta.com
 * License: GPL2
 *
 * @package maintenance-mode
 * @copyright Copyright (c) 2016
 * @license AGPL-3.0
*/

/**
 * LifeSupport
 *
 * Wordpress plugin to display the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */
function ng_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( 'HTTP/1.1 Service Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'ng_maintenance_mode' );