<?php
class Api 
{
    // enter here URL of Dashboard (used for getting images without API)
    public static $MEDIA_URL = 'http://dashboard.ottemo.io'; // or localhost:9000
    
    // enter here your Foundation URL
    public static $API_URL = 'http://dev.ottemo.io:3000'; // or localhost:3000

    private static function noConnection(){
        die('<div class="connection-error">No connection to API on ' . self::$API_URL . '</div>');
    }

    /**
     * Example: "http://foundation.com/one/two/three" = Api::get('one', 'two', 'three')
     * 
     */
    public static function get($p1, $p2 = false, $p3 = false, $p4 = false, $p5 = false, $p6 = false, $p7 = false, $p8 = false){
        $f = function($p){return ($p) ? '/' . $p : ''; };
        $params = $f($p1) . $f($p2) . $f($p3) . $f($p4) . $f($p5) . $f($p6) . $f($p7) . $f($p8);
        
        $ch = curl_init(self::$API_URL . $params); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $data = curl_exec($ch); 
        curl_close($ch); 
        if(!$data) self::noConnection ();
        $response = json_decode($data, true);
        $result = $response['result'];
        return $result;
    }
    
    public function post(){
        
    }
    
    public function delete(){
        
    }
    
    
}