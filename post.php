<?php

require_once("./Smarty/config/config.php");
require_once("./ClassLib/Post.class.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Cookie.class.php");

$post = new Post();
$mysql = new Mysql($db, $ip, $dbUser, $pwd);
$getMenuId=$_REQUEST['menuId'];
$smarty->assign('getMenuId', $getMenuId);
$page=$_REQUEST['page'];
$smarty->assign("page", $page);
$cookie = new Cookie();
$s = "userName";
$cookie_name = $post->cookie_handle($s, $cookie, $smarty);      // cookie name get
$table = "menu";
$post->category_name_get($smarty, $table, $mysql, $getMenuId); // category name get
$post->post_handle($smarty, $mysql, $tablebbs, $cookie_name, $titleName, $getMenuId, $titleContent,$table,
                $page,$redis, $ip, $redisPort, $num);
$smarty->display("post.html");
?>