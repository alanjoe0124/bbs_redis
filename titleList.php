<?php

require_once("./Smarty/config/config.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Cookie.class.php");
require_once("./ClassLib/Page.class.php");
require_once("./ClassLib/TitleList.class.php");

function smarty_block_nocache($param, $content, $smarty) {
    return $content;
}

$smarty->registerPlugin("function", "nocache", "smarty_block_nocache");
$smarty->caching = true;        // cache on
$smarty->cache_lifetime = 120;

$url = $_SERVER['REQUEST_URI'];  // cache per page

$tableCateName = "menu";
$tableBbsName = "bbs";
$s = "userName"; //cookie name variable_name set $_COOKIE["$s"]
$cookie = new Cookie();
$titleList = new TitleList();
$titleList->cookie_handle($s, $cookie, $smarty);
if ($_GET['menuId'] != NULL) {             // get menuId for select category name from db : ~start
    $getMenuId = $_GET['menuId'];
} else {
    $getMenuId = '1';
}

if (!$smarty->isCached("titleList.html", $url)) {
    $mysql = new Mysql($db, $ip, $dbUser, $pwd);
    $titleList->get_cate_name($getMenuId, $tableCateName, $mysql, $smarty);
    // page the title listed under the subcategory ***
    $rowsPerPage = 6;  //rows per page
    $paging = new Page($rowsPerPage);
    $arrPaging = $titleList->page_handle($getMenuId, $tableBbsName, $mysql, $paging);
    $page = $arrPaging['page'];
    $pages = $arrPaging['pages']; //offset ,pages
    $offset = $arrPaging['offset'];
    $getCondition = $_REQUEST['condition'];
    $titleList->list_titles($getMenuId, $getCondition, $rowsPerPage, $tableBbsName, $mysql, $smarty, $offset);
    $titleList->page_list($paging, $smarty, $page, $pages, $getMenuId, $getCondition);
    $titleList->list_tops($getMenuId, $tableBbsName, $smarty, $mysql);
}
$smarty->display('titleList.html', $url); // cache per page
/* $smarty->display('titleList.html'); */
?>


