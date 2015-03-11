<?php

class Categories 
{
    public static function get(){
        $categories = Api::get('categories');
        return $categories;
    }
    
    public static function tree(){
        $categories = Api::get('categories', 'tree');
        return $categories;
    }
    
    public static function buildCat($cat, $post){
        if($cat['id'] == $post['category']) $active = 'category-active';
        echo '<div class="category-row"><a id="' . $active . '" href="?category=' . $cat['id'] . '">' . $cat['name'] . '</a>';
        if($cat['child']) {
            foreach ($cat['child'] as $subCat){
                 self::buildCat($subCat, $post);
            }
        }
        echo '</div>';
    }
    
}