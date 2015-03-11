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

//@TODO fill plugin information before first release

// Absolute system path to dir with plugin
define('PLUGIN_PATH', plugin_dir_path(__FILE__));

add_action("template_redirect", 'url_redirect');

function url_redirect() {
    global $wp;
    $pageName = $wp->query_vars["pagename"];
    
    //@TODO do something here to avoid 400 error
    if (strpos($pageName, 'ottemo') === 0) {
        include(PLUGIN_PATH . '/ottemo.php');
        die();
    }
    
    
}




