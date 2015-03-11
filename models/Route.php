<?php

class Route 
{
   /**
    *   http://wpsite.com/ottemo?view=somepage&someparameters
    *       ottemo - name of plugin (see plugin.php for details)
    *       view=somepage - name of required php file
    * 
    */
    public static function content($post){
        $view = $post['view'];
        if(!$view) $view = 'products';
        $file = PLUGIN_PATH . '/views/' . $view . '.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
    
}