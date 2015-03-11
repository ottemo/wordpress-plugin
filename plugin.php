<?php
/**
 * Plugin Name: Ottemo
 * Plugin URI: http://ottemo.io
 * Description: Ottemo Wordpress Plugin
 * Version: 1.0 test
 * Author: Victor Anischenko
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */

//$_FOUNDATION_SERVER = 'http://192.168.56.101:3000';
//$_PRODUCT_ID = '54d4ccfbbf7ef2c579f730f6';
//define('PUBLIC_URL', plugin_dir_url(__FILE__));
define('PLUGIN_PATH', plugin_dir_path(__FILE__));

//wp_enqueue_style('xz', PUBLIC_URL . 'css/front.css');



add_action("template_redirect", 'url_redirect');

function url_redirect() {
    global $wp;
    $pageName = $wp->query_vars["pagename"];
    
    if (strpos($pageName, 'ottemo') === 0) {
        include(PLUGIN_PATH . '/ottemo.php');
        die();
    }
    
    
}




