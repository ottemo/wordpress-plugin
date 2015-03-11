<?php

class Products 
{
    public static function get($post){
        if($post['category']){
            $products = Api::get('category', $post['category'], 'products');
        } else {
            $products = Api::get('products', 'shop');
        }
        
        //@TODO need change API to provide images URL for proudct list
        foreach($products as $key => $product){
            $products[$key]['default_image_url'] = Api::$MEDIA_URL . '/media/' . $product['default_image'];
        }
        return $products;
    }
    
}