<?php 
/**
 * Plugin Name: Ajaxify
 * Plugin URI: http://behrouz.com
 * Description: This is a plugin that allows us to test Ajax functionality in WordPress
 * Version: 1.0.0
 * Author: Behrouz Hosseini
 * Author URI: http://behrouz.com
 * License: GPL2
 */
 add_action( 'wp_enqueue_scripts', 'ajaxify_enqueue_scripts' );
function ajaxify_enqueue_scripts() {
     if ( is_page('map') ) {
    wp_enqueue_script( 'ajaxify', get_template_directory_uri() .'/js/ajaxify.js', array('jquery'),'1.0',true );
     }
    wp_localize_script( 'ajaxify', 'postlove', array('ajax_url' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_ajax_nopriv_set_ajaxify', 'set_ajaxify' );
add_action( 'wp_ajax_set_ajaxify', 'set_ajaxify' );

    function set_ajaxify() {
         $_SESSION["domain"] = $_POST["domain"];
         echo $_SESSION["domain"];
        die();
    }
