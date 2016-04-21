<?php

require_once("./ClassLib/Index.class.php");
require_once("./Smarty/config/config.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Cookie.class.php");
require_once("./ClassLib/ListCate.class.php");

//$db="bbs_smarty";
//$ip="127.0.0.1";
//$dbUser="alan";
//$pwd="secret";
//$redisPort="6379"; saved in config.php

function insert_get_current_time() {
    return date("Y-m-d H:i:s");
}

function smarty_block_nocache($param, $content, $smarty) {
    return $content;
}

$smarty->registerPlugin("function", "nocache", "smarty_block_nocache");

$smarty->caching = true;        // cache on
$smarty->cache_lifetime = 120;

$cookie = new Cookie();
$s = "userName"; //cookie name variable_name set $_COOKIE["$s"]
$tableName = "menu";
$listCate = new ListCate();
$redis = new Redis();
$index = new Index();
$index->cookie($cookie, $s, $smarty); // set cookieName
if (!$smarty->isCached('indext.html')) {
    $mysql = new Mysql($db, $ip, $dbUser, $pwd);
    $index->main($listCate, $redis, $s, $tableName, $redisPort, $ip, $smarty, $mysql);
}
$smarty->display('index.html');
?>