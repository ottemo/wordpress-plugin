<?php

class Route 
{
    public static function content($post){
        $view = $post['view'];
        if(!$view) $view = 'products';
        $file = PLUGIN_PATH . '/views/' . $view . '.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
    
}