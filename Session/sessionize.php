<?php 
/**
 * Plugin Name: Sessionize
 * Plugin URI: http://behrouz.com
 * Description: This is a plugin that creates PHP custom Session in WordPress
 * Version: 1.0.0
 * Author: Behrouz Hosseini
 * Author URI: http://behrouz.com
 * License: GPL2
 */
add_action('init', 'wp_sessionize', 1);
function wp_sessionize() {
    if(!session_id()) {
        session_start();
    }
}
