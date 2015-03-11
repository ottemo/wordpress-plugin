<?php

class Product 
{
    public static function load($post){
        $productId = $post['product_id'];
        if(!$productId) die ('Wrong Product Id');

        $product= Api::get('product', $productId);
        $product['default_image_url'] = Api::$API_URL . '/product/' . $product['_id'] . '/media/image/' . $product['default_image'];
        return $product;
    }
    
    public static function getImages($product){
        $productId = $product['_id'];
        $images = Api::get('product', $productId, 'media', 'image');
        foreach($images as $key => $image){
            $images[$key] = Api::$API_URL . '/product/' . $productId . '/media/image/' . $image;
        }
        return $images;
    }
    
}