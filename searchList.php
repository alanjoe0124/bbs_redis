<?php

require_once ("./ClassLib/SearchList.class.php");
require_once("./Smarty/config/config.php");
require_once("./ClassLib/Mysql.class.php");
$table = "bbs";
$getCondition="time";
$mysql = new Mysql($db, $ip, $dbUser, $pwd);

$getMenuId = $_POST['menuId'];
$search=new SearchList();
$search->main($getMenuId,$getCondition,$table,$mysql,$smarty);
?>
