<?php	
/*
	header("Content-type:text/html;charset=UTF-8");
	define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
	define("SMARTY_PATH","/bbs_smarty4.0/Smarty/");
	require BASE_PATH.SMARTY_PATH."Smarty.class.php";  // define the Path of Smarty.class.php 
	$smarty=new Smarty; 
	$smarty->template_dir= BASE_PATH.SMARTY_PATH."templates/";   // define the tpl
	$smarty->compile_dir=BASE_PATH.SMARTY_PATH."templates_c"; 
	$smarty->config_dir= BASE_PATH.SMARTY_PATH."config/";             //define config
	$smarty->cache_dir=BASE_PATH.SMARTY_PATH."cache";
 */
//header("Content-type:text/html;charset=UTF-8");
define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
define("CLASS_PATH","/bbs_smarty4.0/ClassLib/");
require_once BASE_PATH.CLASS_PATH."Config.class.php"; 

$smarty=new Config();
$smarty->config_smarty();
$db="bbs_smarty";
$ip="127.0.0.1";
$dbUser="alan";
$pwd="secret";
$redisPort="6379";
?>