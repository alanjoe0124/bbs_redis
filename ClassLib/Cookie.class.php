<?php
class Cookie {  
    public function set_cookie($s,$var,$expireTime){
        setCookie($s,$var,$expireTime+time());
    }
    public function get_cookie($s){
        $var=$_COOKIE["$s"];
        return $var;
    }
}
?>
