<?php

class Index {

public function main($listCate,$redis,$s,$tableName,$redisPort,$ip,$smarty,$mysql){
    $this->category($listCate, $tableName, $mysql, $smarty);
    $this->rank($ip, $redis, $redisPort, $smarty);
    }
 public function cookie($cookie,$s,$smarty){
     if($_GET['logout']==1){   // if receive logout message, then expire cookie
     $cookie->set_cookie ($s,"",time()-1);
    }else{
    $cookieName=$cookie->get_cookie($s);       //cookie need web site refresh to be active
    }
        $smarty->assign("cookieName",$cookieName);
    
 }
 public function category($listCate,$tableName,$mysql,$smarty){
    $categoryRows=$listCate->categoryRows($tableName,$mysql);  // category
    $smarty->assign("categoryRows",$categoryRows);
 }
 public function rank($ip,$redis,$redisPort,$smarty){
    $redis->connect("$ip","$redisPort");                  // rank
    $arrRank=$redis->zRevRange('rank',0,10,true);
    $smarty->assign("arrRank",$arrRank);
 }
}
?>