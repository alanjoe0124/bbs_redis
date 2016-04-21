<?php

class Login {
    public function cookie($cookie,$count,$s,$userName){
        if ($count != 0) {
        $expire = time() + 3600;
        $value = $userName;
        $cookie->set_cookie("$s", $value, $expire);
        } else { 
                    $cookie->set_cookie("$s", "", $expire);
        }
    }
    public function check_name($mysql,$tableName,$userName,$password){
    $where = array();
    $where["name"] = $userName;
    $where["password"] = $password;
    $sql = $mysql->select($tableName, $cols = array(), $where, $orderBy, $limit);
    //$sql="select * from member where name='".$userName."' and password='".$password."'";
    $res = $mysql->query($sql);
    $count = $mysql->num_rows($res);
    return $count;
    }
}
?>